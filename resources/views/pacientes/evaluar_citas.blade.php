@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        <p style="color:#fff" >
            Sintomas
        </p>
      
        <table class="table table-dark table-striped ">
            <tr>
                <td>Nombre del paciente</td>
                <td>{{$cita->nombre_completo}}</td>
            </tr>
            <tr>
                <td>Patalogia ocular</td>
                <td>{{$cita->patalogia_ocular->patologia_ocular}}</td>
            </tr>
            <tr>
                <td>Salud ocular</td>
                <td>{{$cita->patalogia_ocular->patologia_ocular}}</td>
            </tr>
            <tr>
                <td>Salud general</td>
                <td>{{$cita->salud_general->salud_general}}</td>
            </tr>
        </table>
        <p style="color:#fff" >
            Dscripcón de sintomas
        </p>
        <div class="conatiner sintomas">
            {{$cita->sintomas}}
        </div>

        <div class="container">
            <x-formulario_examen_rtx
                :id_cliente="$cita->id_user"
                :id_citas="$cita->id"
                :id_optometrista_paciente="$id_optometrista_paciente"
            />
        </div>
    </div>

    <style>
        .sintomas{
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
            padding: 20px;
            border-radius: 10px;
            color: #fff;
        }
    </style>
@endsection