<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Factura;
use PDF;
class VentaController extends Controller
{
    public function index()
    {
       
        return view('ventas.index',[
            'ventas' =>  Venta::all()
        ]);
    }

    public function show($id)
    {
        $venta =  Venta::find($id);
        $_ventas = $venta->facturas;
        $total = 0;
        for($i= 0 ; $i<count($_ventas) ; $i++)
        {   
            $total += $_ventas[$i]->producto->precio * $_ventas[$i]->cantidad;
        }
        
        return view(
            'ventas.show',
            [
                'venta' =>  $venta->facturas,
                'total' =>  $total ?? 0,
                'id'=>$id
            ]
        );
    }

    public function showpdf($id)
    {
        $venta =  Venta::find($id);
        $_ventas = $venta->facturas;
        $total = 0;
        for($i= 0 ; $i<count($_ventas) ; $i++)
        {   
            $total += $_ventas[$i]->producto->precio * $_ventas[$i]->cantidad;
        }
        $pdf = PDF::loadView(
            'ventas.showpdf',
            [
                'venta' =>  $venta->facturas,
                'total' =>  $total ?? 0,
                'id'=>$id
            ]
        )->setPaper('letter', 'portrait');

        return $pdf->stream('ventas.showpdf');
    }
}
