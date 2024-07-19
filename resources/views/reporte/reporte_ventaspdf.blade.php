<img src="{{ public_path() . "/storage/imagen_sistema/logo.png"   }}" alt="pdf"  class="imagen_header" />

<div>
    <h2 style="">
        Usuarios 
    </h2>
    <table>
        <thead>
            <tr>
                <td>Fecha de compra</td>
                <td>Nombre cliente</td>
                <td>Apellido cliente</td>
                <td>Cédula</td>
                 <td>Telefono</td> 
                 <td>Producto</td> 
                 <td>precio</td>
            </tr>
        </thead>
        <tbody>
          @foreach ($ventas as $item)
         
            <tr>
                <td>{{$item->fecha}}</td>
                <td>{{$item->nombre_cliente}}</td>
                <td>{{$item->apellido_cliente}}</td>
                <td>{{$item->cedula}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->producto->descripcion}}</td>
                <td>{{$item->producto->precio}}BS</td>
             
            </tr>
         
          @endforeach
        </tbody>
    </table>
</div>
<style>
    h2{
        text-align: center;
    }
  .imagen_header{
       
       
       position: relative;
       left: 25%;
        width: 400px;
        height: 90px;
    }
  table {
            width: 100%;  /* Ajusta el ancho de la tabla al contenedor padre */
            border-collapse: collapse;  /* Combina los bordes de las celdas adyacentes */
            margin: 0 auto;  /* Agrega espacio alrededor de la tabla */
        }

        th, td {
            border: 1px solid #ddd;  /* Añade un borde delgado a cada celda */
            padding: 8px;  /* Agrega espacio de relleno alrededor del texto de las celdas */
            font-size: 10px;
            text-align: center;
        }

        th {
            background-color: #eee;  /* Color de fondo gris claro para los encabezados */
            text-align: left;  /* Alinea el texto de los encabezados a la izquierda */
            font-weight: bold;  /* Texto en negrita para los encabezados */
            font-size: 10px;
            text-align: center;
        }

        tr:nth-child(odd) {
            background-color: #f5f5f5;  /* Color de fondo alternativo para filas pares */
        }

        tr:hover {
         background-color: #e8e8e8;  /* Color de fondo al pasar el cursor sobre una fila */
        }


</style>