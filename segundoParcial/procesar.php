<?php

echo "<h1>Turno reservado en Veterinaria Patitas</h1>";
$nombre = $_POST['nombre'];
$correo=$_POST['correo'];
$mascota=$_POST['mascota'];
echo"<p>Nombre: $nombre</P>";
echo"<p>Correo: $correo</P>";
echo"<p>Mascota: $mascota</P>";
$servicios = [
    "Consulta general - Bs 60",
    "Vacuna antirrabica - Bs 40",
    "Bano y corte - Bs 50"
];
echo "<h2>Servicios de la veterinaria</h2>";
foreach ($servicios as $servicio) {
    echo "<p> $servicio  </p>";
}
echo "<p>Te atiende Marlene Ugarte Galarza</p>";

?>