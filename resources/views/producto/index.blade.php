@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        @include('producto.modulos')
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
                @foreach($data as $producto)
                <tr>
                    <td>
                        <img src="{{asset('storage/'.$producto->imagen)}}" alt="" width="50px" height="50px" />
                    </td>
                    <td>{{$producto->nombre ?? 'No encontrado'}}</td>
                    <td>{{$producto->descripcion ?? 'No encontrado'}}</td>
                    <td>{{$producto->precio ?? 'No encontrado'}}</td>
                    <td>{{$producto->precio ?? 'No encontrado'}}</td>
                    <td>{{$producto->estado->estado ?? 'No encontrado'}}</td>
                    <td>
                        <a href="{{route('venta' , $producto->id)}}" class="btn btn-success">
                            Vender
                        </a>
                    </td>
                    <td>
                        <form action="{{route("producto.edit" , $producto->id)}}" method="get" >
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
                        <form action="{{route('producto.delete' , $producto->id)}}" method="POST">
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
                @endforeach
            </tbody>
        </table>
    </div>
@endsection