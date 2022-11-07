<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Escuela;
use App\Models\Materia;
use App\Models\Videojuego;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $escuelasCount = Escuela::count();
        $materiasCount = Materia::count();
        $videojuegosCount = Videojuego::count();
        $usuariosCount = User::count();

        return view('admin.dashboard.show', compact('escuelasCount', 'materiasCount', 'videojuegosCount', 'usuariosCount'));
    }
}