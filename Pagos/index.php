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
                <i class='bx bx-money text-3xl'></i>
                <span class="text-sm font-semibold mt-2">PAGOS</span>
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
                <a href="index.php" class="flex items-center p-2 rounded-full bg-white shadow-inner" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
                    <i class='bx bx-money text-2xl'></i>
                    <span class="font-semibold mx-4">PAGOS</span>
                </a>
                <a href="/../ClinicaDentalEsdent/Presupuestos/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                    <i class='bx bx-money-withdraw text-2xl'></i>
                    <span class="font-semibold mx-4">PRESUPUESTOS</span>
                </a>
                <a href="/../ClinicaDentalEsdent/Limpiezas/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                    <img src="/..//ClinicaDentalEsdent/Configuraciones/img/Dientelimpieza.png" class="h-6"> 
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
    <div class="ml-8 mt-8">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center space-x-4">
              <div>
                <h1 class="text-4xl font-semibold">PAGOS</h1>
                <p class="text-lg text-gray-500">5 Pagos Pendientes</p>
              </div>
              <button id="add-presupuesto-btn" class="text-white px-4 py-2 rounded-full shadow-lg" style="background-color: #B4221B;">
                + AGREGAR PAGO
              </button>
          </div>

          <!-- Controles de filtro, botones y buscador alineados a la derecha -->
          <div class="flex items-center space-x-4 mr-8">
            <select id="filter-select" class="neu-button">
              <option value="daily">Diarios</option>
              <option value="weekly">Semanales</option>
              <option value="monthly">Mensuales</option>
          </select>

          <style>
            .neu-button {
              background-color: #e3e5fc;
              border-radius: 50px;
              box-shadow: inset 4px 4px 10px #b3c4de, inset -4px -4px 10px #ffffff;
              color: #4d4d4d;
              cursor: pointer;
              font-size: 18px;  
              padding: 5px 30px;
              transition: all 0.2s ease-in-out;
              border: 2px solid rgb(202, 212, 220);
              -webkit-appearance: none; /* Elimina el estilo por defecto del select */
              -moz-appearance: none; /* Elimina el estilo por defecto del select */
              appearance: none; /* Elimina el estilo por defecto del select */
            }

            .neu-button:hover {
              box-shadow: inset 2px 2px 5px #a7b9d5, inset -2px -2px 5px #ffffff, 2px 2px 5px #94b8da, -2px -2px 5px #ffffff;
            }

            .neu-button:focus {
              outline: none;
              box-shadow: inset 2px 2px 5px #b5bbd0, inset -2px -2px 5px #ffffff, 2px 2px 5px #b9cce2, -2px -2px 5px #ffffff;
            }
          </style>

          <div class="radio-input" style="flex-shrink: 0;">
            <div class="glass">
              <div class="glass-inner"></div>
            </div>
            <div class="selector">
              <div class="choice">
                <div>
                  <input
                    class="choice-circle"
                    checked="true"
                    value="one"
                    name="number-selector"
                    id="one"
                    type="radio"
                  />
                  <div class="ball"></div>
                </div>
                <label for="one" class="choice-name">Todos</label>
              </div>
              <div class="choice">
                <div>
                  <input
                    class="choice-circle"
                    value="two"
                    name="number-selector"
                    id="two"
                    type="radio"
                  />
                  <div class="ball"></div>
                </div>
                <label for="two" class="choice-name">Pendiente</label>
              </div>
              <div class="choice">
                <div>
                  <input
                    class="choice-circle"
                    value="three"
                    name="number-selector"
                    id="three"
                    type="radio"
                  />
                  <div class="ball"></div>
                </div>
                <label for="three" class="choice-name">Pagado</label>
              </div>
            </div>
          </div>
          <style>/* From Uiverse.io by LilaRest */ 
            .radio-input {
              display: flex;
              height: 80px; /* Altura total ajustada */
              align-items: center;
            }
      
            .glass {
              z-index: 2;
              height: 100%; /* Ajusta al contenedor */
              width: 40px; /* Tamaño reducido */
              margin-right: 10px;
              padding: 3px;
              background-color: rgba(184, 193, 206, 0.5);
              border-radius: 15px;
              box-shadow: rgba(81, 81, 127, 0.2) 0px 10px 20px -5px,
                rgba(0, 0, 0, 0.25) 0px 4px 15px -6px,
                rgba(39, 76, 114, 0.26) 0px -1px 3px 0px inset;
              backdrop-filter: blur(3px);
            }
      
            .glass-inner {
              width: 100%;
              height: 100%;
              border-color: rgba(245, 245, 245, 0.45);
              border-width: 3px;
              border-style: solid;
              border-radius: 12px;
            }
      
            .selector {
              display: flex;
              flex-direction: column;
            }
      
            .choice {
              margin: 1px 0; /* Más compacto */
              display: flex;
              align-items: center;
            }
      
            .choice > div {
              position: relative;
              width: 20px; /* Tamaño reducido */
              height: 20px;
              margin-right: 6px;
              z-index: 0;
            }
      
            .choice-circle {
              appearance: none;
              height: 100%;
              width: 100%;
              border-radius: 100%;
              border-width: 3px;
              border-style: solid;
              border-color: rgba(245, 245, 245, 0.45);
              cursor: pointer;
              box-shadow: 0px 0px 8px -4px gray, 0px 0px 8px -6px gray inset;
            }
      
            .ball {
              z-index: 1;
              position: absolute;
              inset: 0px;
              transform: translateX(-40px); /* Ajustado al tamaño */
              box-shadow: rgba(0, 0, 0, 0.17) 0px -4px 4px 0px inset,
                rgba(0, 0, 0, 0.15) 0px -6px 6px 0px inset,
                rgba(0, 0, 0, 0.1) 0px -12px 8px 0px inset, rgba(0, 0, 0, 0.06) 0px 0.5px 0.25px,
                rgba(0, 0, 0, 0.09) 0px 1px 0.5px, rgba(0, 0, 0, 0.09) 0px 2px 1px,
                rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px,
                0px -1px 6px -4px rgba(0, 0, 0, 0.09);
              border-radius: 100%;
              transition: transform 800ms cubic-bezier(1, -0.4, 0, 1.4), background-color 200ms;
              background-color: rgb(232, 232, 232); /* Color inicial */
            }
      
            .choice-circle:checked + .ball {
              transform: translateX(0px);
            }
      
            /* Cambios de color según la selección */
            #two:checked + .ball {
              background-color: rgb(255, 119, 0); /* Color para "Pendiente" */
            }
      
            #three:checked + .ball {
              background-color: rgb(7, 212, 7); /* Color para "Pagado" */
            }

            #prev-date, #next-date {
                font-size: 1.5rem;
                color: #333;
                padding: 0.5rem;
            }

            
              </style>
        </div>
      </div>
    </div>

    
    
      
    <!-- Div centrado -->
