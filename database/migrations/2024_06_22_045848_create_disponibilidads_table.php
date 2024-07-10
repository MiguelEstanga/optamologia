<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Disponibilidad;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('disponibilidads', function (Blueprint $table) {
            $table->id();
            $table->string('horas');
            $table->timestamps();
        });

        Disponibilidad::create([ "horas" => "08:00" ]);
        Disponibilidad::create([ "horas" => "09:00" ]);
        Disponibilidad::create([ "horas" => "10:00" ]);
        Disponibilidad::create([ "horas" => "11:00" ]);
        Disponibilidad::create([ "horas" => "12:00" ]);
        Disponibilidad::create([ "horas" => "13:00" ]);
        Disponibilidad::create([ "horas" => "14:00" ]);
        Disponibilidad::create([ "horas" => "15:00" ]);
        Disponibilidad::create([ "horas" => "16:00" ]);
        Disponibilidad::create([ "horas" => "17:00" ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilidads');
    }
};
