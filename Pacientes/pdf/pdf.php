<?php
ob_start();
require_once('../TCPDF/tcpdf.php');

// Obtener los datos del paciente desde la base de datos
if (isset($_GET['idPaciente'])) {
    $paciente_id = $_GET['idPaciente'];

    $conn = new mysqli('localhost', 'root', '', 'clinicadentalesdent');
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM pacientes WHERE idPaciente = ?");
    $stmt->bind_param("i", $paciente_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $paciente = $result->fetch_assoc();

    $stmt->close();
    $conn->close();

    // Crear nuevo documento PDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Información del documento
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Clínica Dental Esdent');
    $pdf->SetTitle('Datos del Paciente');
    $pdf->SetSubject('Datos del Paciente');

    // Configurar márgenes
    $pdf->SetMargins(15, 25, 15);
    $pdf->SetAutoPageBreak(TRUE, 15);

    // Añadir una página
    $pdf->AddPage();

// Logo y título
$pdf->Image('../../img/esdent1.png', 15, 20, 20, 20, 'PNG', '', 'T', true, 300, '', false, false, 0);

// Configurar fuente para el título al lado del logo
$pdf->SetFont('helvetica', 'B', 20);
$pdf->SetXY(40, 20); // Posicionar el título al lado del logo
$pdf->Cell(0, 20, 'Clínica Dental Esdent', 0, 1, 'L', 0, '', 0, false, 'T', 'M');
// Título de la sección
$pdf->SetFont('helvetica', 'B', 12);  // Tamaño de fuente más pequeño
$pdf->SetXY(15, 45); // Ajusta la posición vertical según sea necesario
$pdf->Cell(0, 15, 'Datos Personales', 0, 1, 'L', 0, '', 0, false, 'M', 'M');

// Espacio antes de la tabla
$pdf->Ln(5);

// Configurar fuente para la tabla
$pdf->SetFont('helvetica', '', 8);  // Tamaño de fuente más pequeño

// Definir el contenido de la tabla con estilo compacto
$table1 = '
<table border="0" cellpadding="3" cellspacing="0" width="100%" style="border: 1px solid #ddd; border-radius: 6px; background-color: #fff;">
    <thead>
        <tr>
            <td colspan="4" style="background-color: #d63c6c; color: white; font-weight: bold; text-align: center; border-radius: 6px 6px 0 0; font-size: 10px;">Datos Personales</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; border-top-left-radius: 6px; font-size: 8px;">Nombres:</td>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; border-top-right-radius: 6px; font-size: 8px;">Apellidos:</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Nombre_paciente'] . '</td>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Apellido_paciente'] . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">Edad:</td>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">Fecha de Nacimiento:</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Edad'] . '</td>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Fecha_nacimiento'] . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">Dirección:</td>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">Correo Electrónico:</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Direccion'] . '</td>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Correo'] . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">Teléfono:</td>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">Ocupación:</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Telefono'] . '</td>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Ocupacion'] . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">Recomendación:</td>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">Género:</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Recomendacion'] . '</td>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Genero'] . '</td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#f2f2f2" style="font-weight: bold; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px; font-size: 8px;">Estado Civil:</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Estado_civil'] . '</td>
        </tr>';

if ($paciente['genero'] === 'Femenino') {
    $estaEmbarazada = $paciente['Esta_embarazada'] === 'Si' ? 'Sí' : 'No';
    $mesesDeGestacion = $paciente['Esta_embarazada'] === 'Si' ? (!empty($paciente['meses_de_gestacion']) ? $paciente['Meses_de_gestacion'] : 'N/A') : 'N/A';

    $table1 .= '
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿ESTÁ EMBARAZADA?</td>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $estaEmbarazada . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">MESES DE GESTACIÓN:</td>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $mesesDeGestacion . '</td>
        </tr>';
}

$table1 .= '</tbody></table>';


// Escribir la tabla en el PDF
$pdf->writeHTML($table1, true, false, true, false, '');

// Espacio entre las secciones
$pdf->Ln(10);  // Reducido el espacio entre tablas

// Título de la segunda sección
$pdf->SetFont('helvetica', 'B', 12);  // Tamaño de fuente más pequeño
$pdf->SetXY(15, $pdf->GetY()); // Ajusta la posición vertical según sea necesario
$pdf->Cell(0, 10, 'Motivo de Consulta y Antecedentes', 0, 1, 'L', 0, '', 0, false, 'M', 'M');

