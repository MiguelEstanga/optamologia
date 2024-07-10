<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
class VentaController extends Controller
{
    public function index()
    {
        return view('ventas.index',[
            'ventas' => Venta::all()
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
}
