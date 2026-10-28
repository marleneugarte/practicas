@extends('layouts.base')

@section('contenido')
  <h2> Realizar pedido</h2> 
  <form id="form-pedido" novalidate method="post" action="procesar.php">

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
            
      <p id="error-pedido" class="aviso"></p>
  </form>
  @endsection