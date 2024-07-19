@extends('layout.panelAdmin')

@section('content')
<div class="container-fluid">
    <form action="{{route('reporte.productopdf_generar')}}">
        <select name="tipo" id="" class="form-select">
        
          <option value="1">Mas vendido</option>
          
          <option value="3">Menos vendidos</option>
          <option value="2">Agotados</option>
        </select>
        <div class="container-fluid container-flex " style="margin: 30px 0">
         <button class="btn btn-primary">
             Generar reporte
         </button>
    </div>
    </form>
   
 </div>
@endsection