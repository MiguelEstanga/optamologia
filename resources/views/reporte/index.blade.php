@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">An active item</li>
            <li class="list-group-item">
                <a href="{{route('reporte.usuario')}}">
                    Reportes de usuarios
                </a>
              
            </li>
            <li class="list-group-item">
                <a href="{{route('reporte.productopdf')}}">
                    Reportes de productos
                </a>      
            </li>
            <li class="list-group-item">
                Reportes de ventas
            </li>
           
          </ul>
    </div>
@endsection