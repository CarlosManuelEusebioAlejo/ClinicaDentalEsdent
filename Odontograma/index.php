<?php

// PHP QUE EXTRAE LA INFORMACION DE LOS PACIENTES Y LOS MUESTRA EN LA TABLA
include 'Solicitudes/mostrar_Odontograma.php';
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/Configuraciones/css/odontograma.css">
    <title>ClinicaDentalEsdent</title>
    <link rel="icon" href="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
                /* Cuadrado de Odontograma */
                .line-diagonal {
            position: absolute;
            width: 70%;
            height: 2px;
            background-color: black;
            transition: all 0.3s ease-in-out;
        }


        .line-diagonal.tl-br-top {
            transform: rotate(45deg);
            top: 0;
            left: 4%;
            transform-origin: top left;
        }

        .line-diagonal.tl-br-bottom {
            transform: rotate(-45deg);
            bottom: 0;
            left: 4%;
            transform-origin: bottom left;
        }

        .line-diagonal.tr-bl-top {
            transform: rotate(-45deg);
            top: 0;
            right: 4%;
            transform-origin: top right;
        }

        .line-diagonal.tr-bl-bottom {
            transform: rotate(45deg);
            bottom: 0;
            right: 4%;
            transform-origin: bottom right;
        }
        /* Hover para activar solo la mitad correspondiente */
        .hover-top:hover ~ .line-diagonal.tl-br-top,
        .hover-top:hover ~ .line-diagonal.tr-bl-top {
            background-color: orange;
        }

        .hover-bottom:hover ~ .line-diagonal.tl-br-bottom,
        .hover-bottom:hover ~ .line-diagonal.tr-bl-bottom {
            background-color: orange;
        }

        .hover-left:hover ~ .line-diagonal.tl-br-top,
        .hover-left:hover ~ .line-diagonal.tl-br-bottom {
            background-color: orange;
        }

        .hover-right:hover ~ .line-diagonal.tr-bl-top,
        .hover-right:hover ~ .line-diagonal.tr-bl-bottom {
            background-color: orange;
        }

        /* Botones y clip-path */
        .clip-path-top {
            clip-path: polygon(0% 0%, 100% 0%, 50% 50%);
        }

        .clip-path-bottom {
            clip-path: polygon(0% 100%, 100% 100%, 50% 50%);
        }

        .clip-path-left {
            clip-path: polygon(0% 0%, 0% 100%, 50% 50%);
        }

        .clip-path-right {
            clip-path: polygon(100% 0%, 100% 100%, 50% 50%);
        }

        .hover-btn {
            background-color: white;
            border: 2px solid transparent;
            transition: all 0.3s ease-in-out;
        }

        .hover-btn:hover {
            border-color: orange;
        }

        .hover-btn-center {
            background-color: white;
            border: 2px solid black;
            z-index: 10;
            transition: all 0.3s ease-in-out;
        }

        .hover-btn-center:hover {
            border-color: orange;
            border-width: 2px;
        }

    </style>
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
                    <a href="/../ClinicaDentalEsdent/Pacientes/" class="flex items-center p-2 rounded-full bg-white shadow-inner" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
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
<div class="flex-1 flex flex-col mt-8 mx-4">
    <div class="flex justify-between items-center mx-8">
        <!-- Título y párrafo alineados a la izquierda -->
        <div class="flex flex-col ml-8">
            <h1 class="text-4xl font-semibold">ODONTOGRAMA</h1>
            <p class="text-xl mt-1 mb-10">Paciente: Carlos Manuel Eusebio Alejo</p>
        </div>
        <!-- Botón para regresar a historial -->
        <a href="../Historial/" class="text-white px-4 py-2 rounded-full items-center font-semibold hover:bg-red-600" style="background-color: #07b52d; display: flex; align-items: center;">
            <img src="/..//ClinicaDentalEsdent/Configuraciones/img/regresar.png" alt="Regresar" class="h-5 mr-2"> 
            <span>Regresar</span>
        </a>

        
    </div>

       <!-- Div centrado -->
       <div class="flex flex-1 w-full justify-center items-start">
        <div class="bg-white shadow-lg rounded-lg p-4 w-full max-w-5xl" style="background-color: #f8f8ff;"  style="height: 700px;">
            
  <!-- <div id="control" class="w-full max-w-md px-4 py-6 bg-white rounded-lg shadow-md flex items-center space-x-2">
        <!-- Botón de mouse --
        <input type="radio" id="mouse" name="herramienta" class="hidden" checked>
        <label for="mouse" id="mouseBtn" class="flex items-center justify-center w-12 h-10 bg-gray-400 rounded-md hover:bg-gray-500 cursor-pointer">
            <i class='bx bx-mouse text-xl text-white'></i>
        </label>

        <!-- Contenedor de herramientas oculto --
        <div id="toolsContainer" class="hidden flex items-center space-x-2">
            <!-- Botón de pincel --
            <input type="radio" id="pincel" name="herramienta" class="hidden">
            <label for="pincel" class="flex items-center justify-center w-12 h-10 bg-gray-500 hover:bg-gray-600 cursor-pointer">
                <i class='bx bx-pencil text-xl text-white'></i>
            </label>

            <!-- Botón de borrador --
            <input type="radio" id="borracha" name="herramienta" class="hidden">
            <label for="borracha" class="flex items-center justify-center w-12 h-10 bg-gray-500 hover:bg-gray-600 cursor-pointer">
                <i class='bx bx-eraser text-xl text-white'></i>
            </label>

            <!-- Menú desplegable de configuración --
            <div class="relative">
                <button id="configBtn" class="flex items-center justify-center w-12 h-10 bg-gray-400 hover:bg-gray-500 cursor-pointer">
                    <i class='bx bx-chevron-down text-xl text-white'></i>
                </button>
                <div id="configMenu" class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded-md hidden">
                    <div class="p-2">
                        <label for="tamanhoPincel" class="block text-sm font-medium text-gray-700">Tamaño</label>
                        <input type="range" id="tamanhoPincel" min="1" max="10" class="w-full">
                    </div>
                    <div class="p-2">
                        <label for="corPincel" class="block text-sm font-medium text-gray-700">Color</label>
                        <input type="color" id="corPincel" class="w-full">
                    </div>
                </div>
            </div>

            <!-- Botón de guardar --
            <button id="saveBtn" class="flex items-center justify-center w-12 h-10 bg-gray-400 hover:bg-gray-500 cursor-pointer">
                <i class='bx bx-save text-xl text-white'></i>
            </button>
        </div>
    </div>--> 

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mouseBtn = document.getElementById('mouseBtn');
            const toolsContainer = document.getElementById('toolsContainer');
            const configBtn = document.getElementById('configBtn');
            const configMenu = document.getElementById('configMenu');

            let currentTool = 'mouse';
            let isDrawing = false;
            let lastX = 0;
            let lastY = 0;
            let brushColor = '#000000';
            let brushSize = 2;

            // Alternar visibilidad de las herramientas al presionar el botón del mouse
            mouseBtn.addEventListener('click', () => {
                toolsContainer.classList.toggle('hidden');
            });

            // Alternar visibilidad del menú de configuración
            configBtn.addEventListener('click', () => {
                configMenu.classList.toggle('hidden');
            });

            // Cerrar el menú de configuración al hacer clic fuera
            document.addEventListener('click', (event) => {
                if (!configBtn.contains(event.target) && !configMenu.contains(event.target)) {
                    configMenu.classList.add('hidden');
                }
            });

            // Cambiar herramienta seleccionada
            document.querySelectorAll('input[name="herramienta"]').forEach(input => {
                input.addEventListener('change', (e) => {
                    currentTool = e.target.id;
                });
            });

            // Cambiar tamaño del pincel
            document.getElementById('tamanhoPincel').addEventListener('input', (e) => {
                brushSize = e.target.value;
            });

            // Cambiar color del pincel
            document.getElementById('corPincel').addEventListener('input', (e) => {
                brushColor = e.target.value;
            });

            // Dibujar directamente sobre el body
            document.body.addEventListener('mousedown', (e) => {
                if (currentTool === 'pincel' || currentTool === 'borracha') {
                    isDrawing = true;
                    lastX = e.clientX;
                    lastY = e.clientY;
                }
            });

            document.body.addEventListener('mousemove', (e) => {
                if (!isDrawing) return;
                if (currentTool === 'pincel') {
                    const line = document.createElement('div');
                    line.className = 'line';
                    line.style.left = `${Math.min(lastX, e.clientX)}px`;
                    line.style.top = `${Math.min(lastY, e.clientY)}px`;
                    line.style.width = `${Math.abs(e.clientX - lastX)}px`;
                    line.style.height = `${brushSize}px`;
                    line.style.backgroundColor = brushColor;
                    document.body.appendChild(line);
                    lastX = e.clientX;
                    lastY = e.clientY;
                } else if (currentTool === 'borracha') {
                    const elements = document.elementsFromPoint(e.clientX, e.clientY);
                    elements.forEach(el => {
                        if (el.classList.contains('line')) {
                            el.remove();
                        }
                    });
                }
            });

            document.body.addEventListener('mouseup', () => {
                isDrawing = false;
            });

            document.body.addEventListener('mouseout', () => {
                isDrawing = false;
            });
        });
    </script>





