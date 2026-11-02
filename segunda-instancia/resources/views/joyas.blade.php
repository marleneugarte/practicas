@extends('layouts.baseJoyas')
@extends('layouts.baseJoyas')

@section('contenido')
  <h2>Nuestras joyas</h2>
  <p>Joyeria la esmeralda el lugar donde la elegancia, la belleza y el buen gusto se unen para ofrecerte joyas únicas y especiales</p>
   <h2>Filtrar joyas por metal</h2>

    <a href="/joyas">Todos</a> |
    <a href="/joyas?metal=Oro">Oro</a> |
    <a href="/joyas?metal=Plata">Plata</a> |
    <a href="/joyas?metal=Platino">Platino</a>


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
  
  <p><strong>Mostrador atendido por Marlene Ugarte Galarza</strong></p>

  <p><a href="/joyas/nuevo">+ Agregar un joya</a></p>
@endsection
