<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use Illuminate\Support\Facades\Log;

class WebsiteController extends Controller
{

    public function index()
    {

        Log::channel('papertrail')->critical('Se detectó software no deseado al intentar iniciar sesión');
        Log::channel('papertrail2')->critical('Se detectó software no deseado al intentar iniciar sesión');
        Log::channel('custom')->critical('Se detectó software malicioso enviado desde una url desconocida');

        $videojuegos = Videojuego::join('materias', 'materias.id', '=', 'videojuegos.materia_id')
                        ->join('categorias', 'categorias.id', '=', 'videojuegos.categoria_id')
                        ->select('videojuegos.id', 'videojuegos.nombre', 'videojuegos.plataformas', 'videojuegos.jugadores', 'materias.nombre AS nombreMateria', 'categorias.nombre AS nombreCategoria', 'videojuegos.imagen', 'videojuegos.imagen2', 'videojuegos.descripcion', 'videojuegos.precio', 'videojuegos.url')
                        ->get();
        return view('website.index', compact('videojuegos'));
    }

    public function videojuegos()
    {
        $videojuegos = Videojuego::join('materias', 'materias.id', '=', 'videojuegos.materia_id')
                        ->join('categorias', 'categorias.id', '=', 'videojuegos.categoria_id')
                        ->select('videojuegos.id', 'videojuegos.nombre', 'videojuegos.plataformas', 'videojuegos.jugadores', 'materias.nombre AS nombreMateria', 'categorias.nombre AS nombreCategoria', 'videojuegos.imagen', 'videojuegos.imagen2', 'videojuegos.descripcion', 'videojuegos.precio', 'videojuegos.url')
                        ->orderBy('id', 'DESC')
                        ->get();
                        
        return view('website.videojuegos', compact('videojuegos'));
    }

    public function nosotros()
    {
        return view('website.nosotros');
    }

    public function contacto()
    {
        return view('website.contacto');
    }

}