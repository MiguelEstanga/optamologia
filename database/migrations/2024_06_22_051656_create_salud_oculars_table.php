<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SaludOcular;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salud_oculars', function (Blueprint $table) {
            $table->id();
            $table->string('salud_ocular');
            $table->timestamps();
        });

        SaludOcular::create([ "salud_ocular" => "Defectos visuales" ]);
        SaludOcular::create([ "salud_ocular" => "Astigmatismo" ]);
        SaludOcular::create([ "salud_ocular" => "Miopia" ]);
        SaludOcular::create([ "salud_ocular" => "Hipertropia" ]);
        SaludOcular::create([ "salud_ocular" => "Presbicia" ]);
        SaludOcular::create([ "salud_ocular" => "Glaucoma" ]);
        SaludOcular::create([ "salud_ocular" => "Cataratas" ]);
        SaludOcular::create([ "salud_ocular" => "Pterigion" ]);
        SaludOcular::create([ "salud_ocular" => "ninguno" ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salud_oculars');
    }
};
