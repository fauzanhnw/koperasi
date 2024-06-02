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
        Schema::create('angsuran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pinjaman');
            $table->enum('angsuran_ke', range(1, 36))->default(1);
            $table->string('jumlah_bayar', 225);
            $table->string('sisa_angsuran', 225)->nullable();
            $table->enum('status_angsuran', ['lunas', 'belum lunas'])->default('belum lunas');
            $table->date('tanggal_bayar');
            $table->timestamps();

            $table->foreign('id_pinjaman')->references('id')->on('pinjaman');

            // Add unique index constraint
            $table->unique(['id_pinjaman', 'angsuran_ke']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('angsuran', function (Blueprint $table) {
            $table->dropForeign(['id_pinjaman']);
        });

        Schema::dropIfExists('angsuran');
    }
};