<div class=" flex flex-col items-center  ">
    <div class="flex gap-4">
        <!-- Cuadrado 1 -->
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <!-- Duplica este bloque para otros cuadrados -->
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>
        <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
            <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
            <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
            <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
            <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
            <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
            <div class="line-diagonal tl-br-top"></div>
            <div class="line-diagonal tl-br-bottom"></div>
            <div class="line-diagonal tr-bl-top"></div>
            <div class="line-diagonal tr-bl-bottom"></div>
        </div>

    </div>
    
    <!-- Contenedor principal -->
<div class="flex flex-col gap-4 p-4">
    <!-- Primera fila de números -->
    <div class="flex gap-4 justify-center">
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">18</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">17</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">16</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">15</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">14</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">13</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">12</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">11</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">21</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">22</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">23</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">24</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">25</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">26</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">27</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">28</div>
    </div>
    <!-- Segunda fila de números -->
    <div class="flex gap-4 justify-center">
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">48</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">47</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">46</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">45</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">44</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">43</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">42</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">41</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">31</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">32</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">33</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">34</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">35</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">36</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">37</div>
        <div class="w-10 h-7 flex items-center justify-center bg-gray-200 border border-gray-300 rounded">38</div>
    </div>
</div>

    

<div class="flex gap-4">
    <!-- Cuadrado 1 -->
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <!-- Duplica este bloque para otros cuadrados -->
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
    <div class="relative" style="width: 40px; height: 40px; border: 2px solid black;">
        <button class="hover-btn hover-top absolute top-0 left-0 w-full h-full clip-path-top"></button>
        <button class="hover-btn hover-bottom absolute bottom-0 left-0 w-full h-full clip-path-bottom"></button>
        <button class="hover-btn hover-left absolute top-0 left-0 w-full h-full clip-path-left"></button>
        <button class="hover-btn hover-right absolute top-0 right-0 w-full h-full clip-path-right"></button>
        <button class="hover-btn-center absolute" style="width: 20px; height: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%);"></button>
        <div class="line-diagonal tl-br-top"></div>
        <div class="line-diagonal tl-br-bottom"></div>
        <div class="line-diagonal tr-bl-top"></div>
        <div class="line-diagonal tr-bl-bottom"></div>
    </div>
