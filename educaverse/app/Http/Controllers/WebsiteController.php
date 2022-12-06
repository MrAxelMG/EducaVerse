<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use Monolog\Logger;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;


class WebsiteController extends Controller
{

    public function index()
    {
            
        // set the format
        $output = "%message%";
        $formatter = new LineFormatter($output);
        // create a log channel to STDOUT
        $log = new Logger('my_logger');
        $streamHandler = new StreamHandler('php://stdout', Logger::WARNING);
        $streamHandler->setFormatter($formatter);
        $log->pushHandler($streamHandler);
        // test messages
        $log->addWarning("testing 1");
        $log->addWarning("testing 2");

        $videojuegos = Videojuego::join('materias', 'materias.id', '=', 'videojuegos.materia_id')
                        ->join('categorias', 'categorias.id', '=', 'videojuegos.categoria_id')
                        ->select('videojuegos.id', 'videojuegos.nombre', 'videojuegos.plataformas', 'videojuegos.jugadores', 'materias.nombre AS nombreMateria', 'categorias.nombre AS nombreCategoria', 'videojuegos.imagen', 'videojuegos.imagen2', 'videojuegos.descripcion', 'videojuegos.precio')
                        ->get();
        return view('website.index', compact('videojuegos'));
    }

    public function videojuegos()
    {
        $videojuegos = Videojuego::join('materias', 'materias.id', '=', 'videojuegos.materia_id')
                        ->join('categorias', 'categorias.id', '=', 'videojuegos.categoria_id')
                        ->select('videojuegos.id', 'videojuegos.nombre', 'videojuegos.plataformas', 'videojuegos.jugadores', 'materias.nombre AS nombreMateria', 'categorias.nombre AS nombreCategoria', 'videojuegos.imagen', 'videojuegos.imagen2', 'videojuegos.descripcion', 'videojuegos.precio')
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