@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        <x-tabla_usuario
            :usuarios="$usuarios"
        />
        
    </div>
@endsection