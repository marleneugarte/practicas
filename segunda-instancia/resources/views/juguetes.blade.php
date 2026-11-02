@extends('layouts.basej')

@section('contenido')
  <h2>Nuestros productos</h2>
  <ul>
    @foreach ($juguetes as $juguete)
      <li>{{ $juguete }}</li>
    @endforeach
  </ul>
@endsection