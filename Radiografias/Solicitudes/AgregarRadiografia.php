<?php
include '../../Configuraciones/conexion.php';

// Verificar si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idPaciente = $_POST['idPaciente'];
    $fecha = $_POST['Fecha'];
    $tipo = $_POST['Tipo_radiografia'];
    $descripcion = $_POST['Descripcion'];
    $observacion = $_POST['Observacion'];
    
    // Manejo de archivo (si se sube un archivo)
    if (isset($_FILES['Foto_Paciente'])) {
        $archivo = $_FILES['Foto_Paciente'];
        $archivoNombre = $archivo['name'];
        $archivoTmp = $archivo['tmp_name'];
        $archivoDestino = '../Fotos_Radiografias/' . $archivoNombre;

        move_uploaded_file($archivoTmp, $archivoDestino); // Mover archivo al directorio deseado
    }

    // Insertar radiografía en la base de datos
    $sql = "INSERT INTO radiografias (idPaciente, Fecha, Tipo_radiografia, Descripcion, Observacion, Foto_Paciente) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssss", $idPaciente, $fecha, $tipo, $descripcion, $observacion, $archivoDestino);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error en la base de datos']);
    }

    $stmt->close();
    $conn->close();
}
?>
