<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ControladorProductos extends Controller
{
    public function index(){
        //selecionamos todos los productos
        $productos = Producto::all();
        //estamos enviando los datos a la vista index
        return view('productos.index', compact('productos'));
    }

    public function crear(){
        return view('productos.crear');
    }

    public function tienda(Request $request){
        
        $producto = new Producto();
        $producto-> nombre = $request-> nombre;
        $producto-> pais = $request-> pais;
        $producto-> precio = $request-> precio;
        $producto-> save();

        return redirect()->route('productos.index');
    }

    public function edit($id){

        $producto = Producto::find($id);
        return view('productos.editar',compact('producto'));
    }

    public function destroy($id){

        $producto = Producto::find($id);
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
