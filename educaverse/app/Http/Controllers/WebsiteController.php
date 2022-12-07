<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use Illuminate\Support\Facades\Log;

class WebsiteController extends Controller
{

    public function index()
    {
        $videojuegos = Videojuego::join('materias', 'materias.id', '=', 'videojuegos.materia_id')
                        ->join('categorias', 'categorias.id', '=', 'videojuegos.categoria_id')
                        ->select('videojuegos.id', 'videojuegos.nombre', 'videojuegos.plataformas', 'videojuegos.jugadores', 'materias.nombre AS nombreMateria', 'categorias.nombre AS nombreCategoria', 'videojuegos.imagen', 'videojuegos.imagen2', 'videojuegos.descripcion', 'videojuegos.precio', 'videojuegos.url')
                        ->get();
        return view('website.index', compact('videojuegos'));
    }

    public function videojuegos()
    {

        Log::channel('papertrail')->debug('El usuario: "Javier Salazar", inició sesión');

        $monolog = Log::getLogger();
        $syslog = new \Monolog\Handler\SyslogHandler('papertrail');
        $formatter = new \Monolog\Formatter\LineFormatter('%channel%.%level_name%: %message% %extra%');
        $syslog->setFormatter($formatter);

        $monolog->pushHandler($syslog);

        Log::stack(['papertrail'])->debug('Something happened!');
        Log::debug('An informational message.');

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