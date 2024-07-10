@extends('layout.user')

@section('contenedor')
    <div class="container" style="margin-top:20px">
        <h2>
            Resultado de los examenes
        </h2>
        <table class="table">
            <thead>
               <tr>
                    <th>Optometrista</th>
                  
                    <th>
                        Correo
                    </th>
                    <th>
                        Telefono
                    </th>
               </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$optometrista->optometrista->name}}</td>
                    <td>{{$optometrista->optometrista->email}}</td>
                    <td>{{$optometrista->optometrista->telefono}}</td>  
                </tr>
            </tbody>
        </table>
        <table class="table">
            <tr>
                <td>
                    Lado
                </td>
                <td>
                    Derecho
                </td>
            </tr>
           <tr>
              <td>EferaEPH</td>
              <td>{{$examen->DEferaEPH}}</td>
           </tr>
           <tr>
                <td>Cilindro CYL</td>
                <td>{{$examen->DCilindroCYL}}</td>
            </tr>
            <tr>
                <td>Eje AXIS</td>
                <td>{{$examen->DEjeAXIS}}</td>
            </tr>
            <tr>
                <td>ADD</td>
                <td>{{$examen->DADD}}</td>
            </tr>
            <tr>
                <td>
                    Lado
                </td>
                <td>
                    Izquierdo
                </td>
            </tr>
            <tr>
                <td>EferaEPH</td>
                <td>{{$examen->IEferaSPH}}</td>
             </tr>
             <tr>
                  <td>Cilindro CYL</td>
                  <td>{{$examen->ICilindroCLY}}</td>
              </tr>
              <tr>
                  <td>Eje AXIS</td>
                  <td>{{$examen->IEjeAXIS}}</td>
              </tr>
              <tr>
                  <td>ADD</td>
                  <td>{{$examen->IADD}}</td>
              </tr>
        </table>
    </div>
@endsection