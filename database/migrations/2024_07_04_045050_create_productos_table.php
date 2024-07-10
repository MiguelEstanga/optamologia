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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("codigo");
            $table->string("marca");
            $table->string("cantidad");
            $table->string("descripcion");
            $table->string('tipo');
            $table->string('precio');
            $table->string('descripcion_montura');
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
        Schema::dropIfExists('productos');
    }
};
