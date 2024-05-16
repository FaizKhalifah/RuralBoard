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
        Schema::create('proyeks', function (Blueprint $table) {
            $table->string("id_proyek")->primary();
            $table->index('id_rencana_proyek');
            $table->index('id_daftar_warga');
            $table->foreign('id_rencana_proyek')->references('id_rencana_proyek')->on('rencana_proyeks')->onDelete('cascade');
            $table->foreign('id_daftar_warga')->references('id_daftar_warga')->on('daftar_wargas')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeks');
    }
};
