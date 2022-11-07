<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    public function index()
    {

        return response()->view('admin.perfil.show');
    }

    public function update(Request $request)
    {
        if ($request->ajax())
        {            
                $request->validate([
                    'nombre' => 'required|string',
                    'apellidop' => 'required|string',
                    'apellidom' => 'required|string',
                ]);

                $user = User::find($request->id);

                $user->nombre = $request->input('nombre');
                $user->apellidop = $request->input('apellidop');
                $user->apellidom = $request->input('apellidom');   

                if ($request->hasFile('foto')) {
                    $fotos = User::where('id', $request->id)->get();
    
                    $foto_anterior = $fotos[0]->foto;
    
                    if (is_file(public_path('images/usuarios') . $foto_anterior)) {
                        chmod(public_path('images/usuarios') . $foto_anterior, 0777);
                        unlink(public_path('images/usuarios') . $foto_anterior);
                    }
    
                    $file = $request->file('foto');
                    $filename = $file->getClientOriginalName();
    
                    $file->move(public_path('images/usuarios'), $filename);
                    $user->foto = $filename;
                }

                if(!empty($request->input("pass-old")) && !empty($request->input("pass-new"))){
                    if (\Hash::check($request->input("pass-old"), $user->password)) {
                        $user->password = $request->input("pass-new");
                        $user->update();
    
                        return response($user);
                    }else{
                        return response("La contraseña anterior es incorrecta");
                    }
                }
                
                $user->update();
                return response($user);

        }
    }

}