<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        return view("admin.materias.show");
    }

    public function show()
    {
        $materias = Materia::all();
        return datatables()->of($materias)->addColumn('btn', 'admin.materias.buttons')->rawColumns(['btn'])->toJson();
    }

    public function add(Request $request)
    {
        $materia = new Materia;
        $materia->nombre = $request->nombre;
        $materia->save();

        return response($materia);
    }

    public function update(Request $request)
    {
        $materia = Materia::find($request->id);
        $materia->nombre = $request->nombre;
        $materia->save();

        return response($materia);
    }

    public function delete(Request $request)
    {
        Materia::destroy($request->id);
    }
}