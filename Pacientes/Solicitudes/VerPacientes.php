<?php
// Detalles de la conexión a la base de datos
include '../conexion.php';

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener todos los pacientes
$sql = "SELECT * FROM pacientes";
$result = $conn->query($sql);

// Variable para almacenar los pacientes
$pacientes = [];

if ($result->num_rows > 0) {
    // Obtener cada fila de resultados como un arreglo asociativo
    while ($row = $result->fetch_assoc()) {
        $pacientes[] = $row;
    }
}

// Cerrar conexión
$conn->close();
?>