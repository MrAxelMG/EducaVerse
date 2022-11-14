<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    public function index()
    {
        return view("admin.escuelas.show");
    }

    public function show()
    {
        $escuelas = Escuela::all();
        return datatables()->of($escuelas)->addColumn('btn', 'admin.escuelas.buttons')->rawColumns(['btn'])->toJson();
    }

    public function add(Request $request)
    {
        $escuela = new Escuela;
        $escuela->nombre = $request->nombre;
        $escuela->direccion = $request->direccion;
        $escuela->col_fracc = $request->col_fracc;
        $escuela->cp = $request->cp;
        $escuela->ciudad = $request->ciudad;
        $escuela->estado = $request->estado;
        $escuela->pais = $request->pais;
        $escuela->save();

        return response($escuela);
    }

    public function update(Request $request)
    {
        $escuela = Escuela::find($request->id);
        $escuela->nombre = $request->nombre;
        $escuela->direccion = $request->direccion;
        $escuela->col_fracc = $request->col_fracc;
        $escuela->cp = $request->cp;
        $escuela->ciudad = $request->ciudad;
        $escuela->estado = $request->estado;
        $escuela->pais = $request->pais;
        $escuela->save();

        return response($escuela);
    }

    public function delete(Request $request)
    {
        Escuela::destroy($request->id);
    }
}