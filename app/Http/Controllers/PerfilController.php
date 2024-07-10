<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function perfil()
    {
        return view('client.perfil');
    }

    public function update(Request $request)
    {
         
         $perfil = Perfil::where('id_user', auth()->id());
       
         if(!$perfil->exists())
         {
            Perfil::create([
                'nombre_completo' => $request->nombre_completo,
                'direccion' => $request->direccion,
                'sexo' => $request->sexo,
                'edad' => $request->edad,
                'id_user' => auth()->id(),
                'imagen' => 'avatars/avatar.png'
            ]);

            return back()->with('mensaje', 'Datos actualizados con éxito');
         }
         
         $actulizarPerfil = Perfil::where( 'id_user', auth()->id() )->first();
         $actulizarPerfil->nombre_completo = $request->nombre_completo;
         $actulizarPerfil->direccion = $request->direccion;
         $actulizarPerfil->sexo = $request->sexo;
         $actulizarPerfil->edad = $request->edad;
         $actulizarPerfil->save();

         $user = User::find(Auth::user()->id);
         $user->telefono = $request->telefono;
         $user->email = $request->email;
         $user->save();
        return back()->with('mensaje', 'Datos  actualizados con éxito');
    
       
    }
}