// Espacio debajo del título
$pdf->Ln(5);

// Configurar fuente para el contenido de la segunda tabla
$pdf->SetFont('helvetica', '', 8);  // Tamaño de fuente más pequeño

// Definir el contenido de la segunda tabla con estilo compacto
$table2 = '
<table border="0" cellpadding="3" cellspacing="0" width="100%" style="border: 1px solid #ddd; border-radius: 6px; background-color: #fff;">
    <thead>
        <tr>
            <th colspan="2" bgcolor="#d63c6c" style="color: white; font-weight: bold; text-align: center; border-radius: 6px 6px 0 0; font-size: 10px;">Motivo de Consulta y Antecedentes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">MOTIVO DE SU CONSULTA:</th>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Motivo_consulta'] . '</td>
        </tr>
        <tr>
            <th colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿CUÁNDO LO EXAMINÓ SU ODONTÓLOGO POR ÚLTIMA VEZ?:</th>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Ultima_visita_odontologo'] . '</td>
        </tr>
        <tr>
            <th style="width: 50%; background-color: #f2f2f2; font-weight: bold; border: 1px solid #ddd; font-size: 8px;">¿CUÁNTAS VECES SE CEPILLA SUS DIENTES AL DÍA?:</th>
            <th style="width: 50%; background-color: #f2f2f2; font-weight: bold; border: 1px solid #ddd; font-size: 8px;">SUS ENCÍAS SANGRAN CON FRECUENCIA?:</th>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Cepillo_dientes_al_dia'] . ' veces</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Sangrado_encias'] . '</td>
        </tr>
        <tr>
            <th style="background-color: #f2f2f2; font-weight: bold; border: 1px solid #ddd; font-size: 8px;">¿APRIETA SUS DIENTES?:</th>
            <th style="background-color: #f2f2f2; font-weight: bold; border: 1px solid #ddd; font-size: 8px;">¿DURANTE EL DÍA O EN LA NOCHE?:</th>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Aprieta_dientes'] . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Durante_dia_o_noche'] . '</td>
        </tr>
        <tr>
            <th style="background-color: #f2f2f2; font-weight: bold; border: 1px solid #ddd; font-size: 8px;">¿LE HAN REALIZADO ALGUNA CIRUGÍA BUCAL?:</th>
            <th style="background-color: #f2f2f2; font-weight: bold; border: 1px solid #ddd; font-size: 8px;">¿HA UTILIZADO TRATAMIENTO DE BRACKETS?:</th>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Ha_realizado_cirugia_bucal'] . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Tiene_brackets'] . '</td>
        </tr>
        <tr>
            <th colspan="2" style="background-color: #f2f2f2; font-weight: bold; border: 1px solid #ddd; border-radius: 6px 6px 0 0; font-size: 8px;">¿TIENE DIFICULTAD PARA ABRIR O CERRAR LA BOCA?:</th>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . $paciente['Dificultad_abrir_boca'] . '</td>
        </tr>
    </tbody>
</table>';

// Escribir el contenido de la segunda tabla en el PDF
$pdf->writeHTML($table2, true, false, false, false, '');



// Añadir un salto de línea para separar las tablas
$pdf->Ln(35);  // Reducido el espacio entre tablas

// Título de la sección
$pdf->SetFont('helvetica', 'B', 12);  // Tamaño de fuente más pequeño
$pdf->Cell(0, 20, 'Antecedentes Patológicos y Enfermedades', 0, 1, 'L', 0, '', 0, false, 'M', 'M');

// Configurar fuente para el contenido de la tabla
$pdf->SetFont('helvetica', '', 8);  // Tamaño de fuente más pequeño

