@extends('layout.panelAdmin')

@section('content')
    <div class="container">
        <x-formulario
            :roles="$roles"
        />
    </div>
@endsection