@extends('layouts.base')

@section('contenido')
  <h2> Realizar pedido</h2> 
  <form action="/pedidos/nuevo" method="POST">
        @csrf

      <fieldset>
          <legend>Datos del cliente</legend>

          <label for="nombre">Nombre completo:</label>
          <input type="text" id="nombre" name="nombre" required>
          <br><br>

          <label for="correo">Correo:</label>
          <input type="email" id="correo" name="correo" required>
          <br><br>
          <label for="pedido">Detalle pedido:</label>
          <textarea id="pedido" name="pedido" rows="4" placeholder="Cuentanos que necesitas..."></textarea>

      </fieldset>
            
      <br>

      <button type="submit" id="btn-registrar">Registrar pedido</button>
  </form>
  @endsection