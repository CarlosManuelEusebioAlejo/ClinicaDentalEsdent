<!-- Modal Agregar Limpieza -->
<div id="limpieza-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 590px; width: 600px;">
        <!-- Botón X para cerrar el modal -->
        <button id="close-limpieza-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

        <!-- Título principal -->
        <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
            Agregar Limpieza
        </h1>

        <!-- Formulario para Registrar Limpieza -->
        <form id="AgregarLimpieza" action="Solicitudes/AgregarLimpieza.php" method="POST">
            <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
                <div class="grid grid-cols-2 gap-6">
                    <!-- Input: Búsqueda de Paciente -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">BUSCAR PACIENTE</label>
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="Buscar paciente..."
                               id="paciente-buscar">
                        <input type="hidden" id="idPaciente" name="idPaciente">
                        <input type="hidden" id="Nombre_paciente" name="Nombre_paciente">
                        <input type="hidden" id="Apellido_paciente" name="Apellido_paciente">
                        <ul id="resultado-busqueda" class="absolute bg-white shadow-md rounded-md mt-1 w-full z-10"></ul>
                    </div>

                    <!-- Input: Número de Teléfono -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">NÚMERO DE TELEFONO</label>
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text"
                               placeholder="Número de telefono"
                               id="telefono" 
                               name="telefono" 
                               readonly>
                    </div>

                    <!-- Input: Última Visita -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">ULTIMA VISITA</label>
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="date" 
                               id="Ultima_visita" 
                               name="Ultima_visita">
                    </div>

                    <!-- Input: Siguiente Visita -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">SIGUIENTE VISITA</label>
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="month" 
                               id="Siguiente_visita" 
                               name="Siguiente_visita">
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <!-- Botón de cerrar -->
                <button id="close-limpieza-modal-btn" type="button" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
                    Cerrar
                </button>
                <button id="submit-limpieza" type="submit" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Selecciona el formulario por ID
    const limpiezaForm = document.getElementById('AgregarLimpieza');

    // Verifica si hay un parámetro en la URL que indica éxito o error
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === 'true') {
        Swal.fire({
            title: "¡Buen trabajo!",
            text: "¡La limpieza se ha registrado correctamente!",
            icon: "success",
            timer: 2000,
            showConfirmButton: false
        });
    } 
    // Maneja el envío del formulario
    limpiezaForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío del formulario para mostrar la alerta

        // Muestra la alerta de "Registro en curso"
        Swal.fire({
            title: "¡Registro en curso!",
            text: "La limpieza está siendo registrada. Por favor, espere.",
            icon: "info",
            timerProgressBar: true,
            timer: 1500,
            showConfirmButton: false,
            didOpen: () => {
                Swal.showLoading();
            }
        }).then(() => {
            limpiezaForm.submit(); // Envía el formulario después de mostrar la alerta
        });
    });
});

</script>
<script>
// Validación del formulario antes de enviarlo
document.getElementById('submit-limpieza').addEventListener('click', function(event) {
    const idPaciente = document.getElementById('idPaciente').value;
    const nombrePaciente = document.getElementById('Nombre_paciente').value;
    const apellidoPaciente = document.getElementById('Apellido_paciente').value;
    const ultimaVisita = document.getElementById('Ultima_visita').value;
    const siguienteVisita = document.getElementById('Siguiente_visita').value;

    if (!idPaciente || !nombrePaciente || !apellidoPaciente || !ultimaVisita || !siguienteVisita) {
        alert('Todos los campos son requeridos.');
        event.preventDefault(); // Evita el envío del formulario si faltan campos
    }
});

// Búsqueda de pacientes
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('paciente-buscar');
    const resultsList = document.getElementById('resultado-busqueda');

    searchInput.addEventListener('input', function () {
        const query = searchInput.value.trim();

        if (query.length > 0) {
            fetch('Solicitudes/BuscarPaciente.php?q=' + query)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error en la respuesta del servidor');
                    }
                    return response.json();
                })
                .then(data => {
                    resultsList.innerHTML = '';
                    if (data.length > 0) {
                        data.forEach(paciente => {
                            const li = document.createElement('li');
                            li.classList.add('list-group-item', 'list-group-item-action', 'px-4', 'py-2', 'cursor-pointer');
                            li.textContent = `${paciente.Nombre_paciente} ${paciente.Apellido_paciente} - ${paciente.Telefono}`;
                            li.dataset.id = paciente.idPaciente;
                            li.dataset.telefono = paciente.Telefono;
                            li.dataset.nombre = paciente.Nombre_paciente;
                            li.dataset.apellido = paciente.Apellido_paciente;

                            li.addEventListener('click', function () {
                                document.getElementById('idPaciente').value = this.dataset.id;
                                document.getElementById('paciente-buscar').value = `${this.dataset.nombre} ${this.dataset.apellido}`;
                                document.getElementById('telefono').value = this.dataset.telefono;
                                document.getElementById('Nombre_paciente').value = this.dataset.nombre;
                                document.getElementById('Apellido_paciente').value = this.dataset.apellido;
                                resultsList.innerHTML = '';
                            });
                            resultsList.appendChild(li);
                        });
                    } else {
                        const li = document.createElement('li');
                        li.classList.add('list-group-item', 'px-4', 'py-2');
                        li.textContent = 'No se encontraron resultados';
                        resultsList.appendChild(li);
                    }
                })
                .catch(error => {
                    console.error('Error en la búsqueda:', error);
                });
        } else {
            resultsList.innerHTML = '';
        }
    });
});

// Mostrar modal
const addLimpiezaBtn = document.getElementById('add-limpieza-btn');
const closeLimpiezaModalBtn = document.getElementById('close-limpieza-modal-btn');
const limpiezaModal = document.getElementById('limpieza-modal');
const closeLimpiezaModalX = document.getElementById('close-limpieza-modal-x');

addLimpiezaBtn.addEventListener('click', function() {
    limpiezaModal.classList.remove('hidden');
});

closeLimpiezaModalBtn.addEventListener('click', function() {
    limpiezaModal.classList.add('hidden');
});

closeLimpiezaModalX.addEventListener('click', function() {
    limpiezaModal.classList.add('hidden');
});

</script>