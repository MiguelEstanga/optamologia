<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\TipoMontura;
use App\Models\DescripcionLentes;
use App\Models\Venta;
use App\Models\Factura;
use App\Models\carrito;

class ProductoController extends Controller
{
    
    public function  index()
    {
        $productos = Producto::all();
        return view(
            'producto.index',
            [
                'data' => $productos
            ]
        );
    }

    public function formulario_crear()
    {
        return view(
            'producto.create',
            [
                'descripcion' => DescripcionLentes::all(),
                'tipo' => TipoMontura::all()
            ]
        );
    }

    public function store(Request $request)
    {
        //return $request->all();
        $imagen = "";

        if($request->imagen != null){
            $imagen = $request->file('imagen')->store('productos' , 'public');
        }else{
            $imagen = "avatars/avatar.png";
        }
        Producto::create([
            'codigo' => $request->codigo,
            'marca' => $request->marca,
            'cantidad' => $request->cantidad,
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'precio' => $request->precio,
            'imagen' => $imagen,
            'descripcion_montura' => $request->descripcion_montura
        ]);
        return back()->with('success' , 'Producto creado exitosamente');
    }

    public function edit( $id)
    {
        $producto = Producto::find($id);

        return view('producto.edit' ,[
            'data' => $producto,
            'descripcion' => DescripcionLentes::all(),
            'tipo' => TipoMontura::all()
            
        ]);
    }

    public function updated($id , Request $request)
    {
        //return $request->all();
        $producto = Producto::find($id);
        if($request->imagen != null)
        {
            $producto->imagen = $request->file('imagen')->store('productos' , 'public');
        }
        $producto->codigo = $request->codigo;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->descripcion_montura = $request->descripcion_montura;
        $producto->marca = $request->marca;
        $producto->precio = $request->precio;
        $producto->save();
        return back()->with('success' , 'Producto actulizado correctamente');
    }   

    public function delete($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return back()->with('success' , 'Producto eliminado correctamente');
    }

    public function vender()
    {
            $carrito = carrito::all();
            $total = 0 ; 
            if( count($carrito) > 0 )
            {
                for($i = 0 ; $i < count($carrito) ; $i++ )
                {
                    $total += $carrito[$i]->cantidad * $carrito[$i]->producto->precio;
                }
            }
           
        return view('producto.venta' , [
           'carrito' => carrito::all(),
           'total' => $total
        ]);
    }

    public function vender_store( Request $request )
    {
      
        $carrito = carrito::all();
        //return count($carrito);
        if(count($carrito) === 0 ) return  back()->with('success' , 'El carrito esta vacio');

        $total = 0;
         for($i = 0 ; $i < count($carrito) ; $i++ )
         {
             $total += $carrito[$i]->cantidad * $carrito[$i]->producto->precio;
         }
         
       
        //if($producto->cantidad < $request->cantidad) return back()->with('danger' , 'La cantidad no se encuentra disponible');
        $venta = Venta::create([ 
            'fecha' => $request->fecha ,
            'nombre_cliente' => $request->nombre ,
            'apellido_cliente' => $request->apellido ,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'cantidad' => 1,
            'total' => 1,
            'id_productos' =>2
        ]);
         foreach( $carrito as $producto ){
            $producto = Producto::find($producto->id_productos);
            $producto->cantidad = $producto->cantidad - $producto->cantidad;
            $producto->save();

            Factura::create(
                [
                    'id_ventas' => $venta->id,
                    'id_productos' => $producto->id,
                ]
            );
           
         }

         foreach($carrito as $c)
         {
             $c->delete();
         }
         
        return  back()->with('success' , 'Venta realizada correctamente');
    }
}
