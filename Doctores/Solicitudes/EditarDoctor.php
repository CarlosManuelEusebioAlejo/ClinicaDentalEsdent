<?php
include '../../Configuraciones/conexion.php';

if (isset($_POST['id_doctor'])) {
  $id_doctor = $_POST['id_doctor'];
  $nombre = $_POST['Nombre_doctor'];
  $correo = $_POST['Correo'];
  $especialidad = $_POST['Especialidad'];
  $numero = $_POST['Numero_telefono'];
  $experiencia = $_POST['experiencia_anios'];
  $conocimientos = $_POST['Conocimientos_tecnicos'];


  // Verificar si se ha subido un archivo para el certificado
  if (isset($_FILES['Certificado']) && $_FILES['Certificado']['error'] == 0) {
    $certificado = $_FILES['Certificado'];
    $certificadoPath = '../uploads/' . basename($certificado['name']);

    // Mover el archivo a la carpeta de destino
    if (move_uploaded_file($certificado['tmp_name'], $certificadoPath)) {
      // Preparar la consulta con el archivo
      $query = "UPDATE doctores SET 
                Nombre_doctor = ?, 
                Correo = ?, 
                Especialidad = ?, 
                Numero_telefono = ?, 
                experiencia_anios = ?, 
                Conocimientos_tecnicos = ?,  
                Certificado = ? 
                WHERE id_doctor = ?";

      // Preparar la sentencia
      $stmt = $conn->prepare($query);
      $stmt->bind_param('sssssssi', $nombre, $correo, $especialidad, $numero, $experiencia, $conocimientos, $certificadoPath, $id_doctor);
    }
  } else {
    // Si no se subió archivo, no incluir el campo Certificado en la consulta
    $query = "UPDATE doctores SET 
              Nombre_doctor = ?, 
              Correo = ?, 
              Especialidad = ?, 
              Numero_telefono = ?, 
              experiencia_anios = ?, 
              Conocimientos_tecnicos = ?
              WHERE id_doctor = ?";

    // Preparar la sentencia sin el certificado
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssssssi', $nombre, $correo, $especialidad, $numero, $experiencia, $conocimientos, $id_doctor);
  }

  // Ejecutar la consulta
  if ($stmt->execute()) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false]);
  }

  $stmt->close();
  $conn->close();
}
?>
