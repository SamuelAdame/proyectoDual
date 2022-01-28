<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ControladorSesion extends Controller
{
    public function crear(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password'])) == false) {
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectos,
                por favor intentelo de nuevo'
            ]);
        }else{
            if(auth()->user()->role == 'admin'){
                
            }
        }
        return redirect()->to('/');
    }

   public function destroy(){
       auth()->logout();
       return redirect()->to('/');
   }



}
