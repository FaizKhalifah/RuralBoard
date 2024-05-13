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
       // Migrasi untuk Tabel Proyek
        Schema::create('proyek', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat')->unique();
            $table->string('nama_proyek');
            $table->date('tanggal_pelaksanaan');
            $table->unsignedBigInteger('NIK')->nullable(); 
            $table->timestamps();

            $table->foreign('NIK')->references('NIK')->on('warga')->onDelete('set null'); // Menambah constraint foreign key
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyek');
    }
};
