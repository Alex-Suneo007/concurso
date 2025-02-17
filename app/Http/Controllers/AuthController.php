<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    // Validación
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Depuración de los datos recibidos
    dd($request->all()); // Ver qué datos están llegando

    // Si hay errores en la validación
    if ($validator->fails()) {
        return redirect()->route('register')
            ->withErrors($validator)
            ->withInput();
    }

    // Crear el usuario
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'user', // Asignar el rol por defecto
    ]);

    // Log para confirmar que el usuario se ha creado
    Log::info('Nuevo usuario registrado', ['user' => $user]);

    // Iniciar sesión
    auth()->login($user);

    // Redirigir a una página segura (dashboard, por ejemplo)
    return redirect()->route('dashboard');
}


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Redirigir al dashboard o cualquier otra página
            return redirect()->route('dashboard');
        }

        // Si no se puede autenticar, redirigir con error
        return redirect()->route('login')->withErrors('Las credenciales son incorrectas');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
