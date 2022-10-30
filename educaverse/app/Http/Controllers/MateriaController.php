<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\NivelesEducativo;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $niveles = NivelesEducativo::all();
        return view("admin.materias.show", compact("niveles"));
    }

    public function show()
    {
        $materias = Materia::join('niveles_educativos', 'niveles_educativos.id', '=', 'materias.nivel_id');
        return datatables()->of($materias)->addColumn('btn', 'admin.materias.buttons')->rawColumns(['btn'])->toJson();
    }

    public function add(Request $request)
    {
        $materia = new Materia;
        $materia->nombre = $request->nombre;
        $materia->nivel_id = $request->nivel_id;
        $materia->save();

        return response($materia);
    }

    public function update(Request $request)
    {
        $materia = Materia::find($request->id);
        $materia->nombre = $request->nombre;
        $materia->nivel_id = $request->nivel_id;
        $materia->save();

        return response($materia);
    }

    public function delete(Request $request)
    {
        Materia::destroy($request->id);
    }
}