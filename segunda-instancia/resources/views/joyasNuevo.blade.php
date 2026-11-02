@extends('layouts.baseJoyas')

@section('contenido')
  <h2> Realizar pedido</h2> 
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
  @endsection