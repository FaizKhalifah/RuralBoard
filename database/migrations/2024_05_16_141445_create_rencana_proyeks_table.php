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
        Schema::create('rencana_proyeks', function (Blueprint $table) {
            $table->string("id_rencana_proyek")->primary();
            $table->string('nama');
            $table->decimal('budget', 10, 2);
            $table->date('tanggal_pelaksanaan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rencana_proyeks');
    }
};
