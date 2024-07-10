<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OPTICA-MATURIN</title>
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
    <script src="{{ asset('js/landing.js') }}" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
     <div class="main_landing_container">
        <div class="contenedor_main">
                <div class="conten_imagen_main">
                    <img src="{{  asset('storage/imagen_sistema/portada.jpg') }}" width="100%" alt="logo" height="100%">
                </div>
                <div class="conten_login_formulario">
                    <div class="formulario">
                        <div class="option">
                            <div id="c_login" class="login_option items_option">
                                Inisiar sesión
                            </div>
                            <div id="c_register" class="register_option items_option ">
                                Registrarse
                            </div>
                        </div>
                        <div class="logo_main">
                            <img src="{{  asset('storage/imagen_sistema/logo.png') }}" alt="logo">
                           
                        </div>
                        <div class="conten_formulario"  id="formulario_registro">
                            <x-formulario_registro/>
                        </div>
                        <div class="conten_formulario"  id="formulario_login">
                            <x-login/>
                        </div>
                    </div>
                </div>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>