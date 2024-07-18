@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
       <form action="{{route('reporte.usuariopdf')}}">
           <select name="sexo" id="" class="form-select">
           
             <option value="Masculino">Masculino</option>
             <option value="Femenino">Femenino</option>
           </select>
           <div class="container-fluid container-flex " style="margin: 30px 0">
            <button class="btn btn-primary">
                Generar reporte
            </button>
       </div>
       </form>
      
    </div>
@endsection