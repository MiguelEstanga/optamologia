<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Perfil;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $role =  Auth::user()->getRoleNames()->first();
           
          

           if($role === 'cliente')
           {
            return redirect()->route('perfil.index');
           }

           return redirect()->route('usuarios.optometrista');
          
        }
        return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
    }
  
    public function registro(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'numero_telefono' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        
       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telefono' => $request->numero_telefono,
            'id_estado' => 1
        ])->assignRole('cliente');

         return redirect()->route('perfil.index');
    }

    public function store_usuario(Request $request)
    {
        //return $request->all();
        $perfil = Perfil::where('cedula' , $request->cedula)->exists();
        if($perfil) return back()->with('success' , 'La cédula esta registrada');
       
        $user =User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telefono' => $request->telefono,
            'id_estado' => 1,
            'id_estado' => 1
        ])->assignRole($request->role);

        Perfil::create([
            'id_user' => $user->id,
            'direccion' => $request->direccion, 
            'telefono' => $request->telefono,
            'edad' => $request->edad,
            'sexo' => $request->sexo,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'cedula' => $request->cedual,
            'imagen' => $request->Imagen ?? "avatars/avatar.png",
        ]);

        return back()->with('success' , 'Usuario creado correctamente');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
