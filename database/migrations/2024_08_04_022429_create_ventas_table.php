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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string("fecha");
            $table->string("nombre_cliente");
            $table->string("apellido_cliente");
            $table->string("cedula");
            $table->string("telefono");
          
            $table->string('cantidad');
            $table->string('total');
            $table->foreignId('id_productos')
            
            ->nullable()
            ->constrained('productos')
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
        Schema::dropIfExists('ventas');
    }
};
