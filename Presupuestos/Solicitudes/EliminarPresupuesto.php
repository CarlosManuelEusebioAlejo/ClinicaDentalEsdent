<?php
include '../../Configuraciones/conexion.php'; // Ruta correcta para la conexión

// Verifica si el ID del presupuesto fue enviado
if (isset($_POST['id_presupuesto'])) {
    $id_presupuesto = $_POST['id_presupuesto'];

    // Registrar el ID para depuración
    error_log("ID recibido: " . $id_presupuesto);

    // Verifica conexión
    if ($conn->connect_error) {
        error_log("Error de conexión: " . $conn->connect_error);
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Prepara la consulta SQL para evitar inyecciones SQL
    $sql = "DELETE FROM presupuestos WHERE id_presupuesto = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id_presupuesto);

        // Ejecuta la consulta y verifica si fue exitosa
        if ($stmt->execute() && $stmt->affected_rows > 0) {
            echo "Presupuesto eliminado correctamente.";
        } else {
            error_log("Error en la ejecución: ID no encontrado o problema con la eliminación.");
            echo "Error: No se encontró el ID o no se pudo eliminar.";
        }

        // Cierra la declaración
        $stmt->close();
    } else {
        error_log("Error al preparar la consulta: " . $conn->error);
        echo "Error al preparar la consulta: " . $conn->error;
    }
} else {
    error_log("ID del presupuesto no recibido.");
    echo "ID del presupuesto no recibido.";
}

// Cierra la conexión
$conn->close();
?>
