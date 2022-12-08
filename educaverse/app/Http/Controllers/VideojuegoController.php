<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use App\Models\Categoria;
use App\Models\Materia;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $materias = Materia::all();

        $data = array(
            "lista_categorias" => $categorias,
            "lista_materias" => $materias,
        );

        return response()->view("admin.videojuegos.show", $data, 200);
    }

    public function show()
    {
        $videojuegos = Videojuego::join('materias', 'materias.id', '=', 'videojuegos.materia_id')
                        ->select('videojuegos.id', 'videojuegos.nombre', 'videojuegos.descripcion', 'videojuegos.plataformas', 'videojuegos.jugadores', 'videojuegos.categoria_id', 'materias.id as materiaid', 'materias.nombre AS materiaNombre', 'videojuegos.imagen', 'videojuegos.imagen2', 'videojuegos.precio')
                        ->get();

        return datatables()->of($videojuegos)->addColumn('plataforma', 'admin.videojuegos.plataforma')->addColumn('categoria', 'admin.videojuegos.categoria')->addColumn('btn', 'admin.videojuegos.buttons')->rawColumns(['categoria', 'plataforma', 'btn'])->toJson();
    }

    public function add(Request $request)
    {
        $videojuegos = new Videojuego;
        $videojuegos->nombre = $request->nombre;

        $plataformas = "";
        foreach ($request->plataformas as $plataforma) {
            $plataformas .= $plataforma. ',';
        }

        $categoria_id = "";
        foreach ($request->categoria_id as $categoria) {
            $categoria_id .= $categoria. ',';
        }

        $videojuegos->plataformas = $plataformas;
        $videojuegos->descripcion = $request->descripcion;
        $videojuegos->precio = $request->precio;
        $videojuegos->jugadores = $request->jugadores;
        $videojuegos->categoria_id = $categoria_id;
        $videojuegos->materia_id = $request->materia_id;

        // $file = $request->file('imagen');
        // $filename = $file->getClientOriginalName();

        // $file->move(public_path("videojuegos/$request->nombre/imagen"), $filename);
        // $videojuegos->imagen = $filename;

        // if ($request->hasFile('imagen2')) {
        //     $file = $request->file('imagen2');
        //     $filename = $file->getClientOriginalName();

        //     $file->move(public_path("videojuegos/$request->nombre/imagen"), $filename);
        //     $videojuegos->imagen2 = $filename;
        // }

        $videojuegos->save();

        return response($videojuegos);
    }

    public function update(Request $request)
    {
        $videojuegos = Videojuego::find($request->id);
        $videojuegos->nombre = $request->nombre;

        $plataformas = "";
        foreach ($request->plataformas as $plataforma) {
            $plataformas .= $plataforma. ',';
        }

        $categoria_id = "";
        foreach ($request->categoria_id as $categoria) {
            $categoria_id .= $categoria. ',';
        }

        $videojuegos->plataformas = $plataformas;
        $videojuegos->descripcion = $request->descripcion;
        $videojuegos->precio = $request->precio;
        $videojuegos->jugadores = $request->jugadores;
        $videojuegos->categoria_id = $categoria_id;
        $videojuegos->descripcion = $request->descripcion;
        $videojuegos->materia_id = $request->materia_id;

        // if ($request->hasFile('imagen')) {
        //     $imagen_anterior = Videojuego::where('id', $request->id)->first();

        //     if (is_file(public_path("videojuegos/$request->nombre/imagen") . $imagen_anterior->imagen)) {
        //         chmod(public_path("videojuegos/$request->nombre/imagen") . $imagen_anterior->imagen, 0777);
        //         unlink(public_path("videojuegos/$request->nombre/imagen") . $imagen_anterior->imagen);
        //     }

        //     $file = $request->file('imagen');
        //     $filename = $file->getClientOriginalName();

        //     $file->move(public_path("videojuegos/$request->nombre/imagen"), $filename);
        //     $videojuegos->imagen = $filename;
        // }

        // if ($request->hasFile('imagen2')) {
        //     $imagen_anterior = Videojuego::where('id', $request->id)->first();

        //     if (is_file(public_path("videojuegos/$request->nombre/imagen") . $imagen_anterior->imagen2)) {
        //         chmod(public_path("videojuegos/$request->nombre/imagen") . $imagen_anterior->imagen2, 0777);
        //         unlink(public_path("videojuegos/$request->nombre/imagen") . $imagen_anterior->imagen2);
        //     }

        //     $file = $request->file('imagen2');
        //     $filename = $file->getClientOriginalName();

        //     $file->move(public_path("videojuegos/$request->nombre/imagen"), $filename);
        //     $videojuegos->imagen2 = $filename;
        // }

        $videojuegos->update();

        return response($videojuegos);
    }

    public function delete(Request $request)
    {
        Videojuego::destroy($request->id);
    }
}