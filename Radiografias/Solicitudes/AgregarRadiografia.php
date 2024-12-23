<?php
include '../../Configuraciones/conexion.php';

// Verificar si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores de los campos del formulario
    $idPaciente = $_POST['idPaciente'] ?? null;
    $fecha = $_POST['Fecha'] ?? null;
    $tipo = $_POST['Tipo_radiografia'] ?? null;
    $descripcion = $_POST['Descripcion'] ?? null;
    $observacion = $_POST['Observacion'] ?? null;
    
    // Verificar si los campos están vacíos
    if (empty($idPaciente) || empty($fecha) || empty($tipo) || empty($descripcion) || empty($observacion)) {
        echo json_encode(['success' => false, 'error' => 'Todos los campos son obligatorios.']);
        exit;
    }

    // Verificar si se ha subido la foto del paciente
    if (!isset($_FILES['Foto_Paciente']) || $_FILES['Foto_Paciente']['error'] != 0) {
        echo json_encode(['success' => false, 'error' => 'Por favor, suba una foto del paciente.']);
        exit;
    }

    // Manejo de archivo (si se sube un archivo)
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
