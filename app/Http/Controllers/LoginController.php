<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function vistaLogin(){
        if(Auth::check()){
            return redirect()->route('inicio.index');
        }
        return view('artista.login');
    }
    public function iniciar(LoginRequest $request){
        $credentials = $request->getCredentials();
        
        if (!Auth::attempt($credentials)) {
            return redirect()->route('artista.login')->withErrors(trans('auth.failed'));
        }
        
        $user = Auth::user();
        return $this->authenticated($request, $user);
}

    public function logout(Request $request){
        Auth::logout();
        
        return redirect()->route('inicio.index');
    }
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->route('inicio.index');
    }
}
