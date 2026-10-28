<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jugueteria El Trompo</title>
  <style>
    body { font-family: Arial, sans-serif; line-height: 1.6; max-width: 800px; margin: 0 auto; padding: 1rem; }
    header { background: #ff5252; color: #fff; padding: 1rem; border-radius: 8px; }
    nav a { color: #ffd; margin-right: 1rem; text-decoration: none; }
    footer { margin-top: 2rem; color: #666; border-top: 1px solid #ddd; padding-top: .5rem; }
  </style>
</head>
<body>
  <header>
    <h1>Jugueteria El Trompo</h1>
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
    Integradora - Marlene Ugarte Galarza - 27 de octubre de 2026 
  </footer>
</body>
</html>
