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
        Schema::create('maquinas_virtuales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('so', 50);
            $table->string('ram', 50);
            $table->string('cpu', 50);
            $table->string('discoduro', 50);
            $table->string('tipoRed', 50);
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->foreignId('id_usuario')->constrained('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinas_virtuales');
    }
};
