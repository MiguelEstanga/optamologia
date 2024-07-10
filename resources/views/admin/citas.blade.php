@extends('layout.panelAdmin')

@section('content') 
    @include('agenda.modulos')
    <div class="container" style="margin-top:20px">
       
        
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Nombre</th>
                    <th>Anular cita</th>
                    <th>Reprogromar cita</th>
                    <th>Asignar optometrista</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($data as $cita)
                    <tr>
                        <td>{{$cita->fecha}}</td>
                        <td>{{$cita->hora->horas}}</td>
                        <td>{{$cita->Telefono}}</td>
                        <td>{{$cita->estado->estado}}</td>
                        <td>{{$cita->nombre_completo}}</td>
                        <td>
                            <a style="color: aliceblue; text-decoration:none;" href="{{route('anular_cita' , $cita->id)}}">
                                @switch($cita->id_estado)
                                    @case(7)
                                        Anular
                                        @break
                                    @case(4)
                                         Renovar
                                        @break
                                    @default
                                        
                                @endswitch
                              
                            </a>
                        </td>
                      
                        <td>
                            <button type="button" id="{{$cita->id}}" class="btn btn-primary btn_modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Reprograma cita
                            </button>
                        </td>
                        <td>
                            <a href="{{route('optometrista.asignar' , $cita->id)}}">Asignar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form action="{{route("cambiar_cita")}}" method="POST" >
                      @csrf
                      <label for="user_id">Id de la usuario</label>
                      <input readonly class="form-control" name="id_cita" id="user_id" >
                      <div class="container row m-top-20" >
                            <div class="col-md-6">
                                <label for="fecha">Fecha</label>
                                <input type="date" name="dia" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="fecha">Hora</label>
                                <select name="hora" class="form-control" >
                                    @forEach($horas as $hora)
                                        <option value="{{$hora->id}}">{{$hora->horas}}</option>
                                    @endforeach
                                </select>
                            </div>
                      </div>
                        <div class="container m-top-20">
                            <button class="btn btn-success" style="width: 100%!important;">
                                Modificar cita
                            </button>
                        </div>
                   </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
        </div>          
    </div>
    <script>
        addEventListener("DOMContentLoaded", (event) => {
            let modal = document.querySelectorAll(".btn_modal")
            console.log(modal)
            
            function handle_modal(event)
            {   
                let id = event.target.id
                user_id.value = id
                console.log(id);
            }

            modal.forEach(element => {
                console.log(element);
                element.addEventListener("click" , handle_modal)
            });

            
        })
    </script>
@endsection