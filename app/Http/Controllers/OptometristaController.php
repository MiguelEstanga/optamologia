<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SaludOcular;
use App\Models\PatalogiaOcular;
use App\Models\SaludGeneral;
use App\Models\Disponibilidad;
use App\Models\Aegenda;
use App\Models\Notificacion;
use Spatie\Permission\Models\Role;
use App\Models\OpstometristaUsuario;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamenRTX;

class OptometristaController extends Controller
{
    public function index()
    {
        
        return view('optometrista.index',
            [
                'roles' => Role::all() ?? []
            ]
        );
    }

    public function usuarios()
    {
        $usuarios = User::withoutRole('SuperAdmin')->get();
        
        return view('usuario.index' , [
            'usuarios' => $usuarios,
            'roles' => Role::all()
        ]);
    }

    public function eliminar($id)
    {
        $usuario = User::find($id);
        $usuario->id_estado = 3;
        $usuario->save();
        return back()->with('success' , 'Usuario Inactivo correctamente ');
    }
    public function citas_create()
    {
        return view('admin.citas_create' , [
            'salud_ocular' => SaludOcular::all(),
            'salud_general' => SaludGeneral::all(),
            'patalogia_ocular' => PatalogiaOcular::all(),
            'disponibilidad' => Disponibilidad::all()
        ]);
    }

    public function anular_cita($id)
    {
        $estado = Aegenda::find($id);
        if($estado->id_estado === 7)
        {
            $estado->id_estado = 4;
            $estado->save();
            return back()->with('success' , "Se Cambiado el estado de la cita de  {$estado->nombre_completo} ");
        }
        if($estado->id_estado === 4)
        {
            $estado->id_estado = 7;
            $estado->save();
            return back()->with('success' , "Se Cambiado el estado de la cita de  {$estado->nombre_completo} ");
        }
        
        
        return $estado;
       
    }

    public function cambiar_cita(Request $request)
    {
        $id_disponibilidad = Disponibilidad::find($request->hora);
        $dia = date('w', strtotime($request->dia));
        if($dia == 6) return back()->with('danger' , 'No se laburan los dias de semana por favor elija otro dia ');
        if($dia == 0) return back()->with('danger' , 'No se laburan los dias de semana por favor elija otro dia ');
        $agenda = Aegenda::find($request->id_cita);
        $agenda->id_disponibilidad = $id_disponibilidad->id;
        $agenda->fecha = $request->dia;
        $agenda->save();
        return back()->with('success' , 'Cita cambiada correctamente');
        
    }

    public function asignar_optometrista($id)
    {
        $agenda =  Aegenda::find($id);
        $usuario = User::find($agenda->usuario->id)  ?? [];
        $perfil = $usuario->perfil;
        $optometrista = User::withoutRole([  'superadmin' , 'cliente' , 'Jefe de ventas'])->get();
        return view('optometrista.asignar_optometrista' , [
            'usuario' => $usuario,
            'perfil' => $perfil,
            'agenda' => $agenda,
            'optometrista' => $optometrista
        ]);
    }

    public function asignar_optometrista_store(Request $request)
    {
        $agenda = Aegenda::find($request->id_agenda);
        $usuario = $agenda->usuario;
        $optometrista = User::find($request->id_optometrista);
        $asignacion = OpstometristaUsuario::create([
            'id_usuario' => $usuario->id,
            'id_optometrista' => $optometrista->id,
            'id_agenda' => $agenda->id
        ]);

        Notificacion::create([
            'visto' => false ,
            'titulo' => 'Se ha asignado un optometristra correctamente ',
            'ruta' => 'optometrista.cita_show',
            'id_user' => $usuario->id
        ]);

        Notificacion::create([
            'visto' => false ,
            'titulo' => 'Se te ha asigando un paciente',
            'ruta' => 'optometrista.cita_show',
            'id_user' => $optometrista->id
        ]);
        return back()->with('success' , 'Se ha asignado el optometrista de forma correcta');
    }

    public function pacientes()
    {
        $usuario = User::find(Auth::user()->id); 
        $pacientes =  $usuario->asiganacion_optometrista;
        return view('pacientes.index' , [
            'pacientes' => $pacientes ,
            
        ]);
    }

    public function evaluar_cita($id)
    {

        $cita = Aegenda::find($id);
        $id_optometrista_paciente =  OpstometristaUsuario::where('id_agenda' , $cita->id)->first();
        
        return view('pacientes.evaluar_citas' , [
            'cita' => $cita,
            'id_optometrista_paciente' => $id_optometrista_paciente->id 
        ]);
    }

    public function evaluar_cita_store(Request $request )
    {
        
         $buscarIdCita = OpstometristaUsuario::find($request->id_opstometrista_usuarios);
         
        $chekExamane = ExamenRTX::where('id_optometrista' , $request->id_optometrista)
            ->where('id_cliente' , $request->id_cliente)
            ->where('id_opstometrista_usuarios' , $request->id_opstometrista_usuarios)
            ->exists();
       
        if($chekExamane) return back()->with('success' , 'Ya se le realizo el examen a este usuario');

        $agenda = Aegenda::find($buscarIdCita->id_agenda);
        $agenda->id_estado = 6;
        $agenda->save();
        $examen = ExamenRTX::create($request->all());
       
        return redirect()->route('pacientes.index');
    }

}
