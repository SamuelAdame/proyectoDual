<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ControladorRegistro extends Controller
{
    public function crear(){
        return view('auth.registro');
    }

    public function store(Request $request){

      //  $this->validate(request(),[
        //    'nombre' => 'required',
          //  'email' => 'required|email',
           // 'password' => 'required|cofirmed'

        //x]);

        $request-> validate([
            'name' => 'bail|required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);


        $usuario = User::create(request(['name','email','password']));

        //cuando nos registremos iniciaremos sesion
        auth()->login($usuario);
        //nos redirige
        redirect()->to('/');
    }




}
