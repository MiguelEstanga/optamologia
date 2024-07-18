@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        @include('producto.modulos')
        <div class="container-fluid row">
                
               
         <div class="col-md-6">
            <table  class="table table-dark" style="color:#fff">
                <thead class="table table-dark table-striped">
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Cantidad
                        </th>
                        
                        <th>
                            Precio
                        </th>
                        <th>
                            Eliminar
                        </th>
                        <th>
                            Agregar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carrito as $producto)
                    <tr>
                      <td>
                        {{$producto->producto->descripcion}}
                      </td>
                      <td>
                        {{$producto->cantidad}}
                      </td>
                     
                      <td>
                        {{$producto->producto->precio}}
                      </td>
                      <td>
                        <form action="{{route('carrito.destroy')}}" method="POST">
                            @csrf
                            <input type="text" name="producto"  value="{{$producto->producto->id}}" hidden>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                      </td>
                        <form  action="{{route('carrito.editar')}}" method="POST">
                            @csrf
                            <td>
                                <input type="number" class="form-control" value="{{$producto->cantidad}}" name="cantidad">
                                <input hidden type="text" value="{{$producto->id_productos}}" name="producto">
                            </td>
                            <td>
                               <button class="btn btn-success">
                                   agregar
                               </button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
         </div>
         
         <div class="col-md-6 formulario_container_edit">
                <form action="{{route('venta.store')}}" method="POST">
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
                            <label for="">Totla a pagar</label>
                        </div>
                        <div class="col-md-6" id="total">
                            {{$total}} BS
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

    
@endsection