<div class="flex flex-1 justify-center items-start">
  <div class="bg-white overflow-y-auto h-[1/5] shadow-lg rounded-lg p-4 w-full max-w-5xl" style="background-color: #f8f8ff; height: 625px;">
<!---------------------SECCIÓN POR DIAS DE PAGOS-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    
        <div id="daily-container" class="filter-container">
            <div id="daily" class="active flex justify-center items-center mb-4">
                <div class="flex items-center justify-center w-full">
                    <button id="prev-date" class="cursor-pointer">
                        <i class="bx bx-chevron-left text-lg"></i>
                    </button>
                    <div class="day-header flex items-center justify-center px-4 py-2 rounded-full shadow-md"
                        style="background-color: #e4e5fa; border-radius: 50px; box-shadow: inset 4px 4px 10px #c4ccd8, inset -6px -6px 10px #ffffff; border: 2px solid rgba(144, 187, 223, 0.279); width: auto; min-width: 200px;">
                        <span id="current-day" class="text-lg font-semibold text-center"></span>
                    </div>
                    <button id="next-date" class="cursor-pointer">
                        <i class="bx bx-chevron-right text-lg"></i>
                    </button>
                </div>
            </div>
        </div>


        <!-- Contenedor para la tabla principal -->
        <div id="pagos-container" class="flex flex-col overflow-y-auto h-60 mt-6 mb-6 p-4 bg-white shadow-inner w-full"
            style="box-shadow: inset 0px 3px 6px #0f5aab6c; background-color: #E9EDFF; border-radius: 28px;">
            <table id="pagos-table" class="table-auto w-full border-separate"
                style="border-spacing: 0px 12px;">
                <thead class="bg-white mt-4 rounded-full"
                    style="box-shadow: inset 0px 3px 3px rgba(33, 83, 170, 0.391); background-color: #f8f8ff;">
                    <tr>
                        <th class="px-4 py-2 text-left rounded-l-full">PACIENTE</th>
                        <th class="px-4 py-2 text-left">TRATAMIENTO</th>
                        <th class="px-4 py-2 text-left">COSTO</th>
                        <th class="px-4 py-2 text-left">ABONO</th>
                        <th class="px-4 py-2 text-center rounded-r-full">OPCIONES</th>
                    </tr>
                </thead>
                <tbody id="pagos-tbody" class="bg-gray-100">
                    <!-- Contenido generado dinámicamente -->
                </tbody>
            </table>
        </div>

        <script>
            // Función para formatear la fecha en el formato deseado
            function formatDate(date) {
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                return date.toLocaleDateString('es-ES', options);
            }

            // Inicialización de la fecha actual
            let currentDate = new Date();

            // Función para actualizar la fecha en el header
            function updateDateDisplay() {
                const dateString = formatDate(currentDate);
                document.getElementById('current-day').textContent = dateString;

                // Convertir la fecha al formato YYYY-MM-DD para enviar al servidor
                const formattedDate = currentDate.toISOString().split('T')[0];

                // Cargar pagos para la fecha seleccionada
                loadPagosByDate(formattedDate);
            }

            // Función para cargar pagos mediante AJAX
            function loadPagosByDate(date) {
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'Solicitudes/ObtenerPagos.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        // Actualizar la tabla con los resultados
                        document.getElementById('pagos-tbody').innerHTML = xhr.responseText;
                    } else {
                        console.error('Error al cargar los pagos');
                    }
                };
                xhr.send('fecha=' + date);
            }

            // Manejo del evento de mover hacia la izquierda (prev)
            document.getElementById('prev-date').addEventListener('click', function () {
                currentDate.setDate(currentDate.getDate() - 1);
                updateDateDisplay();
            });

            // Manejo del evento de mover hacia la derecha (next)
            document.getElementById('next-date').addEventListener('click', function () {
                currentDate.setDate(currentDate.getDate() + 1);
                updateDateDisplay();
            });

            // Inicializar la fecha al cargar la página
            updateDateDisplay();
        </script>
    </div>      
    <!----------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!---------------------SECCIÓN POR SEMANA DE PAGOS-------------------------------------------------------------------------------------------------------------------------------------------->
    
    <div id="weekly-container" class="filter-container hidden">
        <!-- Contenedor que centra el encabezado de día -->
        <div id="weekly" class="flex justify-center items-center">
            <div class="day-header w-40 flex items-center justify-center px-1 py-1 rounded-full shadow-md" style="background-color: #e4e5fa; border-radius: 50px; box-shadow: inset 4px 4px 10px #c4ccd8, inset -6px -6px 10px #ffffff; border: 2px solid rgba(144, 187, 223, 0.279);">
                <span class="text-lg font-semibold">DICIEMBRE</span>
            </div>
        </div>

        <div class="flex flex-col overflow-y-auto h-auto mt-6 mb-6 p-4 bg-white shadow-inner w-full" style="box-shadow: inset 0px 3px 6px #0f5aab6c; background-color: #E9EDFF; border-radius: 28px;">

            <div class="flex justify-center items-center">
                <div class="day-header w-40 flex items-center justify-center px-1 py-1 rounded-full shadow-md" style="background-color: #fbfbfe; border-radius: 50px; box-shadow: inset 4px 4px 4px #c4ccd8, inset -6px -6px 10px #ffffff; border: 2px solid rgba(144, 187, 223, 0.279);">
                    <span class="text-lg font-semibold">SEMANA 1</span>
                </div>
            </div>

            <button class="bg-white mt-2 mb-4 rounded-full mb-4 flex justify-center items-center transition duration-200" 
                  style="box-shadow: 0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f8f8ff; padding: 10px; transition: background-color 0.2s ease;"
                  onmouseover="this.style.backgroundColor='#e0e4f7';" onmouseout="this.style.backgroundColor='#f8f8ff';">
                  <table class="table-auto border-separate text-center" style="border-spacing: 0px 6px;">
                      <thead class="bg-white rounded-full" style="box-shadow: inset 0px 3px 3px rgba(33, 83, 170, 0.391); background-color: #E9EDFF;">
                          <tr>
                              <th class="px-4 py-2 text-left rounded-l-full">EFECTIVO</th>
                              <th class="px-4 py-2 text-left">TRANSFERENCIA</th>
                              <th class="px-4 py-2 text-left">BILLPOCKET</th>
                              <th class="px-4 py-2 text-left">TARJETA</th>
                              <th class="px-4 py-2 text-center rounded-r-full">TOTAL</th>
                          </tr>
                      </thead>
                      <tbody class="bg-gray-100">
                          <tr class="bg-sky-100 overflow-hidden" style="border-radius: 50px; box-shadow: 0px 5px 6px rgba(107, 141, 201, 0.391); background-color: #E9EDFF;">
                              <td class="px-4 py-2 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;">$39,290.00 MXN</td>
                              <td class="px-4 py-2 text-left">$10,400.00 MXN</td>
                              <td class="px-4 py-2 text-left">$11,250.00 MXN</td>
                              <td class="px-4 py-2 text-left">$60,160.00 MXN</td>
                              <td class="px-4 py-2 text-center rounded-r-full">$121,090.00 MXN</td>
                          </tr>
                      </tbody>
                  </table>
            </button>

            <div class="flex justify-center items-center">
                <div class="day-header w-40 flex items-center justify-center px-1 py-1 rounded-full shadow-md" style="background-color: #fbfbfe; border-radius: 50px; box-shadow: inset 4px 4px 4px #c4ccd8, inset -6px -6px 10px #ffffff; border: 2px solid rgba(144, 187, 223, 0.279);">
                    <span class="text-lg font-semibold">SEMANA 2</span>
                </div>
            </div>

            <button class="bg-white mt-2 mb-4 rounded-full mb-4 flex justify-center items-center transition duration-200" 
                  style="box-shadow: 0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f8f8ff; padding: 10px; transition: background-color 0.2s ease;"
                  onmouseover="this.style.backgroundColor='#e0e4f7';" onmouseout="this.style.backgroundColor='#f8f8ff';">
                  <table class="table-auto border-separate text-center" style="border-spacing: 0px 6px;">
                      <thead class="bg-white rounded-full" style="box-shadow: inset 0px 3px 3px rgba(33, 83, 170, 0.391); background-color: #E9EDFF;">
                          <tr>
                              <th class="px-4 py-2 text-left rounded-l-full">EFECTIVO</th>
                              <th class="px-4 py-2 text-left">TRANSFERENCIA</th>
                              <th class="px-4 py-2 text-left">BILLPOCKET</th>
                              <th class="px-4 py-2 text-left">TARJETA</th>
                              <th class="px-4 py-2 text-center rounded-r-full">TOTAL</th>
                          </tr>
                      </thead>
                      <tbody class="bg-gray-100">
                          <tr class="bg-sky-100 overflow-hidden" style="border-radius: 50px; box-shadow: 0px 5px 6px rgba(107, 141, 201, 0.391); background-color: #E9EDFF;">
                              <td class="px-4 py-2 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;">$39,290.00 MXN</td>
                              <td class="px-4 py-2 text-left">$10,400.00 MXN</td>
                              <td class="px-4 py-2 text-left">$11,250.00 MXN</td>
                              <td class="px-4 py-2 text-left">$60,160.00 MXN</td>
                              <td class="px-4 py-2 text-center rounded-r-full">$121,090.00 MXN</td>
                          </tr>
                      </tbody>
                  </table>
            </button>
        </div>
      </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!---------------------SECCIÓN POR AÑOS DE PAGOS------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
      <div id="monthly-container" class="filter-container hidden">
         <!-- Contenedor que centra el encabezado de día -->
         <div id="monthly" class="flex justify-center items-center">
              <div class="day-header w-40 flex items-center justify-center px-1 py-1 rounded-full shadow-md" style="background-color: #e4e5fa; border-radius: 50px; box-shadow: inset 4px 4px 10px #c4ccd8, inset -6px -6px 10px #ffffff; border: 2px solid rgba(144, 187, 223, 0.279);">
                  <span class="text-lg font-semibold">2024</span>
              </div>
         </div>

        <div class="flex flex-col overflow-y-auto h-auto mt-6 mb-6 p-4 bg-white shadow-inner w-full" style="box-shadow: inset 0px 3px 6px #0f5aab6c; background-color: #E9EDFF; border-radius: 28px;">

            <div class="flex justify-center items-center">
                <div class="day-header w-40 flex items-center justify-center px-1 py-1 rounded-full shadow-md" style="background-color: #fbfbfe; border-radius: 50px; box-shadow: inset 4px 4px 4px #c4ccd8, inset -6px -6px 10px #ffffff; border: 2px solid rgba(144, 187, 223, 0.279);">
                    <span class="text-lg font-semibold">ENERO</span>
                </div>
            </div>

            <button class="bg-white mt-2 mb-4 rounded-full mb-4 flex justify-center items-center transition duration-200" 
                  style="box-shadow: 0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f8f8ff; padding: 10px; transition: background-color 0.2s ease;"
                  onmouseover="this.style.backgroundColor='#e0e4f7';" onmouseout="this.style.backgroundColor='#f8f8ff';">
                  <table class="table-auto border-separate text-center" style="border-spacing: 0px 6px;">
                      <thead class="bg-white rounded-full" style="box-shadow: inset 0px 3px 3px rgba(33, 83, 170, 0.391); background-color: #E9EDFF;">
                          <tr>
                              <th class="px-4 py-2 text-left rounded-l-full">EFECTIVO</th>
                              <th class="px-4 py-2 text-left">TRANSFERENCIA</th>
                              <th class="px-4 py-2 text-left">BILLPOCKET</th>
                              <th class="px-4 py-2 text-left">TARJETA</th>
                              <th class="px-4 py-2 text-center rounded-r-full">TOTAL</th>
                          </tr>
                      </thead>
                      <tbody class="bg-gray-100">
                          <tr class="bg-sky-100 overflow-hidden" style="border-radius: 50px; box-shadow: 0px 5px 6px rgba(107, 141, 201, 0.391); background-color: #E9EDFF;">
                              <td class="px-4 py-2 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;">$39,290.00 MXN</td>
                              <td class="px-4 py-2 text-left">$10,400.00 MXN</td>
                              <td class="px-4 py-2 text-left">$11,250.00 MXN</td>
                              <td class="px-4 py-2 text-left">$60,160.00 MXN</td>
                              <td class="px-4 py-2 text-center rounded-r-full">$121,090.00 MXN</td>
                          </tr>
                      </tbody>
                  </table>
            </button>

            <div class="flex justify-center items-center">
                <div class="day-header w-40 flex items-center justify-center px-1 py-1 rounded-full shadow-md" style="background-color: #fbfbfe; border-radius: 50px; box-shadow: inset 4px 4px 4px #c4ccd8, inset -6px -6px 10px #ffffff; border: 2px solid rgba(144, 187, 223, 0.279);">
                    <span class="text-lg font-semibold">FEBRERO</span>
                </div>
            </div>

            <button class="bg-white mt-2 mb-4 rounded-full mb-4 flex justify-center items-center transition duration-200" 
                  style="box-shadow: 0px 5px 6px rgba(29, 67, 133, 0.391); background-color: #f8f8ff; padding: 10px; transition: background-color 0.2s ease;"
                  onmouseover="this.style.backgroundColor='#e0e4f7';" onmouseout="this.style.backgroundColor='#f8f8ff';">
                  <table class="table-auto border-separate text-center" style="border-spacing: 0px 6px;">
                      <thead class="bg-white rounded-full" style="box-shadow: inset 0px 3px 3px rgba(33, 83, 170, 0.391); background-color: #E9EDFF;">
                          <tr>
                              <th class="px-4 py-2 text-left rounded-l-full">EFECTIVO</th>
                              <th class="px-4 py-2 text-left">TRANSFERENCIA</th>
                              <th class="px-4 py-2 text-left">BILLPOCKET</th>
                              <th class="px-4 py-2 text-left">TARJETA</th>
                              <th class="px-4 py-2 text-center rounded-r-full">TOTAL</th>
                          </tr>
                      </thead>
                      <tbody class="bg-gray-100">
                          <tr class="bg-sky-100 overflow-hidden" style="border-radius: 50px; box-shadow: 0px 5px 6px rgba(107, 141, 201, 0.391); background-color: #E9EDFF;">
                              <td class="px-4 py-2 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;">$39,290.00 MXN</td>
                              <td class="px-4 py-2 text-left">$10,400.00 MXN</td>
                              <td class="px-4 py-2 text-left">$11,250.00 MXN</td>
                              <td class="px-4 py-2 text-left">$60,160.00 MXN</td>
                              <td class="px-4 py-2 text-center rounded-r-full">$121,090.00 MXN</td>
                          </tr>
                      </tbody>
                  </table>
            </button>
        </div>
    </div>      
  </div>
</div>
   


<?php
include'Modales/ActualizarPago.php';
include'Modales/AgregarPago.php';
include'Modales/VerPago.php';
include'Modales/EditarPago.php';?>

<script>
    // Script para mostrar y ocultar contenedores basado en el filtro seleccionado
    document.getElementById('filter-select').addEventListener('change', function () {
        const selectedValue = this.value;

        // Ocultar todos los contenedores
        document.querySelectorAll('.filter-container').forEach(container => {
            container.classList.add('hidden');
        });

        // Mostrar el contenedor correspondiente basado en el valor seleccionado
        const targetContainer = document.getElementById(`${selectedValue}-container`);
        if (targetContainer) {
            targetContainer.classList.remove('hidden');
        }
    });
</script>

