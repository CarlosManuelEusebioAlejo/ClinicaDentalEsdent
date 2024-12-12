

<?php
include '../../Configuraciones/conexion.php'; // Verifica que la ruta sea correcta

// Verifica si el ID del doctor fue pasado correctamente
if (isset($_POST['idPaciente'])) {
    $idPaciente = $_POST['idPaciente'];

    // Prepara la consulta SQL para evitar inyecciones SQL
    $sql = "DELETE FROM pacientes WHERE idPaciente = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idPaciente);

    // Ejecuta la consulta y verifica si fue exitosa
    if ($stmt->execute()) {
        echo "Paciente eliminado correctamente.";
    } else {
        echo "Error al eliminar el doctor: " . $conn->error;
    }

    // Cierra la declaración
    $stmt->close();
} else {
    echo "ID de doctor no recibido.";
}

// Cierra la conexión
$conn->close();
?>
