
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Broastería</title>
</head>
<body>

    <h1>Broastería Frespollo</h1>
    <h2>Iniciar sesión</h2>

    <form action="/login" method="post">
        @csrf
        <h3>Solo el administrador puede registrar y ver los pedidos</h3>

  {{-- Si el intento anterior falló, la ruta nos mandó el mensaje "en el bolsillo"
       de la sesión. Se muestra una vez y desaparece solo. --}}
  @if (session('error'))
    <p style="color: #b00020;"><strong>{{ session('error') }}</strong></p>
  @endif
        <p>
      <label for="email">Correo:</label><br>
      <input type="email" id="email" name="email" required>
    </p>

    <p>
      {{-- type="password" solo tapa las letras en pantalla. Lo que protege
           de verdad es que del otro lado la contraseña está hasheada. --}}
      <label for="password">Contraseña:</label><br>
      <input type="password" id="password" name="password" required>
    </p>


        <br>

        <button type="submit">Ingresar</button>

    </form>
    <br>
    <form action="/logout" method="POST">
    @csrf
    <button type="submit">Volver</button>

    <footer>
    <p> El sabor que te hace volver  - © Marlene Ugarte Galarza </p> 
    </footer>
</body>
 
</html>
