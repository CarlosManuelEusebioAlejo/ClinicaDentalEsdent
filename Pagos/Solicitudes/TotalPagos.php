<?php
include '../../Configuraciones/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fecha'])) {
    $fecha = $_POST['fecha'];

    // Inicializar totales
    $totalEfectivo = 0;
    $totalTransferencia = 0;
    $totalBillpocket = 0;
    $totalTarjeta = 0;

    // Consulta para obtener los pagos de la fecha
    $queryPagos = "SELECT Tipo_pago, SUM(Costo) as Total FROM pagos WHERE DATE(fecha_pago) = '$fecha' GROUP BY Tipo_pago";
    $resultPagos = mysqli_query($conn, $queryPagos);

    if (mysqli_num_rows($resultPagos) > 0) {
        while ($row = mysqli_fetch_assoc($resultPagos)) {
            switch ($row['Tipo_pago']) {
                case 'Efectivo':
                    $totalEfectivo = $row['Total'];
                    break;
                case 'Transferencia':
                    $totalTransferencia = $row['Total'];
                    break;
                case 'Billpocket':
                    $totalBillpocket = $row['Total'];
                    break;
                case 'Tarjeta':
                    $totalTarjeta = $row['Total'];
                    break;
            }
        }
    }

    // Calcular total general
    $totalGeneral = $totalEfectivo + $totalTransferencia + $totalBillpocket + $totalTarjeta;

    // Devolver los resultados como JSON
    echo json_encode([
        'Efectivo' => number_format($totalEfectivo, 2),
        'Transferencia' => number_format($totalTransferencia, 2),
        'Billpocket' => number_format($totalBillpocket, 2),
        'Tarjeta' => number_format($totalTarjeta, 2),
        'Total' => number_format($totalGeneral, 2),
    ]);
}
?>
