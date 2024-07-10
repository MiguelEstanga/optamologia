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
        Schema::create('aegendas', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
           
            $table->string('nombre_completo');
            $table->string('Telefono');
            $table->string('direccion');
            $table->string('cedula');
            $table->string('sintomas');

            $table->foreignId('id_user')
            ->nullable()
            ->constrained('users')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('id_patalogia_ocular')
            ->nullable()
            ->constrained('patalogia_oculars')
            ->cascadeOnDelete()
            ->nullOnDelete();
           

            $table->foreignId('id_salud_ocular')
            ->nullable()
            ->constrained('salud_oculars')
            ->cascadeOnDelete()
            ->nullOnDelete();
       
            $table->foreignId('id_salud_general')
            ->nullable()
            ->constrained('salud_generals')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('id_disponibilidad')
            ->nullable()
            ->constrained('disponibilidads')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('id_estado')
            ->nullable()
            ->constrained('estados')
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
        Schema::dropIfExists('aegendas');
    }
};
