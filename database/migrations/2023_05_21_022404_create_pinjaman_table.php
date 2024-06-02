<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pinjaman', function (Blueprint $table) {
        $table->id();
        $table->string('no_anggota', 225);
        $table->string('nama');
        $table->string('bagian');
        $table->string('alamat');
        $table->string('no_telp');
        $table->enum('pekerjaan', ['dosen', 'staff']);
        $table->string('besar_pinjaman');
        $table->string('besar_angsuran');
        $table->string('tanggal_pengajuan');
        $table->string('nomor_rekening');
        $table->string('email');
        $table->string('bunga');
        $table->string('total_pinjaman');
        $table->string('alasan_pinjaman');
        $table->enum('status_pinjaman', ['terima', 'tolak', 'validasi kabag', 'validasi sdm', 'validasi pengawas', 'validasi bendahara', 'validasi ketua'])->default('validasi kabag');
        $table->enum('jenis_pinjaman', ['biasa', 'khusus', 'urgent'])->default('biasa');
        $table->timestamps();

        // Adding foreign key constraint
        $table->foreign('no_anggota')->references('no_anggota')->on('anggota');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pinjaman_biasa', function (Blueprint $table) {
            // Dropping foreign key constraint
            $table->dropForeign(['no_anggota']);
        });

        Schema::dropIfExists('pinjaman_biasa');
    }
};
