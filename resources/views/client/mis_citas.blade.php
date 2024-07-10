@extends('layout.user')

@section('contenedor')
    <div class="container" style="margin-top:20px">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Ver respuesta</th>
                </tr>
            </thead>
            <tbody>
                @foreach($miAgenda as $cita)
                    <tr>
                        <td>{{$cita->fecha}}</td>
                        <td>{{$cita->hora->horas}}</td>
                        <td>{{$cita->Telefono}}</td>
                        <td>{{$cita->estado->estado}}</td>
                        <td>
                            <a href="{{route('client_ver_citas' , $cita->id) }}">Ver respuesta</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection