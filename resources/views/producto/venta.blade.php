@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        @include('producto.modulos')
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
            
         
         <div class="col-md-6 formulario_container_edit">
                <form action="{{route('venta.store' , $producto->id)}}" method="POST">
                    @csrf
                    <div class="container row container-flex-center" style="margin-top:20px ; color:#fff;">
                        <div class="col-md-4">
                            <label for="">Fecha</label>
                        </div>
                        <div class="col-md-6">
                            <input required type="date" name="fecha" class="form-control"> 
                        </div>
                    </div>
                    <div class="container row container-flex-center" style="margin-top:20px ; color:#fff;">
                        <div class="col-md-4">
                            <label for="">Nombre completo</label>
                        </div>
                        <div class="col-md-6">
                            <input required type="text" name="nombre" class="form-control"> 
                        </div>
                    </div>
                    <div class="container row container-flex-center" style="margin-top:20px ; color:#fff;">
                        <div class="col-md-4">
                            <label for="">Apellido completo</label>
                        </div>
                        <div class="col-md-6">
                            <input required type="text" name="apellido" class="form-control"> 
                        </div>
                    </div>
                    <div class="container row container-flex-center" style="margin-top:20px ; color:#fff;">
                        <div class="col-md-4">
                            <label for="">Cedula/Rif</label>
                        </div>
                        <div class="col-md-6">
                            <input required type="number" name="cedula" class="form-control"> 
                        </div>
                    </div>
                    <div class="container row container-flex-center" style="margin-top:20px ; color:#fff;">
                        <div class="col-md-4">
                            <label for="">Tèlefono</label>
                        </div>
                        <div class="col-md-6">
                            <input required type="number" name="telefono" class="form-control"> 
                        </div>
                    </div>
                    <div class="container row container-flex-center" style="margin-top:20px ; color:#fff;">
                        <div class="col-md-4">
                            <label for="">Cantidad</label>
                        </div>
                        <div class="col-md-6">
                            <input required type="number" name="cantidad" class="form-control" id="cantidad"> 
                        </div>
                    </div>
                    <div class="container row container-flex-center" style="margin-top:20px ; color:#fff;">
                        <div class="col-md-4">
                            <label for="">Totla a pagar</label>
                        </div>
                        <div class="col-md-6" id="total">
                            
                        </div>
                    </div>
                    <div class="container" style="margin-top:20px ; color:#fff;">
                        <x-boton
                            width="100%"
                            height="40px"
                            text="Vender"
                            color="#138d75"
                           
                        />
                    </div>
                </form>
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