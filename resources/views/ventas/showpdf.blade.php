
    <img src="{{ public_path() . "/storage/imagen_sistema/logo.png"   }}" alt="pdf"  class="imagen_header" />


<div>
    
<table class="table table-dark" style="margin: 30px 0;">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Télefono</th>
                        
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                            <td>{{ $venta->fecha }}</td>
                            <td>{{ $venta->nombre_cliente }}</td>
                            <td>{{ $venta->apellido_cliente }}</td>
                            <td>{{ $venta->cedula }}</td>
                            <td>{{ $venta->telefono }}</td>
                            
                            <td>{{ $venta->cantidad }}</td>
                            <td>{{ $venta->cantidad * $venta->producto->precio }}BS</td>
                 </tr>
     </tbody>
</table>
</div>
<style>
   .imagen_header{
       
       
       position: relative;
       left: 25%;
        width: 400px;
        height: 90px;
    }
  table {
        margin: 20px 0; 
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