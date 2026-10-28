@extends('layouts.basej')

@section('contenido')
  <h2>Nuestros productos</h2>
  <p>El mismo catálogo de ayer — pero hoy lo recorre Blade:</p>
  <ul>
    @foreach ($juguetes as $juguete)
      <li>{{ $juguete }}</li>
    @endforeach
  </ul>
@endsection