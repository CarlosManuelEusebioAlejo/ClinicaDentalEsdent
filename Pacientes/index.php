<?php

// PHP QUE EXTRAE LA INFORMACION DE LOS PACIENTES Y LOS MUESTRA EN LA TABLA
include 'solicitudes/mostrar_pacientes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>ClinicaDentalEsdent</title>
    <link rel="icon" href="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/../Configuraciones/css/menu.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-#EFF1F9 " style="background-color: #e8ecff;color: #3C3C3C">
    <!-- Contenedor principal -->
    <div class="flex h-screen">
      <!-- Barra lateral -->
      <div class="h-screen w-64 p-6 flex flex-col justify-between shadow-lg text-gray-800  rounded-r-3xl sidebar"  style="background-color: #f2f2ff;">
            <!-- Top Section (Logo y Menú) -->
            <div>
                <!-- Logo -->
                <div class="flex flex-col items-center mb-9">
                    <span class="text-sm font-semibold">CLINICA DENTAL</span>
                    <img src="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" alt="" class="w-24 h-24 mb-2" />
                </div>

                <div class="flex justify-center mb-6">
                    <div class="bg-[#E9EDFF] w-24 h-24 flex flex-col items-center justify-center rounded-lg shadow-lg">
                        <i class='bx bx-id-card text-3xl'></i>
                        <span class="text-sm font-semibold mt-2">PACIENTES</span>
                    </div>
                </div>
                <!-- Menú -->
                <nav class="space-y-4">
                    <a href="/../ClinicaDentalEsdent/PanelControl/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                        <i class='bx bxs-dashboard text-2xl'></i>
                        <span class="font-semibold mx-4">PANEL</span>
                    </a>
                    <a href="" class="flex items-center p-2 rounded-full bg-white shadow-inner" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
                        <i class='bx bx-id-card text-2xl'></i>
                        <span class="font-semibold mx-4">PACIENTES</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/Agenda/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                      <i class='bx bxs-book-bookmark text-2xl'></i>
                      <span class="font-semibold mx-4">AGENDA</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/Pagos/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                      <i class='bx bx-money text-2xl'></i>
                      <span class="font-semibold mx-4">PAGOS</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/Presupuestos/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                      <i class='bx bx-money-withdraw text-2xl'></i>
                      <span class="font-semibold mx-4">PRESUPUESTOS</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/Limpiezas/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                      <i class='bx bx-play-circle text-2xl'></i>
                      <span class="font-semibold mx-4">LIMPIEZAS</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/ExplicacionVisual/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                      <i class='bx bx-play-circle text-2xl'></i>
                      <span class="font-semibold mx-4">VISUAL</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/Doctores/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                      <i class='bx bx-group text-2xl'></i>
                      <span class="font-semibold mx-4">DOCTORES</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/InteligenciaArtificial/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                      <i class='bx bx-brain text-2xl'></i>
                      <span class="font-semibold mx-4">ESDENT IA</span>
                    </a>
                </nav>
            </div>
  
            <!-- Sección inferior (Logout) -->
            <div class="flex justify-center items-center">
                <a href="#" class="mt-2 p-3 rounded-lg shadow-lg" style="background-color: #f3f3fd;">
                  <i class='bx bx-log-out mt-1 text-2xl'></i>
                </a>
            </div>           
    </div>
      <!-- Contenido principal -->
      <div class="flex-1 flex flex-col mx-4">
        <!-- Título y párrafo alineados a la izquierda -->
        <div class="ml-8 mt-8">
          <h1 class="text-4xl font-semibold">PACIENTES REGISTRADOS</h1>
          <p class="text-lg text-gray-500 mt-1 mb-12">8 Pacientes</p>
        </div>

        <!-- Div centrado -->
        <div class="flex flex-1 justify-center items-start">
            <div class="bg-white shadow-lg rounded-lg p-4 w-full max-w-5xl" style="background-color: #f8f8ff;" >
              <!-- Contenido original del div -->
              <div class="flex justify-between items-center mt-6 mb-4 w-full">
                  <button id="add-patient-btn" class="text-white px-4 py-2 rounded-full shadow-lg" style="background-color: #B4221B;">
                    + AGREGAR PACIENTE
                  </button>
                  <div>
                    <input type="text" placeholder="Buscar Paciente" class="px-4 py-2 rounded-full shadow-lg">
                  </div>
              </div>
                   <!-- Tabla de pacientes -->
              <table class="table-auto w-full border-separate" style="border-spacing: 0px 12px;">
                <!-- Encabezado con borde redondeado -->
                <thead class="bg-white rounded-full"  style=" box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
                    <tr>
                        <th class="px-4 py-2 text-left rounded-l-full">NOMBRE</th>
                        <th class="px-4 py-2 text-left">APELLIDOS</th>
                        <th class="px-4 py-2 text-center rounded-r-full">OPCIONES</th>
                    </tr>
                </thead>
            
                <!-- Cuerpo de la tabla -->
                <tbody class="bg-gray-100">
                <?php foreach ($pacientes as $paciente): ?>
                    <!-- Fila 1 -->
                    <div class="mb-2">
                      <tr class="bg-sky-100 overflow-hidden " style="border-radius: 50px; box-shadow:0px 5px 6px rgba(3, 64, 179, 0.229); background-color: #e8ecff;">
                          <td class="px-4 py-3 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;"><?= $paciente['Nombre_paciente'] ?></td>
                          <td class="px-4 py-3 text-left"><?= $paciente['Apellido_paciente'] ?></td>
                          <td class="px-4 py-3 text-center" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
                              <!-- Botón para abrir el modal -->
                                   <!-- Botón para abrir el modal -->
<!-- Botón para abrir el modal -->
<button type="button"  class="ver-registro-btn bg-transparent border-0 cursor-pointer" data-id="<?= $paciente['idPaciente'] ?>">
    <i class='bx bx-id-card text-lg mx-2'></i>
</button>
                              <!-- Botón para redirigir a historial.html -->
                              <button class="bg-transparent border-0 cursor-pointer" onclick="window.location.href='/../ClinicaDentalEsdent/Historial/'">
                                  <i class='bx bx-folder text-lg mx-2'></i>
                              </button>
                              <!-- Botón para borrar -->
                              <button class="bg-transparent border-0 cursor-pointer"">
                                  <i class='bx bx-trash text-lg mx-2' style='color:#3c3c3c'></i>
                              </button>
                          </td>
                      </tr>
                    </div>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
    <?php
      include 'Modales/AgregarPaciente.php';
      include 'Modales/VerPaciente.php';
      include 'Modales/EditarPaciente.php';
    ?>
    <script src="../js/AgregarPacientes.js"></script>
</body>
</html>