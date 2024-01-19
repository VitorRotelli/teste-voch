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
        Schema::create('Cargo_Colaborador', function (Blueprint $table) {
            $table->id();
            $table->string('cargo_id');
            $table->string('colaborador_id');
            $table->string('nota_desempenho');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cargo_Colaborador');
    }
};
