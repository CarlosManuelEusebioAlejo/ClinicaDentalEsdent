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
    if (isset($_FILES['Foto_Paciente']) && $_FILES['Foto_Paciente']['error'] == 0) {
        $archivo = $_FILES['Foto_Paciente'];
        $archivoNombre = basename($archivo['name']); // Obtener el nombre original
        $archivoTmp = $archivo['tmp_name'];
        $archivoTipo = $archivo['type'];
        $archivoTamanio = $archivo['size'];
        
        // Validar que sea una imagen
        $imagenTiposPermitidos = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        if (in_array($archivoTipo, $imagenTiposPermitidos)) {
            // Generar un nombre único para evitar sobrescribir archivos
            $nuevoNombre = uniqid('radiografia_', true) . '.' . pathinfo($archivoNombre, PATHINFO_EXTENSION);
            $archivoDestino = '../Fotos_Radiografias/' . $nuevoNombre;

            // Verificar que el tamaño del archivo no exceda el límite (por ejemplo, 5MB)
            if ($archivoTamanio <= 5 * 1024 * 1024) {
                move_uploaded_file($archivoTmp, $archivoDestino); // Mover archivo al directorio deseado
            } else {
                echo json_encode(['success' => false, 'error' => 'El archivo es demasiado grande.']);
                exit;
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'El archivo no es una imagen válida.']);
            exit;
        }
    } else {
        // Si no se subió un archivo
        $archivoDestino = null;
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
