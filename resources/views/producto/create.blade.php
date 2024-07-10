@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        @include('producto.modulos')
        <div class="container row">
            <div class="col-md-6">
                <div class="preview_container">
                    <div class="preview">
                        <div class="avatar_preview">
                            <img 
                            
                            id="imagen_preview"
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
                            Còdigo de referencia  :
                        </div>
                        <div class="valor" id="codigo_value">
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Marca  :
                        </div>
                        <div class="valor" id="marca_value">
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Cantidad  :
                        </div>
                        <div class="valor" id="cantidad_value">
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Descripciòn :
                        </div>
                        <div class="valor" id="descripcion_value">
                            
                        </div>
                        
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Precio  :
                        </div>
                        <div class="valor" id="precio_value">
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Tipo :
                        </div>
                        <div class="valor" id="tipo_value">
                        </div>
                    </div>
                    <div class="data_perfil">
                        <div class="titulo">
                            Descripciòn montura  :
                        </div>
                        <div class="valor" id="descripcion_montura_value">
                            
                        </div>
                        
                    </div>
                       
                        </div>
                </div>
            </div>
            
         
         <div class="col-md-6 formulario_container_edit">
            <x-producto_formulario
               :tipo="$tipo"
               :descripcion="$descripcion"
            />
         </div>
        </div>
    </div>

    <script>
       addEventListener("DOMContentLoaded", (event) => {
            let imagePreview  = document.getElementById("imagen_preview");
            let imagenIput = document.getElementById("imagen_formulario");

            function eventoChange(nombre_input , containerTextId)
            {
                let input =  document.getElementById(nombre_input);
                let containerText =  document.getElementById(containerTextId);
                console.log(input)
                input.addEventListener('input', function(event) {
                    console.log(event.target.value)
                    containerText.innerHTML =  event.target.value
                })
            }
            imagenIput.addEventListener('change', function(event) {
                const file = event.target.files[0];

                if (file && file.type.startsWith('image/')) { // Check for valid image type
                    const reader = new FileReader();

                    reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Display the image preview
                    };

                    reader.readAsDataURL(file);
                } else {
                    // Handle invalid file selection (optional)
                    console.error('Invalid file type. Please select an image.');
                    imagePreview.src = ""; // Clear any previous preview
                    imagePreview.style.display = 'none'; // Hide the preview element
                }
            });

            eventoChange('codigo' , 'codigo_value');
            eventoChange('tipo' , 'tipo_value');
            eventoChange('marca' , 'marca_value');
            eventoChange('descripcion' , 'descripcion_value');
            eventoChange('cantidad' , 'cantidad_value');
            eventoChange('precio' , 'precio_value');
            eventoChange('precio' , 'precio_value');
            eventoChange('descripcion_montura' , 'descripcion_montura_value')
       });

    </script>
@endsection