<?php

namespace Login\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Login\Http\Controllers\Controller;
use Login\User;

class AuthController extends Controller
{
    public function index()
    {
//        $users = User::all();
//        return view('admin.pessoa')->with('users', $users);
        return view('admin.listing');
    }
    public function showLoginForm()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        if (in_array('', $request->only('email', 'password'))) {
            $json['message'] = $this->message->error('Informe todos os dados para efetuar o login')->render();
            return response()->json($json);
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = $this->message->error('Informe um e-mail valido')->render();
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($credentials)) {
            $json['message'] = $this->message->error('Usuário e senhas invalidos')->render();
            return response()->json($json);
        }

        $json['redirect'] = route('admin.listing');
        return response()->json($json);
    }
}
