<?php
include '../../Configuraciones/conexion.php';

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id_doctor'])) {
  $id_doctor = $data['id_doctor'];
  $nombre = $data['Nombre_doctor'];
  $correo = $data['Correo'];
  $especialidad = $data['Especialidad'];
  $numero = $data['Numero_telefono'];
  $experiencia = $data['experiencia_anios'];
  $conocimientos = $data['Conocimientos_tecnicos'];
  $contrasena = $data['Contrasena'];

  $query = "UPDATE doctores SET 
            Nombre_doctor = '$nombre', 
            Correo = '$correo', 
            Especialidad = '$especialidad', 
            Numero_telefono = '$numero', 
            experiencia_anios = '$experiencia', 
            Conocimientos_tecnicos = '$conocimientos', 
            Contrasena = '$contrasena' 
            WHERE id_doctor = $id_doctor";

  if (mysqli_query($conn, $query)) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false]);
  }
}
?>
