<div>
    <div class="avatar">
       <x-perfli_carta
        :usuario="Auth::user()"
        :perfil="Auth::user()->perfil"
       />
    </div>
    <nav>
        <ul>
            <li class="{{ Route::is('usuarios.optometrista*') ? 'active' : "" }}" >
                <a href="{{route("usuarios.optometrista")}}">
                    Usuarios
                </a>
            </li>
            <li class="{{ Route::is('panleAdministracion.optometrista_usuario') ? 'active' : "" }}">
                <a href="{{route('panleAdministracion.optometrista_usuario')}}">
                    Registro de Usuario
                </a>
            </li>
            <li class="{{ Route::is('optomestrista.citas*') ? 'active' : "" }}">
                <a href="{{route('optomestrista.citas')}}">
                    Citas
                </a>
            </li>
            <li class="{{ Route::is('producto*') ? 'active' : "" }} }}">
                <a href="{{route('producto')}}">
                    Prescribir lentes
                </a>
            </li>
           
            <li class="{{ Route::is('pacientes.index*') ? 'active' : "" }} }}" >
             
                <a href="{{route('pacientes.index')}}">
                    Pacientes 
                </a>
            </li>

            <li class="{{ Route::is('ventas.index*') ? 'active' : "" }} " >
                <a href="{{route('ventas.index')}}">
                    Ventas
                </a>
            </li>

            <li class="{{ Route::is('reporte.index*') ? 'active' : "" }} " >
                <a href="{{route('reporte.index')}}">
                    Reportes
                </a>
            </li>
            
            <li><a href="{{route('logout')}}">Cerrar Sesión</a></li>
        </ul>
    </nav>
</div>
<style>
    li{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .notificaciones{
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        
        width: 40px;
        margin-left: 100px;
        height: auto;
    }
    .notificaciones{
        color: red;
    }
    .notificaciones svg{
        color: red;
        margin-right: 4px;
    }
</style>