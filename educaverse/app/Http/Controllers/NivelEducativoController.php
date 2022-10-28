<?php

namespace App\Http\Controllers;

use App\Models\NivelesEducativo;
use App\Models\Escuela;
use Illuminate\Http\Request;

class NivelEducativoController extends Controller
{
    public function index()
    {
        $escuelas = Escuela::all();
        return view("admin.nivel-educativo.show", compact('escuelas'));
    }

    public function show()
    {
        $nivel_educativo = NivelesEducativo::all();
        return datatables()->of($nivel_educativo)->addColumn('btn', 'admin.nivel-educativo.buttons')->rawColumns(['btn'])->toJson();
    }

    public function add(Request $request)
    {
        $nivel_educativo = new NivelesEducativo;
        $nivel_educativo->grado = $request->grado;
        $nivel_educativo->nivel = $request->nivel;
        $nivel_educativo->escuela_id = $request->escuela;
        $nivel_educativo->save();

        return response($nivel_educativo);
    }

    public function update(Request $request)
    {
        $nivel_educativo = NivelesEducativo::find($request->id);
        $nivel_educativo->grado = $request->grado;
        $nivel_educativo->nivel = $request->nivel;
        $nivel_educativo->escuela_id = $request->escuela;
        $nivel_educativo->save();

        return response($nivel_educativo);
    }

    public function delete(Request $request)
    {
        NivelesEducativo::destroy($request->id);
    }
}