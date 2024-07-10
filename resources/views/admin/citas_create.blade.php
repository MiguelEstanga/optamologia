@extends('layout.panelAdmin')

@section('content') 
    @include('agenda.modulos')
    <div class="container-fluid row container-flex-center " style="color: white">
        <div class="form-check col-md-2">
            <input class="form-check-input check" type="radio" name="flexRadioDefault"  value="1">
            <label class="form-check-label" for="flexRadioDefault1">
                Usuario no registrado

            </label>
          </div>
          <div class="form-check col-md-2">
            <input class="form-check-input check" type="radio" name="flexRadioDefault"   value="2">
            <label class="form-check-label" for="flexRadioDefault2">
               Usuario registrado 

            </label>
          </div>
    </div>
    <div class="container-fluid container-flex-center " style="margin-top:20px" >
         
        <div class="container" hidden  id="usuario_no_registrado">
            <x-formulario_agenda
            :salud_ocular="$salud_ocular"
            :salud_general="$salud_general"
            :patalogia_ocular="$patalogia_ocular"
            :disponibilidad="$disponibilidad"
            />       
        </div>
        <div class="container-fluid"id="usuario_registrado" hidden >
           
                <div class="input-group mb-3 col-md-6">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </span>
                    <input type="text" id='email' name="filter" class="form-control" placeholder="buscar usuario por email" aria-label="Username" aria-describedby="basic-addon1">
                </div>  
                <p id="respuesta" style="color: aliceblue" ></p>
                <div class="container-fluid  container-flex-center " style="padding: 10px">
                    
                    <form action="{{route('agenda.store')}}" style="width: 800px!important" id='formulario_cita' hidden method="POST">
                        @csrf
                            <div class="row m-top-10">
                                <div class="col-md-6">
                                    ID del usuario
                                </div>
                                <div class="col-md-6 m-top-20">
                                    <input readonly type="text" id="id_usuario" name="id" class="form-control" >
                                </div>
                            </div>
                            <div class="row m-top-10"  style="margin-top: 20px">
                                <div class="col-md-6">
                                    E-mail
                                </div>
                                <div class="col-md-6">
                                    <input readonly type="text" id="usuario_email" name="usuario_email" class="form-control" >
                                </div>
                            </div>  
                            <div class="row " style="margin-top: 20px">
                                <div class="col-md-6">
                                    Nombre
                                </div>
                                <div class="col-md-6">
                                    <input readonly type="text" id="usuario_nombre" name="nombre" class="form-control" >
                                </div>
                            </div>  
                            <div class="row"  style="margin-top: 20px">
                                <div class="col-md-6">
                                    <label for=""> Dia  </label>
                                    <input  type="date" class="form-control" id="datepicker" name="fecha" required >
                                </div>
                                <div class="col-md-6">
                                    <label class="label-primary" for=""> Hora </label>
                                    <select name="hora" id="" class="form-control" required>
                                        @foreach ($disponibilidad as $disponibilidad)
                                            <option value="{{$disponibilidad->id}}">{{$disponibilidad->horas}}</option>
                                        @endforeach
                                     
                                    </select>
                                </div>
                            </div>
                            <div class="row"  style="margin-top: 20px">
                              
                                    
                                
                               
                                    
                                <div class="col-md-4">
                                    <label class="label-primary" for=""> Salud ocular </label>
                                    <select name="salud_ocular" id="" class="form-control" required>
                                        @foreach ($salud_ocular as $salud_ocular)
                                            <option value="{{$salud_ocular->id}}">
                                                {{$salud_ocular->salud_ocular}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="label-primary" for=""> Salud general </label>
                                    <select name="salud_general" id="" class="form-control" required >
                                        @foreach ($salud_general as $salud_general)
                                            <option value="{{$salud_general->id}}">
                                                {{$salud_general->salud_general}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for=""> Patalogia ocular </label>
                                    <select name="patalogia_ocular" id="" class="form-control" required>
                                        @foreach ($patalogia_ocular as $patalogia_ocular)
                                            <option value="{{$patalogia_ocular->id}}">
                                                {{$patalogia_ocular->patologia_ocular}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>  
                                <div class="container">
                                    <div class="col-md-12">
                                        <label class="label-primary" for=""> Descripción de los sintomas </label>
                                        <textarea class="form-control" name="sintomas" required></textarea>
                                    </div>
                                </div>
                                <div class="container-fluid" style="margin-top: 20px " >
                                    <x-boton
                                         width="100%"
                                        text="Registrar cita"

                                    />
                                </div>
                            </div>
                           
                    </form>
                </div>
            
        </div>
    </div>

    <script>
        addEventListener("DOMContentLoaded", (event) => {
            let opcion = document.querySelectorAll('.check')
            let url = `{{env('APP_URL')}}`
            console.log(url)
            async function buscarUsuario(email)
            {
                
                let response = await fetch(`${url}/ususario/${email}`)
                let parse = await response.json()
                return  parse
            }
            function handleSelection(event){
                let value  = event.target.value
                console.log(value)
                if( parseInt(value) === 1)
                {
                    document.getElementById('usuario_no_registrado').hidden = false
                    document.getElementById('usuario_registrado').hidden = true
                }

                if( parseInt(value) === 2)
                {
                    document.getElementById('usuario_no_registrado').hidden = true
                    document.getElementById('usuario_registrado').hidden = false 
                }
            }
            function options_selection(item){
                item.addEventListener("click" , handleSelection)
            }


            opcion.forEach(options_selection )
            
            email.addEventListener('input' , (event)=>{
                console.log(event.target.value)
                buscarUsuario(event.target.value).then(
                     
                    (response) => {
                        
                        if(response.protocolo === '404'){
                            respuesta.innerHTML = response.mensage
                            formulario_cita.hidden = true
                        }else{
                            respuesta.innerHTML = response.mensage;
                           
                            formulario_cita.hidden = false
                            document.getElementById('id_usuario').value     = response.usuario.id
                            document.getElementById('usuario_email').value  = response.usuario.email
                            document.getElementById('usuario_nombre').value = response.usuario.name
                            
                        }
                    }
                )
            })
        });
        
        
    </script>
@endsection