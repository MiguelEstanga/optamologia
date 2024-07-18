@props(
    [
        'usuarios' => [],
        'esAsignar' => false,
        'optionEdit' => true
    ]
)
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Direccion de vivienda</th>
            <th>Cedula</th>
            <th>Fecha de nacimiento</th>
            <th>Status</th>
            <th>Rol</th>
            @if($optionEdit == true)
                <th>Modificar</th>
                <th>Eliminar</th>
            @endif
            @if($esAsignar == true )
                <th>Asignar</th>
            @endif
           
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            
            <tr>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->perfil->edad ?? '' }}</td>
                <td>{{ $usuario->perfil->sexo ?? '' }}</td>
                <td>{{ $usuario->perfil->direccion ?? '' }}</td>
                <td>{{ $usuario->perfil->cedula ?? '' }}</td>
                <td>{{ $usuario->perfil->fecha_nacimiento ?? '' }}</td>
                <td>{{ $usuario->estado->estado ?? '' }}</td>
                <td>{{ $usuario->getRoleNames()->first() ?? '' }}</td>
                @if( $optionEdit == true )
                    <td>
                        <form action="{{route('usuario.edit' , $usuario->id)}}" method="get">
                        
                            <x-boton
                                text="Editar"
                                width="70px"
                                height="30px"
                                color="#186a3b"
                                font_size="12px"
                            />
                        </form>
                    </td>
                    <td>
                        <form action="{{route('optomestrista.eliminar' , $usuario->id )}}" method="POST">
                            @csrf
                            <x-boton
                                text="Eliminar"
                                width="70px"
                                height="40px"
                                color=" #641e16 "
                            />
                        </form>
                    </td>
                @endif
                @if($esAsignar == true)
                   <td>
                        <a id='asignar' class="{{$usuario->email}}" style="cursor: pointer">
                            Asiganar
                        </a>
                       
                   </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>