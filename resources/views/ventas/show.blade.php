@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        
        <div class="container-fluid row">
            
            
         
         <div class=" ">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Télefono</th>
                        <td>Producto</td>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                      
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($venta as $venta) 
                        <tr>
                            <td>{{ $venta->venta->fecha }}</td>
                            <td>{{ $venta->venta->nombre_cliente }}</td>
                            <td>{{ $venta->venta->apellido_cliente }}</td>
                            <td>{{ $venta->venta->cedula }}</td>
                            <td>{{ $venta->venta->telefono }}</td>
                            <td>{{ $venta->producto->nombre }}</td>
                            <td>{{ $venta->cantidad }}</td>
                            <td>{{ $venta->producto->precio }}</td>
                            <td>{{ $venta->cantidad * $venta->producto->precio }}BS</td>
                            
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
            <div class="container-fluid" 
                style="
                    display:flex;
                    justify-content:end;
                    color:#fff;
                    font-size:20px;
                "
            >
              Total: {{$total}} BS
            </div>
            <div class="container-fluid">
                <a href="{{route('ventas.showpdf' , $id)}}" class="btn btn-success">
                    Generar comprobante
                </a>
            </div>
         </div>
        </div>
    </div>

 
@endsection