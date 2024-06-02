<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTriggerUpdateAngsuranStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER update_angsuran_status
            BEFORE INSERT ON angsuran
            FOR EACH ROW
            BEGIN
                DECLARE total DECIMAL(10, 2);
                DECLARE sisa DECIMAL(10, 2);

                IF NEW.angsuran_ke = 1 THEN
                    -- Calculate sisa_angsuran for the first installment
                    SET total = (SELECT total_pinjaman FROM pinjaman WHERE id = NEW.id_pinjaman);
                    SET sisa = total - NEW.jumlah_bayar;
                    SET NEW.sisa_angsuran = sisa;

                    IF sisa = 0 THEN
                        -- Set status_angsuran to "lunas" if sisa_angsuran is 0
                        SET NEW.status_angsuran = \'lunas\';
                    ELSE
                        -- Set status_angsuran to "belum lunas" if sisa_angsuran is not 0
                        SET NEW.status_angsuran = \'belum lunas\';
                    END IF;

                ELSE
                    -- Get sisa_angsuran from the latest installment with the same id_pinjaman
                    SET sisa = (SELECT sisa_angsuran FROM angsuran WHERE id_pinjaman = NEW.id_pinjaman AND angsuran_ke = NEW.angsuran_ke - 1);
                    SET NEW.sisa_angsuran = sisa - NEW.jumlah_bayar;

                    IF sisa - NEW.jumlah_bayar = 0 THEN
                        -- Set status_angsuran to "lunas" if sisa_angsuran is 0
                        SET NEW.status_angsuran = \'lunas\';
                    ELSE
                        -- Set status_angsuran to "belum lunas" if sisa_angsuran is not 0
                        SET NEW.status_angsuran = \'belum lunas\';
                    END IF;
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the trigger if necessary
    }
}

