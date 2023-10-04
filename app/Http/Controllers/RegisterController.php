<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        /* dd($request); */
        /* dd($request->get('name')); */

        /* Modificar el Request */
        $request->request->add([
            'username' => Str::slug($request->username)
        ]);

        /* Validar el formulario */
        $this->validate($request, [
            'name' => 'required|min:3|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        //Crear el usuario
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            //Hashear el password Hash::make()
            'password' => Hash::make($request->password)

        ]);

        /* Autenticar al usuario */
        /*         auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]); */
        /* Otra fomra de autenticar */
        auth()->attempt($request->only('username', 'password'));

        //Rdireccionar al usuario
        return redirect()->route('posts.index', auth()->user()->username);
    }
}
