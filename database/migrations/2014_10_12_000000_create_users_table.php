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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('no_anggota')->unique();
            $table->string('name');
            $table->string('password');
            $table->enum('role', ['ketua', 'pengawas', 'sekretaris', 'anggota', 'bendahara'])->default('anggota');
            $table->rememberToken();
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
        Schema::table('users', function (Blueprint $table) {
            // Dropping foreign key constraint
            $table->dropForeign(['no_anggota']);
        });

        Schema::dropIfExists('users');
    }
};
