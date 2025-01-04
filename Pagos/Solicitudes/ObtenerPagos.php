<?php
include '../../Configuraciones/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fecha'])) {
    $fecha = $_POST['fecha'];

    // Consulta para obtener registros del día seleccionado
    $query = "SELECT * FROM pagos WHERE fecha_Pago = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $fecha);
    $stmt->execute();
    $result = $stmt->get_result();

    // Inicializar totales por tipo de pago y total general
    $totales = [
        'Tarjeta' => 0,
        'Efectivo' => 0,
        'Transferencia' => 0,
        'Billpocket' => 0,
        'General' => 0
    ];

    if ($result->num_rows > 0) {
        while ($doctor = $result->fetch_assoc()) {
            $restante = $doctor['Costo'] - $doctor['Abono'];

            // Sumar al total del método de pago correspondiente
            $totales[$doctor['Tipo_pago']] += $doctor['Costo'];
            $totales['General'] += $doctor['Costo'];

            echo 
            "<tr class='bg-sky-100 overflow-hidden' style='border-radius: 50px; box-shadow:0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f7f8fe;'>
                <td class='px-4 py-3 text-left'>{$doctor['Nombre_paciente']}</td>
                <td class='px-4 py-3 text-left'>{$doctor['Tratamiento']}</td>
                <td class='px-4 py-3 text-left'>$" . number_format($doctor['Costo'], 2) . "</td>
                <td class='px-4 py-3 text-left'>$" . number_format($doctor['Abono'], 2) . "</td>
                <td class='px-4 py-3 text-left' hidden>{$doctor['fecha_Pago']}</td>
                <td class='px-4 py-3 text-left' hidden>{$doctor['Tipo_pago']}</td>
                <td class='px-4 py-3 text-center'>
                    <button class='open-actualizar-pago bg-transparent border-0 cursor-pointer' onclick='ActualizarPagoAdeudo({$doctor['id_pagos']})'>
                        <i class='bx bx-money-withdraw text-lg mx-2'></i>
                    </button>
                    <button class='edit-pago-btn' onclick='VerPago({$doctor['id_pagos']})' bg-transparent border-0 cursor-pointer'>
                        <i class='bx bx-show text-lg mx-2'></i>
                    </button>
                    <button class='bg-transparent' border-0 cursor-pointer' onclick='Basurapagos({$doctor['id_pagos']})'>
                        <i class='bx bx-trash text-lg mx-2' style='color:#3c3c3c'></i>
                    </button>
                </td>
            </tr>";
        }

        // Mostrar totales del día
        echo "
        <table class='table-auto w-full border-separate' style='border-spacing: 0px 12px;'>
            <thead class='bg-white mt-4 rounded-full' style='box-shadow: inset 0px 3px 3px rgba(33, 83, 170, 0.391); background-color: #f8f8ff;'>
                <tr>
                    <th class='px-4 py-2 text-left rounded-l-full'>EFECTIVO</th>
                    <th class='px-4 py-2 text-left'>TRANSFERENCIA</th>
                    <th class='px-4 py-2 text-left'>BILLPOCKET</th>
                    <th class='px-4 py-2 text-left'>TARJETA</th>
                    <th class='px-4 py-2 text-center rounded-r-full'>TOTAL</th>
                </tr>
            </thead>
            <tbody class='bg-gray-100'>
                <tr class='bg-sky-100 overflow-hidden' style='border-radius: 50px; box-shadow: 0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f7f8fe;'>
                    <td class='px-4 py-3 text-left' style='border-top-left-radius: 50px; border-bottom-left-radius: 50px;'>
                        $" . number_format($totales['Efectivo'], 2) . " MXN
                    </td>
                    <td class='px-4 py-3 text-left'>
                        $" . number_format($totales['Transferencia'], 2) . " MXN
                    </td>
                    <td class='px-4 py-3 text-left'>
                        $" . number_format($totales['Billpocket'], 2) . " MXN
                    </td>
                    <td class='px-4 py-3 text-left'>
                        $" . number_format($totales['Tarjeta'], 2) . " MXN
                    </td>
                    <td class='px-4 py-3 text-center rounded-r-full'>
                        $" . number_format($totales['General'], 2) . " MXN
                    </td>
                </tr>
            </tbody>
        </table>";
    } else {
        echo "<tr><td colspan='8' class='text-center'>No hay registros para la fecha seleccionada.</td></tr>";
    }

    // Consulta para obtener el total semanal y el rango de fechas
    $querySemana = "
        SELECT 
            SUM(Costo) AS total_semanal, 
            MIN(fecha_Pago) AS fecha_inicio, 
            MAX(fecha_Pago) AS fecha_fin 
        FROM pagos 
        WHERE WEEK(fecha_Pago, 1) = WEEK(?, 1) AND YEAR(fecha_Pago) = YEAR(?)
    ";
    $stmtSemana = $conn->prepare($querySemana);
    $stmtSemana->bind_param("ss", $fecha, $fecha);
    $stmtSemana->execute();
    $stmtSemana->bind_result($totalSemanal, $fechaInicio, $fechaFin);
    $stmtSemana->fetch();

    // Mostrar total semanal con rango de fechas
    echo "

        <div id='weekly' class='flex justify-center items-center'>
            <div class='day-header w-40 flex items-center justify-center px-1 py-1 rounded-full shadow-md' 
                style='background-color: #e4e5fa; border-radius: 50px; box-shadow: inset 4px 4px 10px #c4ccd8, inset -6px -6px 10px #ffffff; border: 2px solid rgba(144, 187, 223, 0.279);'>
                <span class='text-lg font-semibold'>
                    " . date('d F Y', strtotime($fechaInicio)) . " – " . date('d F Y', strtotime($fechaFin)) . "
                </span>
                
            </div>
        </div>
        <button class='bg-white mt-2 mb-4 rounded-full flex justify-center items-center transition duration-200' 
                style='box-shadow: 0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f8f8ff; padding: 10px; transition: background-color 0.2s ease;'
                onmouseover=\"this.style.backgroundColor='#e0e4f7';\" onmouseout=\"this.style.backgroundColor='#f8f8ff';\">
            <table class='table-auto border-separate text-center' style='border-spacing: 0px 6px;'>
                <thead class='bg-white rounded-full' style='box-shadow: inset 0px 3px 3px rgba(33, 83, 170, 0.391); background-color: #E9EDFF;'>
                    <tr>
                        <th class='px-4 py-2 text-left rounded-l-full'>EFECTIVO</th>
                        <th class='px-4 py-2 text-left'>TRANSFERENCIA</th>
                        <th class='px-4 py-2 text-left'>BILLPOCKET</th>
                        <th class='px-4 py-2 text-left'>TARJETA</th>
                        <th class='px-4 py-2 text-center rounded-r-full'>TOTAL</th>
                    </tr>
                </thead>
                <tbody class='bg-gray-100'>
                    <tr class='bg-sky-100 overflow-hidden' 
                        style='border-radius: 50px; box-shadow: 0px 5px 6px rgba(107, 141, 201, 0.391); background-color: #E9EDFF;'>
                        <td class='px-4 py-2 text-left' style='border-top-left-radius: 50px; border-bottom-left-radius: 50px;'>$" . number_format($totales['Efectivo'], 2) . " MXN</td>
                        <td class='px-4 py-2 text-left'>$" . number_format($totales['Transferencia'], 2) . " MXN</td>
                        <td class='px-4 py-2 text-left'>$" . number_format($totales['Billpocket'], 2) . " MXN</td>
                        <td class='px-4 py-2 text-left'>$" . number_format($totales['Tarjeta'], 2) . " MXN</td>
                        <td class='px-4 py-2 text-center rounded-r-full'>$" . number_format($totalSemanal, 2) . " MXN</td>
                    </tr>
                </tbody>
            </table>
        </button>
    ";
    

    $stmtSemana->close();
    $conn->close();

}
?>
