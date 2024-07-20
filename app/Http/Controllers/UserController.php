<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Perfil;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuario.edit' , ['usuario' => $usuario , 'perfil' => $usuario->perfil , 'roles' => Role::all()]);
    }
    public function update(Request $request , $id)
    {
        //return $request->all();
        $usuario = User::find($id);
        $perfil = Perfil::find($usuario->perfil->id);
        
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->id_estado = $request->id_estado;
        $usuario->removeRole($usuario->getRoleNames()[0]);
        $usuario->assignRole($request->role);
        if( $request->password != null ){
            $usuario->password = bcrypt($request->password);
        }  
        $usuario->save();
        
        if($request->Imagen != null){
            $perfil->imagen = $request->file('Imagen')->store('avatars' , 'public');
        }     
        $perfil->direccion = $request->direccion;
        $perfil->cedula = $request->cedual;
        $perfil->fecha_nacimiento = $request->fecha_nacimiento;
        $perfil->sexo = $request->sexo;
        $perfil->edad = $request->edad;
     
        $perfil->save();
       
        
        return redirect()->route('usuario.edit' , $id);
    


        
    }

    public function find($email)
    {
        //return response()->json([$email , 1]);
        if( $email == null ) return json_encode(['response' => 'ok' ,"mensage"=> "Campo vacio"]);
        $usuario = User::where('email' , $email )->exists();
       
        if(!$usuario) return json_encode([ 'response' => 'ok' , 'mensage' => 'Usuario no existe', 'protocolo' => 404  ]);
        
        $usuario = User::where('email' , $email )->first();
      //  return response()->json($usuario);
        return response()->json([
            'response' => 'ok' ,
            'mensage' => 'Usuario existe' ,
            'usuario' => $usuario,
            'perfil' => $usuario->perfil ?? [],
            'protocolo' => 201 ,
            'rol' => $usuario->getRoleNames()[0] ?? ''
        ]);
       
    }
}
