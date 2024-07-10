@props([
    'usuario' => [],
    'perfil' => []
])
<div class="preview_container">
    <div class="preview">
        <div class="avatar_preview">
          
            <img 
                src="{{ asset('storage/' . $usuario->perfil->imagen ?? "avatars/avatar.png") }}"
                style="
                    width: 100%;
                    height: 100%;
                    border-radius: 50%;
                   
                "
                alt=""
            />
        </div>
        <div class="data_perfil">
            <div class="titulo">
                Email :
            </div>
            <div class="valor">
                {{ $usuario->email }}
            </div>
            
        </div>
        <div class="data_perfil">
            <div class="titulo">
                Nombre :
            </div>
            <div class="valor">
                {{ $usuario->name }}
            </div>
             
        </div>
        <div class="data_perfil">
            <div class="titulo">
                Telefono :
            </div>
            <div class="valor">
                {{ $usuario->telefono ?? 'No tiene telefono'}}
            </div>
             
        </div>
        <div class="data_perfil">
            <div class="titulo">
                Edad :
            </div>
            <div class="valor">
                {{ $perfil->edad }}
            </div>
        </div>
        
        <div class="data_perfil">
            <div class="titulo">
                Direccion :
            </div>
            <div class="valor">
                {{ $perfil->direccion }}
            </div>
           
        </div>
        <div class="data_perfil">
            <div class="titulo">
                Cèdula :
            </div>
            <div class="valor">
                {{ $perfil->cedula }}
            </div>
           
        </div>
        <div class="data_perfil">
            <div class="titulo">
                Fecha de nacimiento :
            </div>
            <div class="valor">
                {{ $perfil->fecha_nacimiento }}
            </div>
           
        </div>
        <div class="data_perfil">
            <div class="titulo">
                Sexo :
            </div>
            <div class="valor">
                {{ $perfil->sexo }}
            </div>
            
        </div>
        <div class="data_perfil">
            <div class="titulo">
                Role :
            </div>
            <div class="valor">
                {{ $usuario->getRoleNames()[0]  }}
            </div>
            
        </div>
    </div>
</div>