// Definir el contenido de la tabla con estilo
$table6 = '
<table border="0" cellpadding="3" cellspacing="0" width="100%" style="border: 1px solid #ddd; border-radius: 6px; background-color: #fff;">
    <thead>
        <tr>
            <td colspan="2" style="background-color: #d63c6c; color: white; font-weight: bold; text-align: center; border-radius: 6px 6px 0 0; font-size: 10px;">Antecedentes Patológicos y Enfermedades</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿ESTÁ TOMANDO ALGÚN ANTICOAGULANTE ORAL COMO ASPIRINA, WARFARINA, RIVAROXABÁN, APIXABAN, CLOPIDROGEL?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Toma_anticoagulante']) ? $paciente['Toma_anticoagulante'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿TIENE ALGÚN MARCAPASOS O LE HAN OPERADO DEL CORAZÓN?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Tiene_marcapasos_corazon']) ? $paciente['Tiene_marcapasos_corazon'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿ESTÁ TOMANDO ALGÚN MEDICAMENTO? ¿QUÉ MEDICAMENTO ESTÁ TOMANDO?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Toma_medicamentos']) ? $paciente['Toma_medicamentos'] : 'N/A') . '<br>' . (!empty($paciente['Toma_medicamentos']) ? $paciente['Toma_medicamentos'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿ES ALÉRGICO A ALGÚN MEDICAMENTO? ¿A QUÉ MEDICAMENTO ES ALÉRGICO?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Alergico_a_medicamento']) ? $paciente['Alergico_a_medicamento'] : 'N/A') . '<br>' . (!empty($paciente['Alergico_a_medicamento']) ? $paciente['Alergico_a_medicamento'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿LO HAN OPERADO? ¿DE QUÉ LO HAN OPERADO?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Lo_han_operado']) ? $paciente['Lo_han_operado'] : 'N/A') . '<br>' . (!empty($paciente['Que_operacion_le_han_hecho']) ? $paciente['Que_operacion_le_han_hecho'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿TIENE DIABETES?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿QUÉ VALORES MANEJA EN DIABETES?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Diabetes']) ? $paciente['Diabetes'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Que_valores_diabetes_maneja']) ? $paciente['Que_valores_diabetes_maneja'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿ES HIPERTENSO?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿QUÉ VALORES MANEJA EN HIPERTENSIÓN?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Es_hipertenso']) ? $paciente['Es_hipertenso'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Valores_hipertenso_maneja']) ? $paciente['Valores_hipertenso_maneja'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿PADECE DE OSTEOPOROSIS?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿SANGRA MUCHO AL CORTARSE?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Padece_osteoporosis']) ? $paciente['Padece_osteoporosis'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Sangra_al_cortarse']) ? $paciente['Sangra_al_cortarse'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿PADECE DE ARTRITIS REUMATOIDE?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿HA TENIDO INFARTO EN EL CORAZÓN?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Artritis_reumatoide']) ? $paciente['Artritis_reumatoide'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Ha_tenido_infarto_corazon']) ? $paciente['Ha_tenido_infarto_corazon'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿HA SUFRIDO DE HÍGADO GRASO?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿HA PADECIDO DE CÁNCER?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Higado_graso']) ? $paciente['higado_graso'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Cancer']) ? $paciente['Cancer'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿PRESENTA O ALGÚN PROBLEMA DEL SANGRE?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿PRESENTA O ALGÚN PROBLEMA HORMONAL?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['problema_sangre']) ? $paciente['Problema_sangre'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['problema_hormonal']) ? $paciente['problema_hormonal'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿HA PRESENTADO REACCIONES ALÉRGICAS?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿ESTÁ EN TRATAMIENTO ANTIDEPRESIVO?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['reacciones_alergicas']) ? $paciente['reacciones_alergicas'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Tiene_tratamiento_antidepresivo']) ? $paciente['Tiene_tratamiento_antidepresivo'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿HA TENIDO MALA EXPERIENCIA CON ANESTÉSICOS?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿LE HAN REALIZADO TRANSFUSIONES SANGUÍNEAS?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Mala_experiencia_con_anestesicos']) ? $paciente['Mala_experiencia_con_anestesicos'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Le_han_realizado_transfusion_sanguinea']) ? $paciente['Le_han_realizado_transfusion_sanguinea'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿TOMA ANTIDEPRESIVO?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿TOMA ÁCIDO ZOLEDRÓNICO?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['toma_antidepresivo']) ? $paciente['toma_antidepresivo'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Toma_acido_zoledronico']) ? $paciente['Toma_acido_zoledronico'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿TOMA IBANDRONATO (Boniva)?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿TOMA ACTONEL (Risedronato)?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Toma_ibandronato_boniva']) ? $paciente['Toma_ibandronato_boniva'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Toma_actonel_risedronato']) ? $paciente['Toma_actonel_risedronato'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿TOMA FOSAMAX (Alendronato)?</td>
            <td bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿TIENE PRÓTESIS EN EL CORAZÓN?</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Toma_fosamax_alendronato']) ? $paciente['Toma_fosamax_alendronato'] : 'N/A') . '</td>
            <td style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' .  (!empty($paciente['Tiene_protesis_corazon']) ? $paciente['Tiene_protesis_corazon'] : 'N/A') . '</td>

            </tr>
    </tbody>
</table>';

// Escribir el contenido de la tabla 3 en el PDF
$pdf->writeHTML($table6, true, false, false, false, '');


        
// Añadir un salto de línea para separar las tablas
$pdf->Ln(40);

// Título de la sección
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 20, 'Salud (enfermedades que padece o padeció)', 0, 1, 'L', 0, '', 0, false, 'M', 'M');

