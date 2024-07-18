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
            'ventas' => Factura::all()
        ]);
    }

    public function show($id)
    {
        $venta =  Venta::find($id);
        return view(
            'ventas.show',
            [
                'venta' => $venta,
                'producto' => $venta->producto ?? []
            ]
        );
    }

    public function showpdf($id)
    {
        $venta =  Venta::find($id);

        $pdf = PDF::loadView(
            'ventas.showpdf',
            [
                'venta' => $venta,
              //  'producto' => $venta->producto ?? []
            ]
        )->setPaper('letter', 'portrait');

        return $pdf->stream('ventas.showpdf');
    }
}
