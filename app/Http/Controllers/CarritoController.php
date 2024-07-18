<?php

namespace App\Http\Controllers;

use App\Models\carrito;
use App\Models\Producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
   public function agregar(Request $request)
   {
     
    $aumentar = Carrito::where('id_productos', $request->producto)->exists();
    if($aumentar)
    {
      $producto =  Carrito::where('id_productos', $request->producto)->first();
      $producto->cantidad = $producto->cantidad + 1;
      $producto->save();
      return  back()->with('success' , 'Producto agregado a la lista de compra');
    }
     carrito::create(
        [
            'id_productos' => $request->producto,
            'cantidad' => $request->cantidad
        ]
     );

     return back()->with('success' , 'Producto agregado a la lista de compra');
   }

   public function editar(Request $request)
   {
    
      $cantidad = Producto::find($request->producto);
      if( $cantidad->cantidad < $request->cantidad) return back()->with('success' , 'Esta cantidad no esta disponible');

      $carrito = carrito::where('id_productos' , $request->producto)->first();
      $carrito->cantidad = $request->cantidad;
      $carrito->save();
      return back()->with('success' , 'Producto Agregado correctamente');
   }

   public function eliminar(Request $request)
   {
      
      $carrito = carrito::where('id_productos' , $request->producto)->first();
      $carrito->delete();
      return back()->with('success' , 'Producto eliminado del carrito ');
   }
}
