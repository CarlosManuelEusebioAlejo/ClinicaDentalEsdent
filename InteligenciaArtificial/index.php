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
        <div class="h-screen w-64 p-6 flex flex-col justify-between shadow-lg text-gray-800  rounded-r-3xl sidebar"  style="background-color: #f2f2ff;"><div>
                <!-- Logo -->
                <div class="flex flex-col items-center mb-9">
                    <span class="text-sm font-semibold">CLINICA DENTAL</span>
                    <img src="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" alt="" class="w-24 h-24 mb-2" />
                </div>

                <div class="flex justify-center mb-6">
                    <div class="bg-[#E9EDFF] w-24 h-24 flex flex-col items-center justify-center rounded-lg shadow-lg">
                        <i class='bx bx-brain text-2xl'></i>
                        <span class="text-sm font-semibold mt-2">ESDENT IA</span>
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
                    <a href="" class="flex items-center p-2 rounded-full bg-white shadow-inner" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
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
    <div class="flex-1 flex flex-col h-screen mx-4">
      <!-- Título y párrafo alineados a la izquierda -->
      <div class="ml-8 mt-8">
        <!-- Aquí puedes añadir el título y párrafo que desees -->
      </div>
                    
      <!-- Navbar -->
      <nav class="flex items-center justify-between px-4 py-3 text-white rounded-md shadow-md" style="background-color: #b4221b;">
        <div class="text-2xl font-semibold">ESDENT IA</div>
      </nav>
                    
      <!-- Chat Area -->
      <main class="flex-1 overflow-y-auto p-6 space-y-4 flex flex-col-reverse">
        <!-- Messages -->
        <div class="flex flex-col space-y-4">
          <!-- Assistant Message -->
          <div class="self-end max-w-xs p-3 text-gray-800 rounded-full shadow-lg" style="box-shadow: 0px 5px 6px rgba(3, 64, 179, 0.229); background-color: #f2f4fe;">
            <p class="text-sm">Ayudame con este problema</p>
          </div>
          <!-- User Message -->
          <div class="self-start max-w-xs p-3 text-white rounded-full shadow-lg" style="background-color: #b4221b;">
            <p class="text-sm">Claro, en qué te puedo ayudar?</p>
          </div>
        </div>
      </main>
                    
      <!-- Input Area -->
      <footer class="p-4 bg-white border-t-2 border-gray-200 rounded-md mt-auto">
        <div class="flex items-center space-x-4">
          <textarea id="message-input" placeholder="Type a message..." rows="1" class="flex-1 px-4 py-2 bg-gray-100 border-none rounded-full shadow-inner focus:outline-none focus:ring-2 focus:ring-indigo-500 transition resize-none max-h-60" oninput="adjustHeight(this)"></textarea>
          <button class="flex items-center justify-center w-12 h-12 text-white rounded-full shadow-md transform transition duration-200 hover:bg-indigo-700 hover:scale-105 focus:ring-2 focus:ring-indigo-500" style="background-color: #b4221b;">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </button>
        </div>
      </footer>
    </div>
                    
    <script>
      function adjustHeight(el) {
        el.style.height = "auto"; // Reseteamos la altura
        el.style.height = Math.min(el.scrollHeight, 240) + "px"; // Ajustamos la altura al contenido, hasta un máximo de 240px (h-60)
        if (el.scrollHeight > 40) { // Cambia 40 a tu tamaño deseado para rounded-md
          el.classList.remove("rounded-full");
          el.classList.add("rounded-md");
        } else {
          el.classList.remove("rounded-md");
          el.classList.add("rounded-full");
        }
      }
    </script>
</body>
</html>
        