<?php
include '../../Configuraciones/conexion.php';

if (isset($_GET['id_doctor'])) {
    $id_doctor = $_GET['id_doctor'];
    // Consulta para obtener los detalles del doctor
    $query = "SELECT * FROM doctores WHERE id_doctor = '$id_doctor'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $doctor = mysqli_fetch_assoc($result);
        echo json_encode($doctor);
    } else {
        echo json_encode(["error" => "Doctor no encontrado"]);
    }
}
?>
    