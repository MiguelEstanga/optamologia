<div>
    <h2>
        Productos
    </h2>
    <table>
        <thead>
            <tr>
                <td>Codigo</td>
                <td>Marca</td>
                <td>Cantidad</td>
                 <td>descripcion</td>
                 <td>tipo</td>
                  <td>precio</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item->codigo}}</td>
                <td>{{$item->marca}}</td>
                <td>{{$item->cantidad}}</td>
                 <td>{{$item->descripcion}}</td>
                 <td>{{$item->tipo}}</td>
                  <td>{{$item->precio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<style>
  
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