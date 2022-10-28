<?php

namespace App\Http\Controllers;

use App\Models\Videojuegos;
use Illuminate\Http\Request;

class VideojuegosController extends Controller
{
    public function index()
    {
        return view("admin.videojuegos.show");
    }

    public function show()
    {
        $videojuegos = Videojuegos::all();
        return datatables()->of($videojuegos)->addColumn('btn', 'admin.videojuegos.buttons')->rawColumns(['btn'])->toJson();
    }

    public function add(Request $request)
    {
        $videojuegos = new Videojuegos;
        $videojuegos->nombre = $request->nombre;
        $videojuegos->categoria = $request->categoria;
        $videojuegos->save();

        return response($videojuegos);
    }

    public function update(Request $request)
    {
        $videojuegos = Videojuegos::find($request->id);
        $videojuegos->nombre = $request->nombre;
        $videojuegos->categoria = $request->categoria;
        $videojuegos->save();

        return response($videojuegos);
    }

    public function delete(Request $request)
    {
        Videojuegos::destroy($request->id);
    }
}