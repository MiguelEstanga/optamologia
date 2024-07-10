@props([
    'salud_ocular' => [],
    'salud_general' => [],
    'patalogia_ocular' => [],
    'disponibilidad' => []
])
<form class="container-fluid" action="{{route('agenda_usuarui.store')}}" method="post">
    @csrf
    <div class="container-fluid  row ">
        <p class="" >
            Dato general
        </[]>
        <div class="col-md-6">
            <label for=""> Dia  </label>
            <input  type="date" class="form-control" id="datepicker" name="fecha" required >
        </div>
        <div class="col-md-6">
            <label class="label-primary" for=""> Hora </label>
            <select name="hora" id="" class="form-control" required>
                @foreach ($disponibilidad as $disponibilidad)
                    <option value="{{$disponibilidad->id}}">{{$disponibilidad->horas}}</option>
                @endforeach
             
            </select>
        </div>
       
    </div>
    <hr>
    <div class="row ">
        <p class="">
            Antencendentes medicos
        </p>
       
            <div class="col-md-4">
                <label class="label-primary" for=""> Salud ocular </label>
                <select name="salud_ocular" id="" class="form-control" required>
                    @foreach ($salud_ocular as $salud_ocular)
                        <option value="{{$salud_ocular->id}}">
                            {{$salud_ocular->salud_ocular}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label class="label-primary" for=""> Salud general </label>
                <select name="salud_general" id="" class="form-control" required >
                    @foreach ($salud_general as $salud_general)
                        <option value="{{$salud_general->id}}">
                            {{$salud_general->salud_general}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for=""> Patalogia ocular </label>
                <select name="patalogia_ocular" id="" class="form-control" required>
                    @foreach ($patalogia_ocular as $patalogia_ocular)
                        <option value="{{$patalogia_ocular->id}}">
                            {{$patalogia_ocular->patologia_ocular}}
                        </option>
                    @endforeach
                </select>
            </div>
        
    </div>
    <hr>
    <div class="row ">
        <p >
            Datos personales
        </p>
        <div class="row">
            <div class="col-md-3">
                <label class="label-primary" for=""> Nombre completo</label>
                <input type="text" class="form-control" name="nombre_completo" required>
            </div>
            <div class="col-md-3">
                <label class="label-primary" for=""> Telefono </label>
                <input class="form-control" name="Telefono" required>
            </div>
            <div class="col-md-3">
                <label class="label-primary" for=""> Direccion </label>
                <input  type="text" class="form-control" name="direccion" required>
            </div>
            <div class="col-md-3">
                <label for=""> Cédula  </label>
                <input  type="text" class="form-control" id="datepicker" name="cedula" required>
            </div>
            <div class="col-md-3">
                <label for=""> E-mail  </label>
                <input  type="text" class="form-control" required name="email" required>
            </div>
            <div class="col-md-3">
                <label for=""> Fecha nacimiento  </label>
                <input  type="date" class="form-control" required name="fecha_nacimiento" required>
            </div>
            <div class="col-md-3">
                <label for=""> Edad  </label>
                <input  type="number" class="form-control" required name="edad" required>
            </div>
            <div class="col-md-3">
                <label for=""> Edad  </label>
                <select name="sexo" class="form-control">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row ">
        <p class="">
            Sintomas
        </p>
        <div class="col-md-12">
            <label class="label-primary" for=""> Descripción de los sintomas </label>
            <textarea class="form-control" name="sintomas" required></textarea>
        </div>
    </div>
    <hr>
    <div class="row">
        <x-boton
            width="100%"
            text="Enviar petición"
            color="#e67e22 "
        />
    </div>
</form>
<style>
    form{
        box-shadow: 0 0 10px rgb(0, 0, 0 , .230);
        border-radius: 10px;
        color: #fff;
    
        width: 700px;
        padding: 20px;
    }
</style>