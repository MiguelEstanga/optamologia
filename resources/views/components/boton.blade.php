@props(
    [
      'text' => 'Enviar',
      'color' => '#00c0f3 ',
      'text_color' => '#fff',
      'width' => '250px',
      'height' => '40px',
      'font_size' => '16px',
      'icon' => '',
    ]
)


    <button class="custom_button"  style="background:{{$color}} ">
           {{$text}}
    </button>


<style>
    .btn_container{
        margin-top: 50px;
       
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .custom_button{
       
       
        border: none;
        
        box-shadow: 0 5px 2px rgb(0, 0, 0 , .5);
       
        border-radius: 5px;
        font-size: {{$font_size}};
        cursor: pointer;
        transition: all 0.3s;
        width: {{$width}};
        height: {{$height}};
        color: {{$text_color}};
    }
</style>