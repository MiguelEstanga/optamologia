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
        Schema::create('opstometrista_usuarios', function (Blueprint $table) {
            $table->id();

            
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

            $table->foreignId('id_agenda')
            ->nullable()
            ->constrained('aegendas')
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
        Schema::dropIfExists('opstometrista_usuarios');
    }
};
