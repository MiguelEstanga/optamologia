@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid  row ">
            <div class="col-md-4 container-flex-center ">
               
                <div class="preview_container">
                    <div class="preview">
                        <div class="avatar_preview">
                          
                            <img    
                                id='Oimg'
                               
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
                            <div class="valor" id="OEmail">
                                
                            </div>
                            
                        </div>
                        <div class="data_perfil">
                            <div class="titulo">
                                Nombre :
                            </div>
                            <div class="valor" id="Onombre">
                               
                            </div>
                             
                        </div>
                        <div class="data_perfil">
                            <div class="titulo" >
                                Telefono :
                            </div>
                            <div class="valor" id="Otelefono">
                               
                            </div>
                             
                        </div>
                        
                        <div class="data_perfil">
                            <div class="titulo">
                                Role :
                            </div>
                            <div class="valor" id="ORole">
                              
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div 
                 
                class="container-flex-center col-md-4"
                
                data-bs-target="no"
              
            >
                <form 
                     hidden 
                     action="{{route('optometrista.asignar_store')}}"
                     id="btn_asignar"
                     style="
                        cursor: pointer;
                        transition:all 1s ;
                        color:aliceblue;
                    "
                    method="post"
                >
                    @method('POST')
                    @csrf
                    <input type="text" id="Inombre" name="id_optometrista" hidden >
                    <input type="text" name="id_agenda" hidden value="{{$agenda->id}}" >

                    <button class="btn_asignar">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="100" height="100" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                          </svg>
                    </button>
                </form>
               
            </div>
            <div class="col-md-4">
                <x-perfli_carta
                    :usuario="$usuario"
                    :perfil="$perfil"
                />
            </div>
    </div>
    <div class="conatiner-flex m-top-20">
        <x-tabla_usuario
            :usuarios="$optometrista"
            :esAsignar="true"
            :optionEdit="false"
        />
    </div>
    <script>
        document.getElementById('asignar').addEventListener('click', asignar );
        let URL = `{{env("APP_URL")}}`
         async function asignar(event)
        {
            
            let id =event.target.classList['0'];
            let storage = `{{asset('storage')}}`;
            let URL = `{{env('APP_URL')}}`
            console.log(id)
            let response = await fetch(`${URL}/ususario/${id}`)
            let parse = await response.json()
            console.log(parse.perfil.imagen)
            if(parse.protocolo === 201)
            {
                
                Oimg.src = `${storage}/${parse.perfil.imagen}`
                OEmail.innerHTML = parse.usuario.email
                Onombre.innerHTML = parse.usuario.name
                Otelefono.innerHTML = parse.usuario.telefono
                ORole.innerHTML = parse.rol
                Inombre.value = parse.usuario.id
                btn_asignar.hidden = false
                btn_asignar.style.color = "#fff"
               
            }    
        }
        
    </script>
    <style>
        .btn_asignar{
            border: none;
            background: transparent;
            transition: all .300ms linear;
        }

        .btn_asignar:hover{
            transform: scale(1.1);
            color: chartreuse;
        }
    </style>
@endsection