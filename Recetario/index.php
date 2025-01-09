<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Clinica</title>
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
                <i class='bx bx-money-withdraw text-2xl'></i>
                <span class="text-xs font-semibold mt-2">PRESUPUESTO</span>
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
                    <a href="/../ClinicaDentalEsdent/Pagos/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                        <i class='bx bx-money text-2xl'></i>
                        <span class="font-semibold mx-4">PAGOS</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/Presupuestos/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                        <i class='bx bx-money-withdraw text-2xl'></i>
                        <span class="font-semibold mx-4">PRESUPUESTOS</span>
                    </a>
                    <a href="/../clinicadentalesdent/Limpiezas/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                        <img src="/..//clinicadentalesdent/Configuraciones/img/Dientelimpieza.png" class="h-6"> 
                        <span class="font-semibold mx-4">LIMPIEZAS</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/ExplicacionVisual/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                        <i class='bx bx-play-circle text-2xl'></i>
                        <span class="font-semibold mx-4">VISUAL</span>
                    </a>
                    <a href="index.php" class="flex items-center p-2 rounded-full bg-white shadow-inner transition duration-300 ease-in-out" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
                        <img src="/..//clinicadentalesdent/Configuraciones/img/Dientelimpieza.png" class="h-6"> 
                        <span class="font-semibold mx-4">RECETARIO</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/Doctores/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                        <i class='bx bx-group text-2xl'></i>
                        <span class="font-semibold mx-4">DOCTORES</span>
                    </a>
                    <!-- <a href="/../ClinicaDentalEsdent/InteligenciaArtificial/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                        <i class='bx bx-brain text-2xl'></i>
                        <span class="font-semibold mx-4">ESDENT IA</span>
                    </a> -->
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
              nav a img {
                margin-left: 20px;
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
          <!-- Botón para regresar a historial -->
          <div class="flex justify-start mb-4">
              <a href="../Historial/" 
                class="text-white px-4 py-2 rounded-full items-center font-semibold hover:bg-red-600" 
                style="background-color: #07b52d; display: flex; align-items: center; width: max-content;">
                  <img src="/..//clinicadentalesdent/Configuraciones/img/regresar.png" 
                      alt="Regresar" 
                      class="h-5 mr-2"> 
                  <span>Regresar</span>
              </a>
          </div>

          <!-- Título -->
          <h1 class="text-4xl font-semibold mb-2">RECETARIO</h1>

          <!-- Párrafo -->
          <p class="text-lg text-gray-500 mb-6">Paciente: Carlos Manuel Eusebio Alejo</p>
      </div>


       <!-- Div centrado -->
<div class="flex flex-1 justify-center items-start">
  <div class="bg-white shadow-lg rounded-lg p-4 w-full max-w-5xl" style="background-color: #f8f8ff;">
      <!-- Contenido original del div -->
      <div class="flex justify-between items-center mt-6 mb-4 w-full">
        <button id="add-presupuesto-btn" class="text-white px-4 py-2 rounded-full shadow-lg" style="background-color: #B4221B;">
          + AGREGAR RECETA
        </button>
        <button id="add-presupuesto-btn" class="text-white px-4 py-2 rounded-full shadow-lg" style="background-color: #B4221B;">
          <i class='bx bx-printer text-lg'></i>
        </button>
      </div>
      

      <!-- Tabla de pacientes -->
    <table class="table-auto w-full border-separate" style="border-spacing: 0px 12px;">
        <!-- Encabezado con borde redondeado -->
        <thead class="bg-white rounded-full"  style=" box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
            <tr>
                <th class="px-4 py-2 text-left">RECETA</th>
                <th class="px-4 py-2 text-center rounded-r-full">OPCIONES</th>
            </tr>
        </thead>
    
        <!-- Cuerpo de la tabla -->
        <tbody id="table-body" class="bg-gray-100">
            <!-- Fila 1 -->
            <tr class="table-row bg-sky-100 mb-2 overflow-hidden " style="border-radius: 50px; box-shadow:0px 5px 6px rgba(3, 64, 179, 0.229); background-color: #e8ecff;">
                <td class="px-4 py-3 text-left">Tomar naproxen 200ml cada 8 horas por 3 dias</td>
                <td class="px-4 py-3 text-center space-x-2" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
                    <!-- Botón que abre el modal -->
                    <button id='edit-presupuesto-btn' class="bg-transparent border-0 cursor-pointer">
                        <i class='bx bx-edit text-lg'></i>
                    </button>
                    
                    <!-- Botón para justificante -->
                    <button class="bg-transparent border-0 cursor-pointer">
                        <i class='bx bx-trash text-lg' style='color:#3c3c3c'></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
      <!-- Controles de paginación -->
      <div class="flex items-center justify-center mt-6 pagination-container">
        <nav aria-label="Pagination" class="flex space-x-4 relative">
          <button 
            id="prev-btn" 
            class="relative flex items-center justify-center w-10 h-10 bg-white/50 border border-gray-300 rounded-full shadow-lg backdrop-blur-lg hover:bg-white/70 disabled:opacity-50 disabled:cursor-not-allowed"
            disabled
          >
            <i class="bx bx-chevron-left text-xl text-gray-700"></i>
            <span class="absolute top-full mt-1 px-2 py-1 text-xs text-white bg-gray-700 rounded-md opacity-0 hover:opacity-100 transition-opacity pointer-events-none">
              Anterior
            </span>
          </button>
          <div id="pagination-numbers" class="flex space-x-2"></div>
          <button 
            id="next-btn" 
            class="relative flex items-center justify-center w-10 h-10 bg-white/50 border border-gray-300 rounded-full shadow-lg backdrop-blur-lg hover:bg-white/70"
          >
            <i class="bx bx-chevron-right text-xl text-gray-700"></i>
            <span class="absolute top-full mt-1 px-2 py-1 text-xs text-white bg-gray-700 rounded-md opacity-0 hover:opacity-100 transition-opacity pointer-events-none">
              Siguiente
            </span>
          </button>
        </nav>
      </div>
  </div>
    <?php 
        include 'Modales/AgregarReceta.php';
        include 'Modales/EditarReceta.php'
    ?> 
  <script>
        let rowsPerPage = 4; // las filas por página en laptop
        let currentPage = 1;

        const tableRows = document.querySelectorAll(".table-row");
        const paginationNumbers = document.getElementById("pagination-numbers");
        const prevBtn = document.getElementById("prev-btn");
        const nextBtn = document.getElementById("next-btn");

        // Es lo que actualiza la cantidad de filas por página dependiendo del tamaño de la pantalla
        function updateRowsPerPage() {
          if (window.innerWidth <= 1208) {
            rowsPerPage = 10; // las filas por página en tablet
          } else {
            rowsPerPage = 4; // las ilas por página en laptop
          }
          renderTable(currentPage);
          renderPagination();
        }

        function renderTable(page) {
          const start = (page - 1) * rowsPerPage;
          const end = start + rowsPerPage;

          tableRows.forEach((row, index) => {
            if (index >= start && index < end) {
              row.style.display = "";
            } else {
              row.style.display = "none";
            }
          });
        }


        function renderPagination() {
          const totalPages = Math.ceil(tableRows.length / rowsPerPage);
          paginationNumbers.innerHTML = "";

          for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement("button");
            button.className = `px-3 py-2 ${i === currentPage ? "bg-blue-900 text-white" : "bg-white text-gray-500"} border border-gray-300 rounded-md hover:bg-gray-100`;
            button.textContent = i;
            button.onclick = () => goToPage(i);
            paginationNumbers.appendChild(button);
          }

          prevBtn.disabled = currentPage === 1;
          nextBtn.disabled = currentPage === totalPages;
        }

        function goToPage(page) {
          currentPage = page;
          renderTable(page);
          renderPagination();
        }

        prevBtn.onclick = () => goToPage(currentPage - 1);
        nextBtn.onclick = () => goToPage(currentPage + 1);

        window.addEventListener('resize', updateRowsPerPage);
        updateRowsPerPage(); 
</script>
</div>
</div>
</body>

  