// Configurar fuente para el contenido de la tabla
$pdf->SetFont('freeserif', '', 8); 

// Definir el contenido de la tabla con estilo compacto
$table3 = '
<table border="0" cellpadding="3" cellspacing="0" width="100%" style="border: 1px solid #ddd; border-radius: 6px; background-color: #fff;">
    <thead>
        <tr>
            <td colspan="2" style="background-color: #d63c6c; color: white; font-weight: bold; text-align: center; border-radius: 6px 6px 0 0; font-size: 10px;">ENFERMEDADES QUE PADECE O PADECIÓ</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; border-top-left-radius: 6px; font-size: 8px;">EPILEPSIA :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Epilepsia']) ? $paciente['Epilepsia'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">GASTRITIS :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Gastritis']) ? $paciente['Gastritis'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">PRESIÓN ALTA :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Presion_alta']) ? $paciente['Presion_alta'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">PRESIÓN BAJA :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Presion_baja']) ? $paciente['Presion_baja'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">TUBERCULOSIS :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Tuberculosis']) ? $paciente['Tuberculosis'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">INSUFICIENCIA RENAL :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Insuficiencia_renal']) ? $paciente['Insuficiencia_renal'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">PROBLEMAS DE TIROIDES :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Tiroides']) ? $paciente['Tiroides'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">ENFERMEDADES PULMONARES :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Enfermedades_pulmonares']) ? $paciente['Enfermedades_pulmonares'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">ENFERMEDADES DEL CORAZÓN :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Enfermedades_corazon']) ? $paciente['Enfermedades_corazon'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">ASMA :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Asma']) ? $paciente['Asma'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">ANEMIA :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Anemia']) ? $paciente['Anemia'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">CÁNCER :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Cancer']) ? $paciente['Cancer'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">VIH/SIDA :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['vih_sida']) ? $paciente['vih_sida'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">ARTRITIS :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Artritis']) ? $paciente['Artritis'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">DIABETES :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Diabetes']) ? $paciente['Diabetes'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">HEPATITIS :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Hepatitis']) ? $paciente['Hepatitis'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">FAMILIAR PADECIDO  DE ENFERMEDADES :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Familiar_padecido_enfermedades']) ? $paciente['Familiar_padecido_enfermedades'] : 'N/A') . '</td>
        </tr>

        <tr>
            <td colspan="1" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">ENFERMEDADES PADECIDAS DEL FAMILIAR :</td>
            <td colspan="1" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Enfermedades_padecidas']) ? $paciente['Enfermedades_padecidas'] : 'N/A') . '</td>
        </tr>


    </tbody>
</table>';

// Escribir la tabla en el PDF
$pdf->writeHTML($table3, true, false, true, false, '');



// Añadir un salto de línea para separar las tablas
$pdf->Ln(10);

// Título de la sección
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 20, 'Hábitos Perniciosos', 0, 1, 'L', 0, '', 0, false, 'M', 'M');

// Configurar fuente para el contenido de la tabla
$pdf->SetFont('freeserif', '', 8); 

