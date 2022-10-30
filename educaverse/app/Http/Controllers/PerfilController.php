<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    public function index()
    {

        return response()->view('admin.perfil.show');
    }

    public function editPerfil(Request $request)
    {
        if ($request->ajax())
        {            
                $request->validate([
                    'nombre' => 'required|string',
                    'apellidop' => 'required|string',
                    'apellidom' => 'required|string',
                ]);

                $user = User::find($request->id);


                if ($request->hasFile('foto')) {
                    $fotos = User::where('id', $request->id)->get();
    
                    $foto_anterior = $fotos[0]->foto_perfil;
    
                    if (is_file(public_path('img/usuarios') . $foto_anterior)) {
                        chmod(public_path('img/usuarios') . $foto_anterior, 0777);
                        unlink(public_path('img/usuarios') . $foto_anterior);
                    }
    
                    $file = $request->file('foto');
                    $filename = $file->getClientOriginalName();
    
                    $file->move(public_path('img/usuarios'), $filename);
                    $user->foto_perfil = $filename;
                } else {
                    $user->nombre = strtoupper($request->input('nombre'));
                    $user->apellidop = strtoupper($request->input('apellidop'));
                    $user->apellidom = strtoupper($request->input('apellidom'));    
                }

                if(!empty($request->input("pass-old")) && !empty($request->input("pass-new"))){
                    if (\Hash::check($request->input("pass-old"), $user->password)) {
                        $user->password = $request->input("pass-new");
                        $user->update();
    
                        return response($user);
                    }else{
                        return response("La contraseña anterior es incorrecta");
                    }
                }else{
                    $user->update();

                    $user_id = $user->id;
                    $bitacora_id = session('bitacora_id');
        
                    $log = new Log;
        
                    $log->tipo_accion = "Actualización";
                    $log->tabla = "Perfil";
                    $log->id_tabla = $user_id;
                    $log->bitacora_id = $bitacora_id;
        
                    $log->save();        
                    return response($user);
                }

        }
    }

}