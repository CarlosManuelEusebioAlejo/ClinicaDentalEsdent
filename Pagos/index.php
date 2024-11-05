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
                    <a href="/../ClinicaDentalEsdent/Pacientes/" class="flex items-center p-2 rounded-lg bg-[#E9EDFF]">
                        <i class='bx bx-id-card text-2xl'></i>
                        <span class="font-semibold mx-4">PACIENTES</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/Agenda/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                        <i class='bx bxs-book-bookmark text-2xl'></i>
                        <span class="font-semibold mx-4">AGENDA</span>
                    </a>
                    <a href="" class="flex items-center p-2 rounded-full bg-white shadow-inner" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
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

        <style>
            /* Media query para dispositivos con ancho menor a 768px (típicamente tablets) */
            @media (max-width: 1208px) {
              nav a span {
                display: none; /* Oculta el texto en tablets */
              }
              /* Centrar los íconos en tabletas y reducir el tamaño del div principal */
              .sidebar {
                width: 130px; /* Hacer la barra más delgada */
              }
              nav a i {
                justify-content: center; /* Asegura que los íconos estén centrados */
                margin: 0 auto;
              }
            }
          </style>
          
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
        <div class="flex items-center justify-between mb-12">
            <!-- Título y subtítulo alineados a la izquierda en la misma fila -->
            <div>
                <h1 class="text-4xl font-semibold">PAGOS</h1>
                <p class="text-lg text-gray-500">5 Pagos Pendientes</p>
            </div>
    
            <!-- Botones y buscador en la misma fila, alineados a la derecha -->
            <div class="flex items-center mr-8 space-x-4">
                <!-- Botón para "PENDIENTES" -->
                <a href="odontograma.html" class="bg-blue-500 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-600" style="background-color: #F86511;">PENDIENTES</a>
                
                <!-- Botón para "PAGADOS" -->
                <a href="index.html" class="text-white px-4 py-2 rounded-full font-semibold hover:bg-red-600" style="background-color: #07b52d;">PAGADOS</a>
                
                <!-- Buscador alineado a la derecha de los botones -->
                <input type="text" placeholder="Buscar Paciente" class="px-4 py-2 rounded-full shadow-lg">
            </div>
        </div>
    </div>
    
    
      
      <!-- Div centrado -->
      <div class="flex flex-1 justify-center items-start">
        <div class="bg-white overflow-y-auto h-[1/5] shadow-lg rounded-lg p-4 w-full max-w-5xl" style="background-color: #f8f8ff; height: 625px;" >
              
      
              <!-- Contenedor de la tabla -->
              <div class="flex overflow-y-auto h-64 mt-6 items-center mb-12 p-4 bg-white shadow-inner w-full" style="box-shadow: inset 0px 3px 6px #0f5aab6c; background-color: #E9EDFF; border-radius: 28px; padding-top: 105px;">
                  <!-- Tabla de pacientes -->
                  <table class="table-auto w-full border-separate" style="border-spacing: 0px 12px;">
                      <!-- Encabezado con borde redondeado -->
                      <thead class="bg-white mt-4 rounded-full" style="box-shadow: inset 0px 3px 3px rgba(33, 83, 170, 0.391); background-color: #f8f8ff;">
                          <tr>
                              <th class="px-4 py-2 text-left rounded-l-full">PACIENTE</th>
                              <th class="px-4 py-2 text-left">TRATAMIENTO</th>
                              <th class="px-4 py-2 text-left">COSTO</th>
                              <th class="px-4 py-2 text-left">ABONO</th>
                              <th class="px-4 py-2 text-left">ADEUDO</th>
                              <th class="px-4 py-2 text-left">DRA/OBS</th>
                              <th class="px-4 py-2 text-center rounded-r-full">OPCIONES</th>
                          </tr>
                      </thead>
      
                      <!-- Cuerpo de la tabla -->
                      <tbody class="bg-gray-100">
                          <!-- Fila 1 -->
                          <tr class="bg-sky-100 overflow-hidden" style="border-radius: 50px; box-shadow:0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f7f8fe;">
                              <td class="px-4 py-3 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;">Andrade Villaseñor</td>
                              <td class="px-4 py-3 text-left">Limpieza y Valoración</td>
                              <td class="px-4 py-3 text-left">$3,000 MXN</td>
                              <td class="px-4 py-3 text-left">$500 MXN</td>
                              <td class="px-4 py-3 text-left">$2,500 MXN</td>
                              <td class="px-4 py-3 text-left">Cinthia Patricia</td>
                              <td class="px-4 py-3 text-center" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">                 
                                  <button id='edit-presupuesto-btn' class="bg-transparent border-0 cursor-pointer">
                                      <i class='bx bx-money-withdraw text-lg mx-2'></i>
                                  </button>
                                  <!-- Botones de acción -->
                                  <button id='edit-presupuesto-btn' class="bg-transparent border-0 cursor-pointer">
                                    <i class='bx bx-edit text-lg mx-2'></i>
                                  </button>
                                  <button class="bg-transparent border-0 cursor-pointer">
                                      <i class='bx bx-trash text-lg mx-2' style='color:#3c3c3c'></i>
                                  </button>
                              </td>
                          </tr>
                          <!-- Fila 2 -->
                          <tr class="overflow-hidden" style="background-color: #f7f8fe; border-radius: 50px; box-shadow:0px 5px 6px rgba(29, 67, 133, 0.391);">
                              <td class="px-4 py-3 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;">Hano Díaz Paniagua</td>
                              <td class="px-4 py-3 text-left">Limpieza y Valoración</td>
                              <td class="px-4 py-3 text-left">$3,000 MXN</td>
                              <td class="px-4 py-3 text-left">$500 MXN</td>
                              <td class="px-4 py-3 text-left">$2,500 MXN</td>
                              <td class="px-4 py-3 text-left">Cinthia Patricia</td>
                              <td class="px-4 py-3 text-center" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">                                 
                                  <button id='edit-presupuesto-btn' class="bg-transparent border-0 cursor-pointer">
                                      <i class='bx bx-money-withdraw text-lg mx-2'></i>
                                  </button>
                                  <!-- Botones de acción -->
                                  <button id='edit-presupuesto-btn' class="bg-transparent border-0 cursor-pointer">
                                    <i class='bx bx-edit text-lg mx-2'></i>
                                  </button>
                                  <button class="bg-transparent border-0 cursor-pointer">
                                      <i class='bx bx-trash text-lg mx-2' style='color:#3c3c3c'></i>
                                  </button>
                              </td>
                          </tr>
                      </tbody>
                  </table>  
              </div>
              



 <!-- Contenedor de la tabla -->
 <div class="flex overflow-y-auto h-64 mt-6 items-center mb-12 p-4 bg-white shadow-inner w-full" style="box-shadow: inset 0px 3px 6px #0f5aab6c; background-color: #E9EDFF; border-radius: 28px; padding-top: 105px;">
  <!-- Tabla de pacientes -->
  <table class="table-auto w-full border-separate" style="border-spacing: 0px 12px;">
      <!-- Encabezado con borde redondeado -->
      <thead class="bg-white mt-4 rounded-full" style="box-shadow: inset 0px 3px 3px rgba(33, 83, 170, 0.391); background-color: #f8f8ff;">
          <tr>
              <th class="px-4 py-2 text-left rounded-l-full">PACIENTE</th>
              <th class="px-4 py-2 text-left">TRATAMIENTO</th>
              <th class="px-4 py-2 text-left">COSTO</th>
              <th class="px-4 py-2 text-left">ABONO</th>
              <th class="px-4 py-2 text-left">ADEUDO</th>
              <th class="px-4 py-2 text-left">DRA/OBS</th>
              <th class="px-4 py-2 text-center rounded-r-full">OPCIONES</th>
          </tr>
      </thead>

      <!-- Cuerpo de la tabla -->
      <tbody class="bg-gray-100">
          <!-- Fila 1 -->
          <tr class="bg-sky-100 overflow-hidden" style="border-radius: 50px; box-shadow:0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f7f8fe;">
              <td class="px-4 py-3 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;">Andrade Villaseñor</td>
              <td class="px-4 py-3 text-left">Limpieza y Valoración</td>
              <td class="px-4 py-3 text-left">$3,000 MXN</td>
              <td class="px-4 py-3 text-left">$500 MXN</td>
              <td class="px-4 py-3 text-left">$2,500 MXN</td>
              <td class="px-4 py-3 text-left">Cinthia Patricia</td>
              <td class="px-4 py-3 text-center" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">                 
                  <button id='edit-presupuesto-btn' class="bg-transparent border-0 cursor-pointer">
                      <i class='bx bx-money-withdraw text-lg mx-2'></i>
                  </button>
                  <!-- Botones de acción -->
                  <button id='edit-presupuesto-btn' class="bg-transparent border-0 cursor-pointer">
                    <i class='bx bx-edit text-lg mx-2'></i>
                  </button>
                  <button class="bg-transparent border-0 cursor-pointer">
                      <i class='bx bx-trash text-lg mx-2' style='color:#3c3c3c'></i>
                  </button>
              </td>
          </tr>

          <!-- Fila 1 -->
          <tr class="bg-sky-100 overflow-hidden" style="border-radius: 50px; box-shadow:0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f7f8fe;">
            <td class="px-4 py-3 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;">Andrade Villaseñor</td>
            <td class="px-4 py-3 text-left">Limpieza y Valoración</td>
            <td class="px-4 py-3 text-left">$3,000 MXN</td>
            <td class="px-4 py-3 text-left">$500 MXN</td>
            <td class="px-4 py-3 text-left">$2,500 MXN</td>
            <td class="px-4 py-3 text-left">Cinthia Patricia</td>
            <td class="px-4 py-3 text-center" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">                 
                <button id='edit-presupuesto-btn' class="bg-transparent border-0 cursor-pointer">
                    <i class='bx bx-money-withdraw text-lg mx-2'></i>
                </button>
                <!-- Botones de acción -->
                <button id='edit-presupuesto-btn' class="bg-transparent border-0 cursor-pointer">
                  <i class='bx bx-edit text-lg mx-2'></i>
                </button>
                <button class="bg-transparent border-0 cursor-pointer">
                    <i class='bx bx-trash text-lg mx-2' style='color:#3c3c3c'></i>
                </button>
            </td>
        </tr>
      </tbody>
  </table>  
</div>

            