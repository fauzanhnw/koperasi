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
        Schema::create('jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('no_anggota', 225);
            $table->date('tanggal_dipilih')->nullable();
            $table->date('tanggal_berhenti')->nullable();
            $table->string('sebab_berhenti', 225)->nullable();
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
        Schema::table('jabatan', function (Blueprint $table) {
            // Dropping foreign key constraint
            $table->dropForeign(['no_anggota']);
        });

        Schema::dropIfExists('jabatan');
    }
};

