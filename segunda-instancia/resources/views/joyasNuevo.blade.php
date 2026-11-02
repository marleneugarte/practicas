@extends('layouts.baseJoyas')

@section('contenido')
  <h2> Agregar un producto</h2> 
  @if ($errors->any())
    <ul style="color: #b00020;">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
  <form action="/joyas/nuevo" method="POST">
        @csrf

      <fieldset>
          <legend>Datos de la joya</legend>

          <label for="pieza">Pieza:</label>
          <input type="text" id="pieza" name="pieza" required>
          <br><br>

          <label for="metal">Metal:</label>
          <input type="text" id="metal" name="metal" required>
          <br><br>
          <label for="precio">Precio:</label>
           <input type="number" id="precio" name="precio" required>
      </fieldset>
            
      <br>

      <button type="submit" id="btn-registrar">Registrar joya</button>
  </form>
  <p><a href="/joyas">&larr; Volver a la lista</a></p>
  @endsection