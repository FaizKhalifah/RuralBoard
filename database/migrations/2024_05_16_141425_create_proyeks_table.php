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
            Schema::create('proyeks', function (Blueprint $table) {
                $table->id();
                $table->foreignId('rencana_proyek_id')->constrained();
                $table->foreignId('daftar_warga_id')->constrained();
                $table->timestamps();
            });
            
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
