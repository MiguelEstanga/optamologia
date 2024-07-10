<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\DescripcionLentes;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('descripcion_lentes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->timestamps();
        });

        DescripcionLentes::create(['descripcion' => 'Metal Pasta Acetato Titanium']);
        DescripcionLentes::create(['descripcion' => 'Visiòn secilla bifocales progresivos']);
        DescripcionLentes::create(['descripcion' => 'Blandos tóricos gas permeable']);
        DescripcionLentes::create(['descripcion' => 'Metal pasta acetato']);   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descripcion_lentes');
    }
};
