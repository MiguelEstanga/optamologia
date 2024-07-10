<form action="{{ route('auth.registro') }}" method="POST">
    @csrf
    <x-input
        type="text"
        name="name"
        placeholder="Nombre"
    />
    <x-input
        placeholder="E-mail"
        name="email"
        type="email"
    />
    <x-input
        type="password"
        name="password" 
      
        placeholder="Contraseña"
    />  
    <x-input
        type="password"
        name="confirm_password"
       
        placeholder="Repetir Contraseña"
    />  
    
    <x-input
        type="number"
        name="numero_telefono"
        placeholder="Numero de teléfono"
    />  

    <div class="container">
        <x-boton/>
    </div>
</form>