<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;

class WebsiteController extends Controller
{

    public function index()
    {
        $videojuegos = Videojuego::join('materias', 'materias.id', '=', 'videojuegos.materia_id')
                        ->join('categorias', 'categorias.id', '=', 'videojuegos.categoria_id')
                        ->select('videojuegos.id', 'videojuegos.nombre', 'videojuegos.plataformas', 'videojuegos.jugadores', 'materias.nombre AS nombreMateria', 'categorias.nombre AS nombreCategoria', 'videojuegos.imagen', 'videojuegos.imagen2')
                        ->get();
        return view('website.index', compact('videojuegos'));
    }

}