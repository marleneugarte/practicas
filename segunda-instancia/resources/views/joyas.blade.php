@extends('layouts.baseJoyas')

@section('contenido')
  <h2>Nuestras joyas</h2>

  {{-- count() sobre lo que llegó de la BD: cuántas filas hay hoy. --}}
  <p>Hay <strong>{{ count($joyas) }}</strong> joyas guardados en la base de datos =).</p>

  <ul>
    {{-- El mismo @foreach de la clase 11. Lo que cambió es de DÓNDE vienen los datos.
         Ojo: ahora cada $producto es un OBJETO, por eso se pide $producto->nombre
         (con flecha) y ya no solo {{ $producto }}. --}}
    @foreach ($joyas as $joya)
      <li>{{ $joya->pieza }} - de {{ $joya->metal }} — Bs {{ $joya->precio }}</li>
    @endforeach
  </ul>

  <p><a href="/joyas/nuevo">+ Agregar un joya</a></p>
@endsection

