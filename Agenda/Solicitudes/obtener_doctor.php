<?php
// archivo: ruta_a_tu_api_o_php_para_obtener_doctores.php
header('Content-Type: application/json');
include '../../Configuraciones/conexion.php';
$sql = "SELECT id_doctor, Nombre_doctor FROM doctores";
$result = $conn->query($sql);
$doctores = [];

while ($row = $result->fetch_assoc()) {
    $doctores[] = $row;
}

echo json_encode($doctores);
?>
