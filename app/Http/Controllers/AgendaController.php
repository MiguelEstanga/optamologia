<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\PatalogiaOcular;
use App\Models\SaludOcular;
use App\Models\SaludGeneral;
use App\Models\Disponibilidad;
use App\Models\Aegenda;
use App\Models\Perfil;
use App\Models\User;
class AgendaController extends Controller
{
    public function index()
    {

        return view('agenda.index', [
           
            'salud_ocular' => SaludOcular::all(),
            'salud_general' => SaludGeneral::all(),
            'patalogia_ocular' => PatalogiaOcular::all(),
            'disponibilidad' => Disponibilidad::all()
        ]);
    }

    public function store(Request $request)
    {
        $user = User::find($request->id);
        //return $request->all();
        $agenga = Aegenda::create([
            "fecha" => $request->fecha,
            "id_user" => $request->id,
            "id_disponibilidad" => $request->hora,
            "id_salud_general" => $request->salud_general,
            "id_salud_ocular" => $request->salud_ocular,
            "id_patalogia_ocular" => $request->patalogia_ocular,
            
            "nombre_completo" => $user->name,
            "Telefono" => $user->telefono,
            "direccion" => $user->perfil->direccion,
            "cedula" => $user->perfil->cedula,
            "sintomas" => $request->sintomas,
            "id_estado" => 7,
            
        ]);
       
        return back()->with('mensage', 'Agenda creada con éxito');
    }

    public function agenda_usuario(Request $request)
    {
       //return $request->all();
        $user = User::where('email' , $request->email)->exists();
        if($user) return back()->with('mensage' , 'Usuario ya existe');
        $user = User::create([
            'name' => $request->nombre_completo,
            'email' => $request->email,
            'password' => bcrypt('1234567890'),
            'telefono' => $request->Telefono,
            'status' => 1
        ])->assignRole('cliente');

       $perfil = Perfil::create([
            'id_user' => $user->id,
            'direccion' => $request->direccion,
            'sexo' => $request->sexo,
            'cedula' => $request->cedula,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'edad' => $request->edad,
            'imagen' => 'default.png'
        ]);

        $agenga = Aegenda::create([
            "fecha" => $request->fecha,
            "id_user" => $user->id,
            "id_disponibilidad" => $request->hora,
            "id_salud_general" => $request->salud_general,
            "id_salud_ocular" => $request->salud_ocular,
            "id_patalogia_ocular" => $request->patalogia_ocular,
            "nombre_completo" => $user->name,
            "Telefono" => $user->telefono,
            "direccion" => $user->perfil->direccion,
            "cedula" => $user->perfil->cedula,
            "sintomas" => $request->sintomas,
            "id_estado" => 7,
            
        ]);
        return back()->with('mensage', 'Perfil creado con éxito');
    }

    //para los usuario tipo cliente
    public function misCitas($id)
    {
        $user = User::findOrfail($id);
        $miAgenda = $user->misCitas;
        return view('client.mis_citas', [
            'miAgenda' => $miAgenda
        ]); 
    }

    public function citas()
    {
        $agenda = Aegenda::all();
        return view(
            'admin.citas',
            [
                'data' => $agenda,
                'horas'=> Disponibilidad::all()
            ]
        );
    }

    public function citas_filtro(Request $request)
    {
        
        $data = Aegenda::where('nombre_completo' , "like" , $request->filter )
                        ->get();
        return view(
            'admin.citas',
            [
                'data' => $data,
                'horas'=> Disponibilidad::all()
            ]
        );
        
    }
}
