<!------------------------------------------------------------- Modal Agregar Presupuesto -------------------------------------------------------------------->
<div id="presupuesto-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button id="close-presupuesto-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <!-- Título principal -->
    <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
        Agregar Presupuesto
    </h1>

    <form id="presupuesto-form"  method="POST">
      <!-- Sección de Datos de Presupuesto -->
      <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
          <div class="grid grid-cols-2 gap-6">
              <!-- Input: Tratamiento -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
                  <textarea name="Tratamiento" 
                            class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                            placeholder="Tratamiento"></textarea>
              </div>

              <!-- Input: Observaciones -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
                  <textarea name="Observaciones" 
                            class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                            placeholder="Observaciones"></textarea>
              </div>

              <!-- Input: Costo -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">COSTO</label>
                  <input name="Costo" 
                         id="inputCosto" 
                         class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                         type="text" 
                         placeholder="$ Costo">
              </div>

              <!-- Input: Fecha -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">FECHA</label>
                  <input name="Fecha" 
                        id="startDateAdd" 
                        class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                        type="date" 
                        placeholder="Fecha de la próxima cita">
              </div>

              <!-- Input: Válido hasta -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">VÁLIDO HASTA</label>
                  <input name="Valido_hasta" 
                         id="endDateAdd" 
                         class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                         type="date" 
                         placeholder="Válido hasta">
              </div>
          </div>
      </div>

      <div class="flex justify-end mt-6">
          <button id="close-presupuesto-modal-btn" type="button" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
              Cerrar
          </button>
          <button id="submit-presupuesto" type="submit" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
              Guardar
          </button>
      </div>
    </form>
  </div>
</div>

<!-- Agrega SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('presupuesto-form').addEventListener('submit', async function (event) {
    event.preventDefault(); // Detener el envío inmediato del formulario

    // Mostrar alerta de carga inicial
    Swal.fire({
        title: 'Registrando Presupuesto',
        text: 'Por favor, espera...',
        icon: 'info',
        showConfirmButton: false,
        allowOutsideClick: false
    });

    // Capturar datos del formulario
    const formData = new FormData(event.target);

    try {
        // Enviar los datos al servidor usando Fetch
        const response = await fetch('Solicitudes/AgregarPresupuesto.php', {
            method: 'POST',
            body: formData
        });

        // Analizar la respuesta JSON del servidor
        const result = await response.json();

        if (result.status === 'success') {
            // Mostrar alerta de éxito
            Swal.fire({
                icon: 'success',
                title: '¡Presupuesto registrado!',
                text: result.message,
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                location.reload(); // Refrescar la página después de cerrar la alerta
            });
        } else {
            // Mostrar alerta de error
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: result.message
            });
        }
    } catch (error) {
        console.error('Error:', error);
        // Mostrar alerta de error general
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un problema al procesar tu solicitud. Por favor, inténtalo nuevamente.'
        });
    }
});
</script>
  
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addPresupuestoBtn = document.getElementById('add-presupuesto-btn');
        const closePresupuestoModalBtn = document.getElementById('close-presupuesto-modal-btn');
        const closePresupuestoModalX = document.getElementById('close-presupuesto-modal-x');
        const presupuestoModal = document.getElementById('presupuesto-modal');

        // Mostrar el modal al hacer clic en "AGREGAR PRESUPUESTO"
        addPresupuestoBtn?.addEventListener('click', function () {
            presupuestoModal.classList.remove('hidden');
        });

        // Cerrar el modal al hacer clic en "Cerrar"
        closePresupuestoModalBtn?.addEventListener('click', function () {
            presupuestoModal.classList.add('hidden');
        });

        // Cerrar el modal al hacer clic en la "X"
        closePresupuestoModalX?.addEventListener('click', function () {
            presupuestoModal.classList.add('hidden');
        });
    });
</script>

<!----------------------- Formato para mostrar comas en los números ---------------->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const inputCosto = document.getElementById('inputCosto'); // Input del costo

    // Formatear con comas mientras el usuario escribe
    inputCosto.addEventListener('input', function () {
        const value = this.value.replace(/,/g, ''); // Quitar comas
        if (!isNaN(value) && value !== '') {
            this.value = Number(value).toLocaleString('en-US'); // Agregar comas
        } else {
            this.value = ''; // Limpiar si no es válido
        }
    });

    // Validar el valor al perder el enfoque
    inputCosto.addEventListener('blur', function () {
        const value = this.value.replace(/,/g, '');
        if (isNaN(value) || value === '') {
            this.value = ''; // Restaurar si el valor no es válido
        } else {
            this.value = Number(value).toLocaleString('en-US'); // Mantener formato válido
        }
    });

    // Limpiar comas antes de enviar el formulario
    const form = document.getElementById('presupuesto-form');
    form.addEventListener('submit', function () {
        inputCosto.value = inputCosto.value.replace(/,/g, ''); // Eliminar comas antes de enviar
    });
});
</script>
<!----------------------------------------------------------------------------------->