// Definir el contenido de la tabla con estilo basado en la Tabla 1
$table4 = '
<table border="0" cellpadding="3" cellspacing="0" width="100%" style="border: 1px solid #ddd; border-radius: 6px; background-color: #fff;">
    <thead>
        <tr>
            <td colspan="2" style="background-color: #d63c6c; color: white; font-weight: bold; text-align: center; border-radius: 6px 6px 0 0; font-size: 10px;">HÁBITOS PERNICIOSOS</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿FUMA?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Fuma']) ? $paciente['Fuma'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿CUÁNTOS CIGARROS AL DÍA?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Cuantos_cigarros_al_dia_fuma']) ? $paciente['Cuantos_cigarros_al_dia_fuma'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿CONSUME ALGÚN TIPO DE DROGA?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Consume_drogas']) ? $paciente['Consume_drogas'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿QUÉ DROGAS ESTÁ CONSUMIENDO?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Drogas_consumiendo']) ? $paciente['Drogas_consumiendo'] : 'N/A') . '</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#f2f2f2" style="font-weight: bold; font-size: 8px;">¿CONSUME BEBIDAS ALCOHÓLICAS CON FRECUENCIA?</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 1px solid #ddd; border-radius: 4px; font-size: 8px;">' . (!empty($paciente['Consume_alcohol']) ? $paciente['Consume_alcohol'] : 'N/A') . '</td>
        </tr>



    </tbody>
</table>';

// Escribir el contenido de la tabla en el PDF
$pdf->writeHTML($table4, true, false, true, false, '');

// Añadir un salto de línea para separar las tablas anteriores
$pdf->Ln(35); // Ajusta el espacio según sea necesario

// Título de la sección de Consentimiento
$pdf->SetFont('helvetica', 'B', 18);
$pdf->Cell(0, 30, 'Consentimiento', 0, 1, 'C', 0, '', 0, false, 'M', 'M');

// Configurar fuente para la tabla de la firma
$pdf->SetFont('freeserif', '', 10);

// Definir el contenido de la tabla de la firma con un espaciado adicional
$table5 = '<table border="0" cellpadding="4" cellspacing="0" width="100%" style="border: 1px solid #ddd; border-radius: 4px; background-color: #fff;">
                <tr>
                    <td style="text-align: center; font-size: 10px;">
                        He leído y comprendido toda la información contenida en este documento. Los datos presentados son legibles y correctos ante la persona que los ha proporcionado.
                    </td>
                </tr>
            </table>';

// Escribir la tabla en el PDF
$pdf->writeHTML($table5, true, false, true, false, '');

// Añadir un espacio antes de la firma
$pdf->Ln(10); // Espacio adicional antes de la firma

// Establecer la posición para la firma
$x = $pdf->GetX();
$y = $pdf->GetY();
$width = 120; // Ajusta el ancho de la firma según sea necesario
$height = 40; // Ajusta la altura de la firma según sea necesario

// Definir la ruta de la firma (verifica que esta ruta sea correcta)
$firmaPath = $paciente['Firma'];

// Calcular la posición centralizada
$imageX = ($pdf->GetPageWidth() - $width) / 2; // Posición horizontal centrada
$pdf->SetXY($imageX, $y);

// Verificar si la firma existe
if (!empty($firmaPath) && file_exists($firmaPath)) {
    // Añadir la imagen de la firma, centrada y más pequeña
    $pdf->Image($firmaPath, $imageX, $y, $width, $height, '', '', '', true, 300, '', false, false, 0, false, false, false);
} else {
    // Si no hay firma disponible, mostrar un mensaje
    $pdf->Cell(0, 10, 'No hay firma disponible.', 0, 1, 'C', 0, '', 0, false, 'T', 'M');
}

// Añadir una línea recta debajo de la firma
$pdf->SetY($pdf->GetY() + $height + 5); // Ajustar la posición de la línea
$pdf->SetLineWidth(0.5); // Ancho de la línea
$pdf->Line($imageX, $pdf->GetY(), $imageX + $width, $pdf->GetY()); // Dibujar la línea

// Añadir texto debajo de la línea
$pdf->SetY($pdf->GetY() + 2); // Ajustar la posición del texto
$pdf->SetFont('helvetica', 'I', 12);
$pdf->Cell(0, 10, 'Firma del Paciente', 0, 1, 'C');

ob_end_clean();
// Salida del archivo PDF
$pdf->Output('datos_paciente.pdf', 'I');
}
?>