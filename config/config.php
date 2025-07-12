<?php
$host = 'localhost';
$usuario = 'u896023791_info';
$contrasena = 'Admin23806328@';
$base_de_datos = 'u896023791_informacion';

$connection = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar conexión
if ($connection->connect_error) {
    die("❌ Error de conexión: " . $connection->connect_error);
}

$connection->set_charset("utf8");
 //echo "✅ Conexión exitosa";
?>
