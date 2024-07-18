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
                        
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Comprobante de venta</th>
                        
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $venta->fecha }}</td>
                            <td>{{ $venta->nombre_cliente }}</td>
                            <td>{{ $venta->apellido_cliente }}</td>
                            <td>{{ $venta->cedula }}</td>
                            <td>{{ $venta->telefono }}</td>
                            
                            <td>{{ $venta->cantidad }}</td>
                            <td>{{ $venta->cantidad * $venta->producto->precio }}BS</td>
                            <td>
                                <a class="btn btn-success" href="{{route('ventas.showpdf' ,$venta->id )}}" target="_blanck">
                                    ver
                                </a>
                            </td> 
                        </tr>
                </tbody>
            </table>
         </div>
        </div>
    </div>

    <script>
       addEventListener("DOMContentLoaded", (event) => {
        cantidad.addEventListener('input' , function (){
            if(cantidad.value > 0){
                total.innerHTML = cantidad.value * {{$producto->precio}}
            }
            
        })
       });

    </script>
@endsection