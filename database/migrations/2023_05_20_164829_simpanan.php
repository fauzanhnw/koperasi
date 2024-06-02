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
        Schema::create('simpanan', function (Blueprint $table) {
            $table->id();
            $table->string('no_anggota', 225);
            $table->enum('bulan', ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
            $table->smallInteger('tahun');
            $table->string('jumlah', 225);
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
        Schema::table('simpanan', function (Blueprint $table) {
            // Dropping foreign key constraint
            $table->dropForeign(['no_anggota']);
        });

        Schema::dropIfExists('simpanan');
    }
};
