<?php
include '../Configuraciones/conexion.php';

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id_doctor'])) {
    $id_doctor = $data['id_doctor'];
    $name = mysqli_real_escape_string($conn, $data['name']);
    $email = mysqli_real_escape_string($conn, $data['email']);
    $specialty = mysqli_real_escape_string($conn, $data['specialty']);
    $phone = mysqli_real_escape_string($conn, $data['phone']);
    $experience = mysqli_real_escape_string($conn, $data['experience']);
    $skills = mysqli_real_escape_string($conn, $data['skills']);
    $role = mysqli_real_escape_string($conn, $data['role']);

    // Actualización de los datos del doctor
    $query = "UPDATE doctores SET 
              Nombre_doctor = '$name', 
              Correo = '$email', 
              Especialidad = '$specialty', 
              Numero_telefono = '$phone', 
              experiencia_anios = '$experience', 
              Conocimientos_tecnicos = '$skills', 
              Rol = '$role'
              WHERE id_doctor = '$id_doctor'";

    if (mysqli_query($conn, $query)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Error al actualizar los datos"]);
    }
}
?>
