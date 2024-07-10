<div class="container conten-opcion" style="margin-bottom: 20px">
    <a href="{{route('optomestrista.citas')}}">
        <div class="container_opcion_modulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
                <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4m2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A2 2 0 0 0 8 6c-.532 0-1.016.208-1.375.547M14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
              </svg>
            Citas
        </div>
    </a>
    <a href="{{route('optomestrista.citas_create')}}">
        <div class="container_opcion_modulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5zm-2 0h1v1A2.5 2.5 0 0 0 6.5 5h3A2.5 2.5 0 0 0 12 2.5v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2"/>
              </svg>
            Crear citas 
        </div>
    </a>
    <div class="container_opcion_modulo" id="btn_buscar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg>
        Busca Citas
    </div>     
</div>
<div hidden id="filtro" class="container">
    <div style="margin-bottom: 10px;">
        <button class="btn btn-danger" style="height: 100%!important"  id="cancelar">
            X
        </button>
    </div>
    <form  action="{{route('optomestrista.citas_filter')}}" method="GET">
        <div class="input-group mb-3 col-md-6">
            <span class="input-group-text" id="basic-addon1">
                
                    <button class="btn">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg>
                    </button>
                
                
            </span>
            <input type="text" name="filter" class="form-control" placeholder="Filtrar" aria-label="Username" aria-describedby="basic-addon1">
            
          </div>  
         
    </form>
    
</div>

<script>
    addEventListener("DOMContentLoaded", (event) => {
        document.getElementById("btn_buscar").addEventListener("click", function() {
            document.getElementById("filtro").hidden = false;
        })

        cancelar.addEventListener("click" , function(event){
            event.preventDefault();
            document.getElementById("filtro").hidden = true;
        })
    });

    
</script>