<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->text('contenido')->nullable();
            $table->text('imagen')->nullable();
            $table->timestamp('fecha_publicacion')->useCurrent();
            $table->enum('estado', ['proceso', 'finalizado'])->default('proceso');
            $table->text('categoria_id')->constrained('categorias');
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};
