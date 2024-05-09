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
        Schema::create('proyek_warga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyek_id');
            $table->unsignedBigInteger('warga_id');
            $table->timestamps();
        
            $table->foreign('proyek_id')->references('id')->on('proyek')->onDelete('cascade');
            $table->foreign('warga_id')->references('id')->on('warga')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyek_warga');
    }
};
