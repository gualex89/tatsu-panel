<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function register(){
        return view('auth.register');
    }
    
    public function registerVerify(Request $request){
        $request->validate([
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:4',
            'password_confirmation' => 'required|same:password',
        ],[
            'email.required' => 'El email es requerido',
            'email.unique' => 'El email ya existe',
            'password.required' => 'La contraseña es requerida',
            'password.min' => 'La contraseña debe tener al menos 4 caracteres',
            'password_confirmation.required' => 'La confirmación de la contraseña es requerida',
            'password_confirmation.same' => 'La confirmación de la contraseña debe coincidir con la contraseña',
        ]);
        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('login')->with('success', 'Cuenta creada exitosamente');

    }

    public function login(){
        return view('auth.login');
    }

    public function loginVerify(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'El email es requerido',
            'password.required' => 'La contraseña es requerida',
        ]);
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('respuestas-bot.index');
        }
        return back()->withErrors(['invalid_credentials' => 'Credenciales inválidas'])->onlyInput('email');

    }    

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Sesión cerrada exitosamente');
    }
}
