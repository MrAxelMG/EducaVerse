<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Escuela;
use App\Models\Materia;
use App\Models\Videojuego;
use App\Models\User;
use App\Models\Contacto;

class DashboardController extends Controller
{
    public function index()
    {
        $escuelasCount = Escuela::count();
        $materiasCount = Materia::count();
        $videojuegosCount = Videojuego::count();
        $usuariosCount = User::count();
        $mensajes = Contacto::all();

        return view('admin.dashboard.show', compact('escuelasCount', 'materiasCount', 'videojuegosCount', 'usuariosCount', 'mensajes'));
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