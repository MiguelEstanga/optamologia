@props([
    'id_cliente' => null,
    'id_citas' => null,
    'id_optometrista_paciente'=> null
])

<form action="{{route('optometrista.evaluar_citas_store' , $id_citas)}}" class="m-top-20;" style="margin-bottom:20px" method="POST">
   @csrf
    
    <input type="text" value="{{$id_cliente}}" name="id_cliente" hidden  >
    <input type="text" value="{{Auth::user()->id ?? null}}" name="id_optometrista" hidden  >
    <input type="text" value="{{$id_optometrista_paciente}}" name="id_opstometrista_usuarios" hidden >
    <div class="container">
        <h2>
            Examen RX
        </h2>
    </div>
    <p>
        Efera del derecho
    </p>
    <div class="row m-top-20 container-flex-center " style="margin-top: 20px">
        <div class="col-md-4 ">
            Esfera EPH
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="DEferaEPH">
        </div>
    </div>
    <div class="row m-top-20 container-flex-center" style="margin-top: 20px">
        <div class="col-md-4">
            Cilindro CYL
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="DCilindroCYL">
        </div>
    </div>
    <div class="row m-top-20 container-flex-center" style="margin-top: 20px">
        <div class="col-md-4">
            Eje AXIS
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="DEjeAXIS">
        </div>
    </div>
    <div class="row m-top-20 container-flex-center" style="margin-top: 20px">
        <div class="col-md-4">
            ADD
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="DADD">
        </div>
    </div>
    <p>
        Efera del izquierda
    </p>
    <div class="row m-top-20 container-flex-center" style="margin-top: 20px">
        <div class="col-md-4">
            Esfera SPH
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="IEferaSPH">
        </div>
    </div>
    <div class="row m-top-20 container-flex-center" style="margin-top: 20px">
        <div class="col-md-4">
            Cilindro CLY
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="ICilindroCLY">
        </div>
    </div>
    <div class="row m-top-20 container-flex-center" style="margin-top: 20px">
        <div class="col-md-4">
            Eje AXIS
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="IEjeAXIS">
        </div>
    </div>
    <div class="row container-flex-center"  style="margin-top: 20px">
        <div class="col-md-4">
            ADD
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="IADD">
        </div>
    </div>
    <div class="container container-flex-center m-top-20">
        <x-boton
            titulo="Guardar"
            width="50%"
            height="50px"
        />
    </div>
</form>

<style>
    form{
        color: white;
        box-shadow: 0 0 10px rgba(0,0,0, .200);
        border-radius: 10px;
        padding:20px;
    }
</style>