<?php
// Conexión a la base de datos
include '../../Configuraciones/conexion.php';

// Verificar si se enviaron los datos
if (isset($_POST['idPaciente'], $_POST['Tratamiento'], $_POST['Observacion'], $_POST['Costo'], $_POST['id_doctor'], $_POST['Fecha'])) {
    // Obtener los valores del formulario
    $idPaciente = $_POST['idPaciente'];
    $tratamiento = $_POST['Tratamiento'];
    $observacion = $_POST['Observacion'];
    $costo = $_POST['Costo'];
    $id_doctor = $_POST['id_doctor'];
    $fecha = $_POST['Fecha'];

    // Obtener el nombre del doctor de la base de datos
    $queryDoctor = "SELECT Nombre_doctor FROM doctores WHERE id_doctor = ?";
    $stmtDoctor = $conn->prepare($queryDoctor);
    $stmtDoctor->bind_param("i", $id_doctor);
    $stmtDoctor->execute();
    $resultDoctor = $stmtDoctor->get_result();
    $nombreDoctor = '';

    if ($resultDoctor->num_rows > 0) {
        $rowDoctor = $resultDoctor->fetch_assoc();
        $nombreDoctor = $rowDoctor['Nombre_doctor'];
    }
    $stmtDoctor->close();

    // Insertar el tratamiento en la base de datos junto con el nombre del doctor
    $query = "INSERT INTO historial_tratamiento (idPaciente, Tratamiento, Observacion, Costo, id_doctor, nombre_doctor, Fecha) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("issdiss", $idPaciente, $tratamiento, $observacion, $costo, $id_doctor, $nombreDoctor, $fecha);

    if ($stmt->execute()) {
        echo "Tratamiento agregado correctamente.";
    } else {
        echo "Error al agregar el tratamiento: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Por favor, complete todos los campos requeridos.";
}
?>




