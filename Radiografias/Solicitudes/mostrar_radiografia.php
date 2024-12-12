<?php
// Incluir detalles de conexión
include '../Configuraciones/conexion.php';

// Iniciar sesión si no se ha hecho ya
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Obtener idPaciente desde POST, GET o Sesión
$idPaciente = isset($_POST['idPaciente']) ? intval($_POST['idPaciente']) : 0;

if ($idPaciente <= 0 && isset($_SESSION['idPaciente'])) {
    $idPaciente = $_SESSION['idPaciente'];
}

// Almacenar el idPaciente en la sesión
$_SESSION['idPaciente'] = $idPaciente;

// Verificar idPaciente válido
if ($idPaciente <= 0) {
    die("ID de paciente inválido.");
}

try {
    // Verificar conexión
    if ($conn->connect_error) {
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

    // Variable para almacenar el nombre del paciente
    $Nombre_paciente = '';

    // Consulta SQL para obtener el nombre del paciente
    $sqlNombre = "SELECT Nombre_paciente, Apellido_paciente FROM pacientes WHERE idPaciente = ?";
    $stmtNombre = $conn->prepare($sqlNombre);
    $stmtNombre->bind_param("i", $idPaciente);
    $stmtNombre->execute();
    $resultNombre = $stmtNombre->get_result();

    if ($resultNombre && $resultNombre->num_rows > 0) {
        $row = $resultNombre->fetch_assoc();
        $Nombre_paciente = $row['Nombre_paciente'] . ' ' . $row['Apellido_paciente'];
    } else {
        throw new Exception("No se encontró al paciente con el ID proporcionado.");
    }

    // Liberar resultados
    $stmtNombre->close();
    
    // Preparar y ejecutar consulta
    $sql = "SELECT * FROM radiografias WHERE idPaciente = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idPaciente);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar resultados
    $radiografias = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $radiografias[] = $row;
        }
    } else {
        throw new Exception("No se encontraron radiografías para el paciente con ID $idPaciente.");
    }

    // Cerrar declaración
    $stmt->close();
} catch (Exception $e) {
    $error = $e->getMessage();
} finally {
    // Cerrar conexión
    $conn->close();
}


?>
