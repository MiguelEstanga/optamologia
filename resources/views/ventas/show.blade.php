@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        
        <div class="container-fluid row">
            <div class="col-md-6">
                <div class="preview_container">
                    <div class="preview">
                        <div class="avatar_preview">
                            <img 
                             src="{{ asset('storage/' . $producto->imagen ?? 'avatars/avatar.png') }}"
                            id="imagen_preview"
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
                            Còdigo de referencia  :
                        </div>
                        <div class="valor" id="codigo_value">
                            {{$producto->codigo ?? "No encontrado"}}
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Marca  :
                        </div>
                        <div class="valor" id="marca_value">
                            {{ $producto->marca ?? "No encontrado" }}
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Cantidad  :
                        </div>
                        <div class="valor" id="cantidad_value">
                            {{ $producto->cantidad ?? "No encontrado" }}
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Descripciòn :
                        </div>
                        <div class="valor" id="descripcion_value">
                            {{ $producto->descripcio ?? "No encontrado" }}
                        </div>
                        
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Precio  :
                        </div>
                        <div class="valor" id="precio_value">
                            {{ $producto->precio ?? "No encontrado" }}
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Tipo :
                        </div>
                        <div class="valor" id="tipo_value">
                            {{ $producto->tipo ?? "No encontrado" }}
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Descripciòn montura  :
                        </div>
                        <div class="valor" id="descripcion_montura_value">
                                {{ $producto->descripcion_montura ?? "No encontrado" }}
                        </div>
                        
                    </div>
                       
                  </div>
                </div>
            </div>
            
         
         <div class="col-md-6 ">
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
                            <td>{{ $venta->total }}</td>
                           
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