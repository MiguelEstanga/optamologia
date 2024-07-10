@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid row" 
       
    >
        <div class="col-md-6">
            <div class="preview_container">
                <div class="preview">
                    <div class="avatar_preview">
                      
                        <img 
                            src="{{  asset('storage/'.$usuario->perfil->imagen ) }}"
                            style="
                                width: 100%;
                                height: 100%;
                                border-radius: 50%;
                               
                            "
                            alt=""
                        />
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Email :
                        </div>
                        <div class="valor">
                            {{ $usuario->email ?? 'No tiene email'}}
                        </div>
                        
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Nombre :
                        </div>
                        <div class="valor">
                            {{ $usuario->name ?? 'No tiene nombre'}}
                        </div>
                         
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Telefono :
                        </div>
                        <div class="valor">
                            {{ $usuario->telefono ?? 'No tiene telefono'}}
                        </div>
                         
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Edad :
                        </div>
                        <div class="valor">
                            {{ $perfil->edad ?? 'No tiene edad'}}
                        </div>
                    </div>
                    
                    <div class="data_perfil">
                        <div class="titulo">
                            Direccion :
                        </div>
                        <div class="valor">
                            {{ $perfil->direccion ?? 'No tiene direccion'}}
                        </div>
                       
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Cèdula :
                        </div>
                        <div class="valor">
                            {{ $perfil->cedula ?? 'No tiene cedula'}}
                        </div>
                       
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Fecha de nacimiento :
                        </div>
                        <div class="valor">
                            {{ $perfil->fecha_nacimiento ?? 'No tiene fecha de nacimiento'}}
                        </div>
                       
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Sexo :
                        </div>
                        <div class="valor">
                            {{ $perfil->sexo ?? 'No tiene sexo'}}
                        </div>
                        
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Role :
                        </div>
                        <div class="valor">
                            {{ $usuario->getRoleNames()[0] ?? 'no encontrado' }}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 formulario_container_edit">
            <x-formulario
                :edit="true"
                :data="$usuario"
                :perfil="$perfil"
                :route="route('usuario.update' , $usuario->id)"
                :roles="$roles"
         />
        </div>
       
    </div>
    <style>
       
    </style>
@endsection