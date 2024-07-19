<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Perfil;
use App\Models\Venta;
use App\Models\Producto;
use PDF;
class ReporteController extends Controller
{
    public function index()
    {
        $productos  = Producto::all();
        $producto_nombre = [] ;
        $producto_cantidad = [] ;

        foreach($productos as $producto)
        {
            $producto_nombre[] = $producto->marca;
            $producto_cantidad[] = $producto->venta;
        }
       // return json_encode($producto_nombre);
        return view('reporte.index',[
            'producto_nombre' => $producto_nombre,
            'producto_cantidad' => $producto_cantidad
        ]);
    }

    public function usuario()
    {
        return view('reporte.reporte_usuario');
    }

    public function usuariopdf(Request $request)
    {
        $usuario = [];
           
           $usuario = Perfil::where('sexo' , $request->sexo)->get();
           $pdf = PDF::loadView(
            'reporte.reporte_usuario_pdf',
            [
                'data' => $usuario ,
                'sexo' => $request->sexo
            ]
            )
            ->setPaper('letter', 'portrait');


        return $pdf->stream('planilla.pdf');  
        return $usuario;
    }
    public function productopdf()
    {
         return view('reporte.reporte_producto');
    }

    public function productopdf_generar(Request $request)
    {
        $producto = [];
        $titulo = '';
        if($request->tipo == 1)
        {
            $producto = Producto::orderBy('venta', 'desc')->get();
            $titulo = "Mas vendidos";
        }
        if($request->tipo == 2)
        {
            $titulo = "Agotados";
            $producto = Producto::orderBy('cantidad', 'desc')->get();
        }

        

        if($request->tipo == 3)
        {
                $titulo = "Menos vendidos";
              $producto = Producto::orderBy('venta', 'asc')->get();
        }

       
        $pdf = PDF::loadView(
         'reporte.reporte_productopdf',
         [
             'data' => $producto ,
             'titulo' => $titulo
         ]
         )
         ->setPaper('letter', 'portrait');


         return $pdf->stream('planilla.pdf');  
    }

    public function ventas()
    {
        $productos  = Producto::all();
        $producto_nombre = [] ;
        $producto_cantidad = [] ;

        foreach($productos as $producto)
        {
            $producto_nombre[] = $producto->marca;
            $producto_cantidad[] = $producto->venta;
        }
        return view(
            'reporte.reporte_ventas',[
                'producto_nombre' => $producto_nombre,
                'producto_cantidad' => $producto_cantidad
            ]
        );
    }

    public function ventaspdf_generar()
    {
            $ventas = Venta::all();
            $pdf = PDF::loadView(
            'reporte.reporte_ventaspdf',
            [
                'ventas' => $ventas
            ]
          
            )
            ->setPaper('letter', 'portrait');
   
   
            return $pdf->stream('planilla.pdf');  
    }
}
