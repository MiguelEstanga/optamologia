<form action="{{ route('auth.login') }}" method="POST">
    @csrf
    <x-input
        type="email"
        name="email"
        placeholder="E-mail"
    />
    <x-input
        placeholder="Contraseña"
        name="password"
        type="password"
    />
   

    <div class="container">
        <x-boton text="Iniciar sesión" color="#f39c12" />
    </div>
</form>