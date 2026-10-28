<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BROASTERI-FRESPOLLO — con Laravel</title>
  <style>
    body { font-family: Arial, sans-serif; line-height: 1.6; max-width: 800px; margin: 0 auto; padding: 1rem; }
    header { background: #ff9800; color: #fff; padding: 1rem; border-radius: 8px; }
    nav a { color: #ffd; margin-right: 1rem; text-decoration: none; }
    footer { margin-top: 2rem; color: #666; border-top: 1px solid #ddd; padding-top: .5rem; }
  </style>
</head>
<body>
  <header>
    <h1>BROASTERIA FRESPOLLO</h1>
    <nav>
      <a href="/inicio">Inicio</a> 
      <a href="/menu">Menú</a>     
      <a href="/promociones">Promociones</a>
      <a href="/nosotros">Nosotros</a>
      <a href="/pedidos">Pedido</a>
      <a href="/contacto">Contacto</a>
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
