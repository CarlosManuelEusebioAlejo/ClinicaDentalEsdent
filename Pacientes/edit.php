<?
// Ejemplo de endpoint en PHP para obtener los datos del paciente
if (isset($_GET['idPaciente'])) {
    $idPaciente = $_GET['idPaciente'];
    
    // Realiza una consulta para obtener los datos del paciente
    $query = "SELECT * FROM pacientes WHERE idPaciente = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$idPaciente]);
    $paciente = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Devolver los datos como JSON
    echo json_encode($paciente);
}
?>