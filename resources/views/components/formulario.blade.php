
    @props([
        'data' => [],
        'perfil' => [],
        'edit' => false,
        'route' => route("panleAdministracion.optometrista_store"),
        'roles' => []
    ])
    <div class="row  formulario_container">
        <div class="container">
            <div class="container">
                
              <form action="{{$route}}" method="POST"  enctype="multipart/form-data">
                    @csrf
               
                    <div class="container">
                        <h2 class="alert "  style="text-align: center">
                              Datos de inicio
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombre">Nombre Completo</label>
                            <input required type="text" name="nombre" id="nombre" value="{{$data->name ?? ''}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="nombre">Password</label>
                            <input  
                               
                                 type="text" name="password" id="nombre" class="form-control">
                        </div>   
                    
                    <div/>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombre">Telefono</label>
                            <input required type="text" name="telefono" value="{{$data->telefono ?? ''}}" id="nombre" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="nombre">E-mail</label>
                            <input required type="text" name="email" id="nombre" value="{{$data->email ?? ''}}" class="form-control">
                        </div>   
                    </div>
                    
                </div>
            
                <div class="container" style="margin-top: 20px">
                    <h2 class="alert "
                        style="text-align: center"
                    >
                        Datos de para el perfil
                    </h2>
                    
                        <div class="row margin-top">
                        
                            <div class="col-md-6">
                                <label for="email">Dirección de vivienda</label>
                                <input required type="text" class="form-control" name="direccion"  value="{{$perfil->direccion ?? ''}}" placeholder="direccion de vivienda">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Imagen</label>
                                <input  type="file" class="form-control" name="Imagen" value=""  placeholder="direccion de vivienda">
                            </div>
                        </div>
                        <div class="row margin-top">
                        
                            <div class="col-md-6">
                                <label for="email">Cèdula</label>
                                <input required type="text" class="form-control" name="cedual" value="{{$perfil->cedula ?? ''}}" placeholder="cedula">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Fecha de nacimiento</label>
                                <input required type="date" class="form-control" name="fecha_nacimiento" value="{{$perfil->fecha_nacimiento ?? ''}}" placeholder="fecha de nacimiento">
                            </div>
                        </div>
                        <div class="row margin-top">
                            <div class="col-md-6">
                                <label for="nombre">Edad</label>
                                <input required type="number" class="form-control" value="{{$perfil->edad ?? ''}}" placeholder="edad" name="edad">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Sexo</label>
                                <select class="form-control" name="sexo">
                                    @if( $edit == true )
                                        <option  {{ $perfil->sexo == 'Masculino' ? 'selected' : '' }} value="Masculino">Masculino</option>
                                        <option  {{ $perfil->sexo == 'Femenino' ? 'selected' : '' }} value="Femenino">Femenino</option>
                                    @else   
                                        <option  value="Masculino">Masculino</option>
                                        <option   value="Femenino">Femenino</option>
                                    @endif
                                    
                                    
                                </select>
                            </div>
                        </div>
                        
                        
                    
                </div>
                @if($edit === true )
                <div class="container">
                    <p class="alert ">
                    Estado
                    </p>
                    <div class="container-fluid m-top-20" >
                        <select name="id_estado" id="" class="form-control">   
                            <option {{ $data->id_estado === 1 ? "selected" : "" }} value="1">Activo</option>
                            <option {{ $data->id_estado === 3 ? "selected" : "" }} value="3">Inactivo</option>
                       </select>
                    </div>
                </div>
                @endif
               
                <div class="container">
                    <p class="alert ">
                    Asignar rol 
                    </p>
                    <div class="container-fluid m-top-20" >
                        
                        <select name="role" id="" class="form-control">
                            @if( $edit === true )
                                @foreach( $roles as $rele )
                                     
                                    <option 
                                        {{
                                            $data->getRoleNames()->first() == $rele->name ? "selected" : ""
                                        }}
                                        value="{{$rele->name}}"
                                    >
                                    
                                    {{  $rele->name }}
                                </option>
                                @endforeach
                            @else
                                @foreach( $roles as $rele )
                                    <option value="{{$rele->name}}">{{$rele->name}}</option>
                                @endforeach
                            @endif
                          
                       </select>
                    </div>
                </div>

                <div class="container" style="margin-top: 20px">
                    <x-boton
                        width="100%"
                        text="{{$edit ? 'Modificar' : 'Registrar usuario'}}"
                        
                        color="{{ $edit == true ? '#186a3b' :   '#e67e22' }} "
                    />
                </div>
              </form>    
        </div>
    </div>
 
    <style>
        .formulario_container{
          color: white;
        }
    </style>