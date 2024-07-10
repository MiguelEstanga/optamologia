@props(
    [
       'type' => 'text',
       'name' => 'name',
       
       'placeholder' => 'Nombre',
       'value' => '',
       'class' => '',
       'style' => '',
       'required' => false,
       'disabled' => false,
    ]
)

<div style="position: relative" class="input_custom_container">
    
    <input required class="input_custom" value="{{$value}}" type="{{$type}}" name="{{$name}}"  placeholder="{{$placeholder}}">
    <label class="label_nombre" for="name">{{$placeholder}}</label>
</div>

<style>

    input:focus::placeholder {
    color: #196f3d;
}
    .input_custom_container{
        
        margin-bottom: 20px;
        height: 50px;
    }
    .input_custom {
        border: none;
        border-bottom: 1px solid #000;
        background: none;
        padding-left: 10px;
        font-size: 15px;
        z-index: 10;
        color: #000;

        width: 400px;
        transition: all 0.3s ease-in-out;
    }
    .input_custom:focus .label_nombre{
        font-size: 10px;
    }
    .input_custom:focus {
        outline: none;
    }
    .label_nombre {
        color:  #196f3d ;
        position: absolute;
        left: 5px;
        bottom: 4px;
        font-size: 12px;
        font-weight: 200;
    }
</style>