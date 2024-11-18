<?php
include '../../Configuraciones/conexion.php';

// Consulta para obtener todos los doctores (solo el nombre)
$query = "SELECT id_doctor, Nombre_doctor FROM doctores";
$result = mysqli_query($conn, $query);

// Comienza a imprimir las opciones del select
echo '<option value="">Seleccione doctor</option>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['id_doctor'] . '">' . $row['Nombre_doctor'] . '</option>';
}
?>
