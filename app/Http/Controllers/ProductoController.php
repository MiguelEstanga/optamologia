<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\TipoMontura;
use App\Models\DescripcionLentes;
use App\Models\Venta;

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

    public function vender($id)
    {
        $producto = Producto::find($id);
        return view('producto.venta' , [
            'producto' => $producto
        ]);
    }

    public function vender_store( $id ,Request $request )
    {
        $producto = Producto::find($id);
        if($producto->cantidad < $request->cantidad) return back()->with('danger' , 'La cantidad no se encuentra disponible');
        $producto->cantidad = $producto->cantidad - $request->cantidad;
        $producto->save();
        Venta::create([ 
            'fecha' => $request->fecha ,
            'nombre_cliente' => $request->nombre ,
            'apellido_cliente' => $request->apellido ,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'cantidad' => $request->cantidad,
            'total' => $request->cantidad * $producto->precio,
            'id_productos' => $producto->id
        ]);

        return  back()->with('success' , 'Venta realizada correctamente');
    }
}
