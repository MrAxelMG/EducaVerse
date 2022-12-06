<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function create()
    {
        if (auth()->check()) {
            return redirect()->to('/admin/dashboard');
        } else {
            return view('admin.auth.login');
        }
    }

    public function store()
    {

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Datos incorrectos, intenta de nuevo'
            ]);
        } 

        return redirect()->to('/admin/dashboard');
    }

    public function logout(Request $request)
    {
                
        auth()->logout();

        $request->session()->invalidate();        

        return redirect('/login');
    }

}