<?php

namespace App\Http\Controllers;

use App\Models\Aegenda;
use App\Models\ExamenRTX;
use App\Models\OpstometristaUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function ver_citas($id)
    {
        $agenda = Aegenda::find($id);
        $optometrista = OpstometristaUsuario::where('id_agenda' , $agenda->id )->first();
         $examen = ExamenRTX::where('id_opstometrista_usuarios' , $optometrista->id)->first();
        
        if(!$optometrista) return back('success' , 'No tiene asiganado un optometrista aun ');
        if(!$examen) return back('success' , 'No se ha realizado un examen aun ');

       
        return view(
            'client.ver_citas',
            [
               
                'examen' => $examen,
                'optometrista' => $optometrista,
                'agenda' =>  $agenda
            ]
        );
    }
}
