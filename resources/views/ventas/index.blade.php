@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Télefono</th>
                    
                    <th>Cantidad</th>
                    <th>Total</th>
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
                        
                        <td>{{ $venta->cantidad }}</td>
                        <td>{{ $venta->total }}</td>
                        <td>
                            <a href="{{route('ventas.show' , $venta->id_productos)}}">
                                Ver
                            </a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection