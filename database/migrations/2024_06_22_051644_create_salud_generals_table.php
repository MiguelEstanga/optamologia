<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SaludGeneral;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salud_generals', function (Blueprint $table) {
            $table->id();
            $table->string('salud_general');
            $table->timestamps();
        });
        SaludGeneral::create([ "salud_general" => "Sin antecedentes" ]);
        SaludGeneral::create([ "salud_general" => "Hipertensión" ]);
        SaludGeneral::create([ "salud_general" => "Diabetes" ]);
        SaludGeneral::create([ "salud_general" => "Alergias a medicamentos" ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salud_generals');
    }
};
