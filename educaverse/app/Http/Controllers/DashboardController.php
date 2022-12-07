<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Escuela;
use App\Models\Materia;
use App\Models\Videojuego;
use App\Models\User;
use App\Models\Contacto;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $escuelasCount = Escuela::count();
        $materiasCount = Materia::count();
        $videojuegosCount = Videojuego::count();
        $usuariosCount = User::count();
        $mensajes = Contacto::all();

        $mes = \Carbon\Carbon::now();
        $mes = $mes->format('Y-m');

        $ventas = Venta::sum('total');
        $ventasMes = Venta::where('fecha', 'like', "$mes%")->sum('total');

        $ventaFinal = Venta::join('videojuegos', 'videojuegos.id', 'ventas.videojuego_id')->select('ventas.id AS ventasid', 'videojuegos.nombre', 'ventas.total', 'ventas.fecha')->limit(10)->get();

        return view('admin.dashboard.show', compact('escuelasCount', 'materiasCount', 'videojuegosCount', 'usuariosCount', 'mensajes', 'ventas', 'ventasMes', 'ventaFinal'));
    }

    public function grafica()
    {

        $videojuegos = Videojuego::all();
        $usuarios = User::all();

        $data = array(
            "videojuegos" => $videojuegos,
            "usuarios" => $usuarios,
        );
        
        return response($data);
    }
}