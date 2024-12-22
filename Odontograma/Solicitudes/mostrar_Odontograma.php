<?php
// Incluir detalles de la conexión a la base de datos
include '../Configuraciones/conexion.php';

// Iniciar sesión para manejar variables de sesión
session_start();


// Obtener el idPaciente desde la solicitud POST
$idPaciente = isset($_POST['idPaciente']) ? intval($_POST['idPaciente']) : 0;


// Si no se recibe el idPaciente por POST, intentar obtenerlo desde la sesión
if ($idPaciente <= 0 && isset($_SESSION['idPaciente'])) {
    $idPaciente = $_SESSION['idPaciente'];
}

// Almacenar el idPaciente en la sesión para usarlo en futuras peticiones
$_SESSION['idPaciente'] = $idPaciente;

try {
    // Verificar conexión
    if ($conn->connect_error) {
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar que el idPaciente sea válido
    if ($idPaciente <= 0) {
        throw new Exception("ID de paciente inválido.");
    }

    // Consulta SQL para obtener radiografías por idPaciente
    $sql = "SELECT * FROM odontograma WHERE idPaciente = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idPaciente); // Vincular el idPaciente a la consulta
    $stmt->execute(); // Ejecutar la consulta
    $result = $stmt->get_result(); // Obtener el resultado

    // Variable para almacenar las odontograma
    $odontogramas = [];

    if ($result && $result->num_rows > 0) {
        // Obtener cada fila de resultados como un arreglo asociativo
        while ($row = $result->fetch_assoc()) {
            $odontogramas[] = $row;
        }
    } else {
        // No se encontraron radiografías para este paciente
        $error = "No se encontraron radiografías para este paciente.";
    }

    // Liberar resultados
    $stmt->close();
} catch (Exception $e) {
    // Manejar errores y almacenar mensaje
    $error = $e->getMessage();
} finally {
    // Cerrar la conexión
    $conn->close();
}
?>
