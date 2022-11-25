<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function index()
    {
        return view("admin.contactos.show");
    }

    public function show()
    {
        $contactos = Contacto::all();
        return datatables()->of($contactos)->addColumn('btn', 'admin.contactos.buttons')->rawColumns(['btn'])->toJson();
    }

    public function add(Request $request)
    {
        $contacto = new Contacto;
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return response($contacto);
    }

    public function delete(Request $request)
    {
        Contacto::destroy($request->id);
    }
}