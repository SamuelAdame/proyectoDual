@extends('layouts.app')
@section('title','Editar')
@section('content')

<form action="{{route('productos.tienda')}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100
shadow-x1 rounded-lg">
@csrf
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Editar Producto: {{$producto->nombre}}  </h2>

    <input class="my-2 w-full bg-gray-200 text-lg rounded-lg
    placeholder-gray-900" placeholder="Nombre" name="nombre" >

    <input class="my-2 w-full bg-gray-200 text-lg rounded-lg 
    placeholder-gray-900" placeholder="Pais" name="pais">

    <input class="my-2 w-full bg-gray-200 text-lg rounded-lg
    placeholder-gray-900" placeholder="Precio" name="precio">

     <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold
     rounded text-white hover:bg-blue-600">Enviar<button>

</form>

@endSection