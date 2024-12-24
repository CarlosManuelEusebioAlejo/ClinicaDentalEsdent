<?php
// Incluir detalles de la conexión a la base de datos
include '../Configuraciones/conexion.php';

// Iniciar sesión para manejar variables de sesión
session_start();

// Obtener el idPaciente desde el POST, si está disponible
$idPaciente = isset($_POST['idPaciente']) ? intval($_POST['idPaciente']) : 0;

// Si no se recibe el idPaciente por POST, intentar obtenerlo desde la sesión
if ($idPaciente <= 0 && isset($_SESSION['idPaciente'])) {
    $idPaciente = $_SESSION['idPaciente'];
}

try {
    // Verificar conexión
    if ($conn->connect_error) {
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar que el idPaciente sea válido
    if ($idPaciente <= 0) {
        throw new Exception("ID de paciente no proporcionado o inválido.");
    }

    // Almacenar el idPaciente en la sesión para usarlo en futuras peticiones
    $_SESSION['idPaciente'] = $idPaciente;

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

    // Consulta SQL para obtener los datos del paciente con el id correspondiente
    $sqlPaciente = "SELECT * FROM pacientes WHERE idPaciente = ?";
    $stmtPaciente = $conn->prepare($sqlPaciente);
    $stmtPaciente->bind_param("i", $idPaciente);
    $stmtPaciente->execute();
    $resultPaciente = $stmtPaciente->get_result();

    // Variable para almacenar los datos del paciente
    $pacienteDatos = [];

    if ($resultPaciente && $resultPaciente->num_rows > 0) {
        $pacienteDatos = $resultPaciente->fetch_assoc();
    } else {
        throw new Exception("No se encontraron datos del paciente con el ID proporcionado.");
    }

    // Liberar resultados
    $stmtPaciente->close();

    // Consulta SQL para obtener historial por idPaciente
    $sqlHistorial = "SELECT * FROM historial_tratamiento WHERE idPaciente = ?";
    $stmtHistorial = $conn->prepare($sqlHistorial);
    $stmtHistorial->bind_param("i", $idPaciente);
    $stmtHistorial->execute();
    $resultHistorial = $stmtHistorial->get_result();

    // Variable para almacenar el historial
    $historial = [];

    if ($resultHistorial && $resultHistorial->num_rows > 0) {
        while ($row = $resultHistorial->fetch_assoc()) {
            $historial[] = $row;
        }
    } else {
        throw new Exception("No se encontraron registros en el historial para este paciente.");
    }

    // Liberar resultados
    $stmtHistorial->close();
} catch (Exception $e) {
    // Manejar errores y almacenar mensaje
    $error = $e->getMessage();
} finally {
    // Cerrar conexión
    $conn->close();
}
?>
