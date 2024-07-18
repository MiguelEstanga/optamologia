@extends('layout.user')

@section('contenedor')
    <div class="container" style="margin-top:20px">
        <div class="perfil_data">
             <div class="img">
                <img
                    width="100%"
                    height="100%"
                     src="https://img.freepik.com/vector-gratis/avatar-personaje-empresario-aislado_24877-60111.jpg?size=338&ext=jpg&ga=GA1.1.1687694167.1714003200&semt=ais" alt="">
             </div> 
             <div class="data">
                    <table class="table">
                        <thead>
                           
                                <tr>
                                    <th>Nombre</th>
                                    <th>E-mail</th>
                                    <th>Telefono</th>
                                    @if( isset(Auth::user()->perfil) )
                                        <th> Dirección de vivienda</th>
                                        <th> Edad</th>
                                        <th> Sexo</th>
                                    @endif
                                </tr>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{Auth::user()->name}}
                                </td>
                                <td>{{Auth::user()->email}}</td>
                                <td>{{Auth::user()->telefono ?? ''}}</td>
                                @if( isset(Auth::user()->perfil) )
                                    <td> {{Auth::user()->perfil->direccion}}</td>
                                    <td> {{ Auth::user()->perfil->edad }}</td>
                                    <td> {{ Auth::user()->perfil->sexo }}</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
             </div>
        </div>
        <div class="container " style="margin-top: 10px; width: 100%!important">
                
                <div class="container">
                    <h3>
                 
                        @if( isset(Auth::user()->perfil) )
                            Felicidades tus has rellenado tu perfil!
                        @else
                            Rellenar perfil 
                        @endif
                       
                    </h3>
                </div>
                
                <div class="container perfil_formulario"  
                    style="
                       
                        border-radius: 10px;
                        border: solid 1px  {{  isset(Auth::user()->perfil) ? "rgba( 29, 131, 72, 0.5);" :  "rgba( 148, 49, 38 , 0.5);" }} ;
                        padding: 20px;
                    "
                >
                    <form action="{{route('perfil.update')}}"  method="post">
                        @csrf
                        @if(  isset(Auth::user()->perfil) )
                            <div class="row margin-top">
                                <div class="col-md-6">
                                    <label for="nombre">Nombre </label>
                                    <input type="text" class="form-control" value="{{Auth::user()->name ?? ""}}" placeholder="Nombre" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control" name="email" value="{{Auth::user()->email?? ""}}" placeholder=" E-mail">
                                </div>
                            </div>
                            <div class="row margin-top">
                                <div class="col-md-12">
                                    <label for="nombre">Telefono </label>
                                    <input type="number" class="form-control" value="{{Auth::user()->telefono ?? ""}}" placeholder="Telefono" name="telefono">
                                </div>
                                
                            </div>
                        @endif
                        <div class="row margin-top">
                           
                            <div class="col-md-6">
                                 <label for="email">Dirección de vivienda</label>
                                <input type="text" class="form-control" name="direccion" value="{{Auth::user()->perfil->direccion ?? ""}}" placeholder="direccion de vivienda">
                            </div>
                        </div>
                        <div class="row margin-top">
                            <div class="col-md-6">
                                <label for="nombre">Edad</label>
                                <input type="number" class="form-control" value="{{Auth::user()->perfil->edad ?? ""}}" placeholder="edad" name="edad">
                            </div>
                            <div class="col-md-6">
                                 <label for="email">Sexo</label>
                                <select class="form-control" name="sexo">
                                    <option   value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="container" style="margin:20px 0;">
                            <x-boton
                                width="100%"
                                text="Actualizar datos de perfil"
                                color="#e67e22 "
                            />
                        </div>
                    </form>
                </div>
            
            
        </div>
    </div>
@endsection