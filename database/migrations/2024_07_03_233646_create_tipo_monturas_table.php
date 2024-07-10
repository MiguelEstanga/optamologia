<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TipoMontura;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_monturas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->timestamps();
        });

        TipoMontura::create(['tipo' => 'Monturas']);
        TipoMontura::create(['tipo' => 'Cristales']);
        TipoMontura::create(['tipo' => 'Lentes Contactos']);
        TipoMontura::create(['tipo' => 'Lentes de sol']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_monturas');
    }
};
