<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Perfil;
use App\Models\Producto;
use PDF;
class ReporteController extends Controller
{
    public function index()
    {
        return view('reporte.index');
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
        if($request->tipo == 1)
        {
           $producto = Producto::all();
        }

        if($request->tipo == 2)
        {
            $producto = Producto::orderBy('cantidad', 'desc')->get();
        }

        if($request->tipo == 3)
        {
              $producto = Producto::orderBy('cantidad', 'asc')->get();
        }

       
        $pdf = PDF::loadView(
         'reporte.reporte_productopdf',
         [
             'data' => $producto ,
         ]
         )
         ->setPaper('letter', 'portrait');


         return $pdf->stream('planilla.pdf');  
    }
}
