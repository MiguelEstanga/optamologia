<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\PatalogiaOcular;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patalogia_oculars', function (Blueprint $table) {
            $table->id();
            $table->string('patologia_ocular');
            
            $table->timestamps();
        });

        PatalogiaOcular::create(['patologia_ocular' => 'Sin antecedentes']);
        PatalogiaOcular::create(['patologia_ocular' => 'Alergias oculares']);
        PatalogiaOcular::create(['patologia_ocular' => 'Infecciones oculares']);
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patalogia_oculars');
    }
};
