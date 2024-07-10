<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Estado;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->timestamps();
        });

        Estado::create([ "estado" => "Activo" ]);
        Estado::create([ "estado" => "Cancelado" ]);
        Estado::create([ "estado" => "Inactivo" ]);
        Estado::create([ "estado" => "Rechazado" ]);
        Estado::create([ "estado" => "Suspendido" ]);
        Estado::create([ "estado" => "Relizado" ]);
        Estado::create([ "estado" => "En proceso" ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
