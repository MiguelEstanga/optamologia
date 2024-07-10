@props([
    'data' => [],
    'tipo' => [],
    'descripcion' => [],
    'edit' => false,
    'route' => route("producto.store"),
 
])
<form 
    action="{{$route}}" 
    class="formulario_container" 
    enctype="multipart/form-data" 
    method="POST"
>
    @csrf
    <div class="container row container-flex-center">
        <div class="col-md-4">
            <label for="nombre">Còdigo de referencia</label>
        </div>
        <div class="col-md-6">
            <input required type="text" name="codigo" id="codigo" value="{{$data->codigo ?? ''}}" class="form-control">
        </div>
    </div>
    <div class="container row container-flex-center" style="margin-top:20px;">
        <div class="col-md-4">
            <label for="nombre">Marca</label>
        </div>
        <div class="col-md-6">
            <input required type="text" name="marca" id="marca" value="{{$data->marca ?? ''}}" class="form-control">
        </div>
    </div>
    <div class="container row container-flex-center" style="margin-top:20px;">
        <div class="col-md-4">
            <label for="nombre">Cantidad</label>
        </div>
        <div class="col-md-6">
            <input required type="text" name="cantidad" id="cantidad" value="{{$data->cantidad ?? ''}}" class="form-control">
        </div>
    </div>
    <div class="container row container-flex-center" style="margin-top:20px;">
        <div class="col-md-4">
            <label for="nombre">Descripciòn</label>
        </div>
        <div class="col-md-6">
            <input required type="text" name="descripcion" id="descripcion" value="{{$data->descripcion ?? ''}}" class="form-control">
        </div>
    </div>
    <div class="container row container-flex-center" style="margin-top:20px;">
        <div class="col-md-4">
            <label for="nombre">Precio</label>
        </div>
        <div class="col-md-6">
            <input required type="number" name="precio" id="precio" value="{{$data->precio ?? ''}}" class="form-control">
        </div>
    </div>
   
   
    @if($edit == true)
        <div class="container row container-flex-center" style="margin-top:20px;">
            <div class="col-md-4">
                <label for="nombre">Tipo</label>
            </div>
            <div class="col-md-6">
                <select class="form-control" name="tipo" id="tipo">
                    @foreach ($tipo as $item)
                        <option 
                            {{ $item->tipo == $data->tipo ? 'selected' : '' }}
                            value="{{$item->tipo}}"
                        > 
                            {{$item->tipo}} 
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="container row container-flex-center" style="margin-top:20px;">
            <div class="col-md-4">
                <label for="nombre">Descripciòn montura</label>
            </div>
            <div class="col-md-6">
                <select class="form-control" name="descripcion_montura" id="descripcion_montura">
                    @foreach ($descripcion as $item)
                        <option 
                        {{
                            $item->descripcion == $data->descripcion_montura ? 'selected' : ''
                        }}
                        value="{{$item->descripcion}}">{{$item->descripcion}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @else
        <div class="container row container-flex-center" style="margin-top:20px;">
            <div class="col-md-4">
                <label for="nombre">Tipo</label>
            </div>
            <div class="col-md-6">
                <select class="form-control" name="tipo" id="tipo" >
                    @foreach ($tipo as $item)
                        <option value="{{$item->tipo}}">{{$item->tipo}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="container row container-flex-center" style="margin-top:20px;">
            <div class="col-md-4">
                <label for="nombre">Descripciòn montura</label>
            </div>
            <div class="col-md-6">
                <select class="form-control" name="descripcion_montura" id="descripcion_montura">
                    @foreach ($descripcion as $item)
                        <option 
                            
                            value="{{$item->descripcion}}"
                        >{{$item->descripcion}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

    <div class="container row container-flex-center m-top-20" style="margin-top:20px;">
        <div class="col-md-4">
            <label for="nombre">Imagen</label>
        </div>
        <div class="col-md-6">
            <input id="imagen_formulario" type="file" name="imagen" id="nombre" class="form-control">
        </div>
    <div/>
    <div class="container m-top-20" style="margin-top:20px;">
        <x-boton
        width="100%"
        text="{{$edit ? 'Modificar' : 'Registrar usuario'}}"
        color="{{ $edit == true ? '#186a3b' :   '#e67e22' }} "
    />
    </div>
    
</form>

<style>
     .formulario_container{
          color: white;
        }
</style>