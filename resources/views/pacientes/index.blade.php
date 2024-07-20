@extends('layout.panelAdmin')

@section('content')
    @php
        use App\Models\Aegenda;
    @endphp
    <div class="container-fluid">
        <table class="table table-dark table-striped ">
            <thead>
                <tr>
                    <th scope="col">Estado</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Fecha de la cita</th>
                    <th scope="col" >Hora</th>
                   
                    <th scope="col">Ver examen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                    <tr>
                        @php
                            $estado = "";
                            $agenda = Aegenda::find($paciente->id_agenda);
                        @endphp
                        <td>{{$agenda->estado->estado ?? ""}}</td>
                        <td>{{$paciente->cliente->name ?? ''}}</td>
                        <td>{{$paciente->agenda->fecha ??  ""}}</td>
                        <td>{{$paciente->agenda->hora->horas ?? ''}}</td>
                        <td><a href="{{route("optometrista.evaluar_citas" , $paciente->agenda->id ?? 0 )}}">Evaluar</a></td>
                    </tr>
                   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection