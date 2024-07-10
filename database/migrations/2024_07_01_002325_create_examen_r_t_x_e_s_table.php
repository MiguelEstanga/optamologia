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
        Schema::create('examen_r_t_x_e_s', function (Blueprint $table) {
            $table->id();

            $table->string('DEferaEPH');
            $table->string('DCilindroCYL');
            $table->string('DEjeAXIS');
            $table->string('DADD');
            $table->string('IEferaSPH');
            $table->string('ICilindroCLY');
            $table->string('IEjeAXIS');
            $table->string('IADD');
            
            $table->foreignId('id_optometrista')
            ->nullable()
            ->constrained('users')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('id_cliente')
            ->nullable()
            ->constrained('users')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('id_opstometrista_usuarios')
            ->nullable()
            ->constrained('opstometrista_usuarios')
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
        Schema::dropIfExists('examen_r_t_x_e_s');
    }
};
