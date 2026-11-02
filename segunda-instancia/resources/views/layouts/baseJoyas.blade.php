<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joyeria La Esmeralda</title>
  <style>
    body { font-family: Arial, sans-serif; line-height: 1.6; max-width: 800px; margin: 0 auto; padding: 1rem; }
    header { background: #0B6E4F; color: #C9A227 ; padding: 1rem; border-radius: 8px; }
    nav a { color: #FAF6EC; margin-right: 1rem; text-decoration: none; }
    footer { margin-top: 2rem; color: #222222; border-top: 1px solid #ddd; padding-top: .5rem; }
  </style>
</head>
<body>
  <header>
    <h1>Joyeria La Esmeralda</h1>
    <nav>
      <a href="/joyas">lista</a>
      <a href="/joyas/nuevo">registrar joyas</a>
      <a href="/hola">La ruta mínima</a>
    </nav>
  </header>

  <main>

    @yield('contenido')
  </main>

  <footer>
    <p> El sabor que te hace volver  - © Marlene Ugarte Galarza </p> 
  </footer>
</body>
</html>
