<?php

namespace App\Http\Controllers;

use App\Http\Request\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function vistaLogin(){
        return view('artista.login');
    }
    public function iniciar(LoginRequest $request){
        $credentials = $request->getCredentials()
        if(!Auth::validate($credentials)){
            return redirect()->to('artista.login')->withErrors('auth.failed');
        }
        $user = Auth::getProvider()->retriveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request,$user)
    }
    public function authenticated(){
        
    }
}
