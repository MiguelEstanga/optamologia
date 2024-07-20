@extends('layout.panelAdmin')

@section('content')
   
    <div class="container-fluid">
        @include('producto.modulos')
        <div
        class="container-fluid"
            style="
                margin-bottom:20px;
            "
        >
            <form action="{{route('producto.buscar')}}" class="row" method="GET">
                <div class="col-md-10">
                    <input type="text"  class="form-control" name="codigo" >
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg>
                    </button>
                </div>
            </form>
        </div>
        @if(count($data) == 0)    
            <h2 class="alert alert-success ">Producto no encontrado</h2>
        @else 
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>precio</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Vender</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                
            
                    <tr>
                        <td>
                            <img src="{{asset('storage/'.$data->imagen)}}" alt="" width="50px" height="50px" />
                        </td>
                        <td>{{$data->nombre ?? 'No encontrado'}}</td>
                        <td>{{$data->descripcion ?? 'No encontrado'}}</td>
                        <td>{{$data->precio ?? 'No encontrado'}}</td>
                        <td>{{$data->cantidad ?? 'No encontrado'}}</td>
                        <td>{{$data->estado->estado ?? 'No encontrado'}}</td>
                        <td>
                            <form action="{{route('carrito.agregar')}}" method="POST" >
                                @csrf
                                <input hidden type="text" name="producto" value="{{$data->id}}">
                                <input hidden type="text" name="cantidad" value="1">
                                <button class="btn btn-success">
                                Agregar a la compra
                                </button>
                            </form>
                        
                        </td>
                        <td>
                            <form action="{{route("producto.edit" , $data->id)}}" method="get" >
                                @csrf
                                <x-boton
                                    width="100px"
                                    height="30px"
                                    text="Editar"
                                    color=" #d68910 "
                                    font_size="14px"
                                />
                            </form>
                        </td>
                        <td>
                            <form action="{{route('producto.delete' , $data->id)}}" method="POST">
                                @csrf
                                <x-boton
                                    width="100px"
                                    height="30px"
                                    text="Eliminar"
                                    color="  #943126  "
                                    font_size="14px"
                                />
                            </form>
                        </td>
                    </tr>
            
                    Producto no encotrado en el inventario
            
                </tbody>
            </table>
        @endif
    </div>
@endsection
