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
        Schema::create('perfils', function (Blueprint $table) {
            $table->id();
            
            $table->string('direccion');
            $table->string('sexo');
            $table->integer('edad');
            $table->string('imagen');
            $table->string('fecha_nacimiento');
            $table->string('cedula');
            
            $table->foreignId('id_user')
            ->nullable()
            ->constrained('users')
            ->cascadeOnDelete()
            ->nullOnDelete();

            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfils');
    }
};