</div>

</div>


    <!-- Tabla de pacientes -->
    <table class="table-auto w-full border-separate" style="border-spacing: 0px 12px;">
        <!-- Encabezado con margen inferior -->
        <thead class="bg-white rounded-full"  style=" box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
          <tr>
              <th class="px-4 py-2 text-left rounded-l-full">OD</th>
              <th class="px-4 py-2 text-left">DIAGNOSTICO</th>
              <th class="px-4 py-2 text-left">TRATAMIENTO</th>
              <th class="px-4 py-2 text-center rounded-r-full">OPCIONES</th>
          </tr>
      </thead>

      <tbody class="bg-gray-100">
      <?php foreach ($odontogramas as $odontograma): ?>
          <!-- Fila 1 -->
        <div class="mb-2">
          <tr class="bg-sky-100 overflow-hidden " style="border-radius: 50px; box-shadow:0px 5px 6px rgba(3, 64, 179, 0.229); background-color: #e8ecff;">
              <td class="px-4 py-3 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;"><?= $odontograma['OD'] ?></td>
              <td class="px-4 py-3 text-left"><?= $odontograma['Diagnostico'] ?></td>
              <td class="px-4 py-3 text-left"><?= $odontograma['Tratamiento'] ?></td>
              <td class="px-4 py-2 text-center" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
                <!-- Botón para abrir el modal de ver datos del odontograma -->
                <button class="bg-transparent border-0 cursor-pointer" onclick="openOdontogramaModal(<?= $odontograma['id_odontograma'] ?>)">
                    <i class='bx bx-id-card text-lg mx-2'></i>
                </button>
                <!-- Botón para BORRAR -->
                <button class="bg-transparent border-0 cursor-pointer" onclick="deleteEntry(<?= $odontograma['id_odontograma'] ?>)">
                    <i class='bx bx-trash text-lg mx-2' style='color:#3c3c3c'></i>
                </button>
            </td>
          </tr>

        </div>
        
        <?php endforeach; ?>
  

      </tbody>
  </table>


<?php
include'Modales/SeleccionarDiente.php';
include'Modales/VerDatos.php';
?>
<script src="../Configuraciones/js/odontograma.js"></script>
<script src="../Configuraciones/js/pincel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
          