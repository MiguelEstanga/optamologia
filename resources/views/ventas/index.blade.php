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
                        <td>{{ $venta->venta->fecha }}</td>
                        <td>{{ $venta->venta->nombre_cliente }}</td>
                        <td>{{ $venta->venta->apellido_cliente }}</td>
                        <td>{{ $venta->venta->cedula }}</td>
                        <td>{{ $venta->venta->telefono }}</td>
                        
                        <td>{{ $venta->venta->cantidad }}</td>
                        <td>{{  $venta->venta->cantidad * $venta->producto->precio }}BS</td>
                        
                        <td>
                            <a href="{{route('ventas.show' , $venta->venta->id)}}">
                                Ver
                            </a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection