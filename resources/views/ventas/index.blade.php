@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Nombre del cliente</th>
                    <th>apellido_cliente</th>
                    <th>Cedula</th>
                    <th>Télefono</th>
                    
                    
                    <th>Detalles</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ventas as $venta)
                    <tr>
                        <td>{{ $venta->fecha }}</td>
                        <td>{{ $venta->nombre_cliente }}</td>
                        <td>{{ $venta->apellido_cliente }}</td>
                        <td>{{ $venta->cedula }}</td>
                        <td>{{ $venta->telefono }}</td>
                        
                      
                        <td>
                            <a target="black" href="{{route('ventas.show' , $venta->id)}}">
                                Ver
                            </a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection