<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        if (auth()->check()) {
            return redirect()->to('/admin/dashboard');
        } else {
            return view('admin.auth.register');
        }
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'nombre' => 'required|string|min:3|max:30',
        //     'apellidop' => 'required|string|min:3|max:30',
        //     'apellidom' => 'required|string|min:3|max:30',
        //     'password' => 'required',
        // ]);

        $user = User::create(request(['nombre', 'apellidop', 'apellidom', 'email', 'password']));

        $user->save();

        auth()->login($user);

        return redirect()->to('/admin/dashboard');

    }
}