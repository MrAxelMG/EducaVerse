<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    public function index()
    {
        return view("admin.ventas.show");
    }

    public function show()
    {
        $ventas = Venta::join('videojuegos', 'videojuegos.id', 'ventas.videojuego_id')->select('ventas.id AS ventasid', 'videojuegos.nombre as videojuegos_nombre', 'ventas.cantidad', 'ventas.total', 'ventas.fecha')->get();
        return datatables()->of($ventas)->addColumn('btn', 'admin.ventas.buttons')->addColumn('fecha', 'admin.ventas.fecha')->rawColumns(['btn', 'fecha'])->toJson();
    }

    public function add(Request $request)
    {

        $total = $request->cantidad * $request->precio;
        $ventas = new Venta;
        $ventas->cantidad = $request->cantidad;
        $ventas->total = $total;
        $ventas->videojuego_id = $request->videojuego_id;
        $ventas->save();

        return response($ventas);
    }

    public function delete(Request $request)
    {
        Venta::destroy($request->id);
    }
}