<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return view("admin.categorias.show");
    }

    public function show()
    {
        $categorias = Categoria::all();
        return datatables()->of($categorias)->addColumn('btn', 'admin.categorias.buttons')->rawColumns(['btn'])->toJson();
    }

    public function add(Request $request)
    {
        $categoria = new Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->save();

        return response($categoria);
        
    }

    public function update(Request $request)
    {
        $categoria = Categoria::find($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->save();

        return response($categoria);
    }

    public function delete(Request $request)
    {
        Categoria::destroy($request->id);
    }
}