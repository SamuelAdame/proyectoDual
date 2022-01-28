@extends('layouts.app_usuario')

@section('title', 'Home')
    
@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-indigo-500 text-white">
          <th class="w-20 py-4 ...">ID</th>
          <th class="w-1/8 py-4 ...">Nombre</th>
          <th class="w-1/16 py-4 ...">Pais</th>
          <th class="w-1/16 py-4 ...">Precio</th>
          <th class="w-1/16 py-4 ...">Created</th>
          <th class="w-1/16 py-4 ...">Update</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($productos as $row)
          
        <tr>
          <td class="py-3 px-6">{{$row->id}}</td>
          <td class="p-3">{{$row->nombre}}</td>
          <td class="p-3">{{$row->pais}}</td>
          <td class="p-3">{{$row->precio}}</td>
          <td class="p-3 text-center">{{$row->created_at}}</td>
          <td class="p-3 text-center">{{$row->updated_at}}</td>
        </tr>
          @endforeach
      </tbody>
    </table>
</div>

@endSection