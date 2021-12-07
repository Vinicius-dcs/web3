<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $senha = $request->senha;

        $usuario = Usuario::where('email', '=', $email)->where('senha', '=', $senha)->count();
        if($usuario == 1) {
            return view('home');
        } else {
            return redirect()->back()->withErrors("Usuário/senha inválidos.");
        }
    }
}
