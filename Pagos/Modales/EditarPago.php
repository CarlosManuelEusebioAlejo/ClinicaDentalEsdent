<!-- Modal Editar Pago -->
<div id="editar-pago-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button onclick="closeEditarPagoModal()" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
    
    <!-- Título principal -->
    <h1 class="text-white text-center rounded-full mb-8 text-2xl" style="background-color: #B4221B; height: 40px;">
      Editar Pago
    </h1>

    <!-- Contenido del modal -->
    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <form id="form-editar-pago" method="POST" onsubmit="guardarEditarPago(event)">
        <input id="iddelpago" type="hidden" name="id_pagos">
        <div class="grid grid-cols-2 gap-6">
          <!-- Input: Tratamiento -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
            <textarea id="tratamiento-editar" name="Tratamiento" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Tratamiento"></textarea>
          </div>

          <!-- Input: Costo -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">COSTO</label>
            <input id="costo-editar" name="Costo" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Costo">
          </div>

          <!-- Input: Abono -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">ABONO</label>
            <input id="abono-editar" name="Abono" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Abono">
          </div>

          <!-- Select: Doctor -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">DOCTOR</label>
            <select id="doctor-editar" name="Doctor" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
              <!-- Aquí irán los doctores -->
            </select>
          </div>

          <!-- Select: Tipo de Pago -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">TIPO</label>
            <select id="tipo-pago-editar" name="Tipo" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
              <option disabled selected>Selecciona un tipo de pago</option>
              <option value="Efectivo">Efectivo</option>
              <option value="Transferencia">Transferencia</option>
              <option value="Billpocket">Billpocket</option>
              <option value="Tarjeta">Tarjeta</option>
            </select>
          </div>

          <!-- Select: Factura -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">FACTURA</label>
            <select id="factura-editar" name="Factura" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
              <option disabled selected>¿Desea factura?</option>
              <option value="Si">Sí</option>
              <option value="No">No</option>
            </select>
          </div>

          <!-- Input: Fecha -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">FECHA</label>
            <input id="fecha-editar" name="Fecha" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date">
          </div>
        </div>

        <!-- Botones del modal -->
        <div class="flex justify-end mt-6">
          <button type="button" onclick="closeEditarPagoModal()" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
            Cerrar
          </button>
          <button type="submit" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
            Guardar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
function openEditarPagoModal(idPago) {
    const modal = document.getElementById('editar-pago-modal');
    modal.classList.remove('hidden');

    // Obtener datos del pago y la lista de doctores del servidor
    fetch('Solicitudes/Mostrar_Pagos_paciente.php', {
        method: 'POST',
        body: new URLSearchParams({ id_pagos: idPago })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Rellenar campos del pago
            document.getElementById('iddelpago').value = data.pagos.id_pagos;
            document.getElementById('tratamiento-editar').value = data.pagos.Tratamiento;
            document.getElementById('costo-editar').value = data.pagos.Costo;
            document.getElementById('abono-editar').value = data.pagos.Abono;
            document.getElementById('fecha-editar').value = data.pagos.fecha_Pago;

            // Cargar los doctores y preseleccionar el actual
            fetch('Solicitudes/Obtener_Doctores.php')
            .then(response => response.json())
            .then(doctores => {
                const doctorSelect = document.getElementById('doctor-editar');
                doctorSelect.innerHTML = ''; // Limpiar opciones existentes
                doctores.forEach(doctor => {
                    const option = document.createElement('option');
                    option.value = doctor.id_doctor;
                    option.textContent = doctor.Nombre_doctor;
                    if (doctor.id_doctor == data.pagos.id_doctor) {
                        option.selected = true; // Preseleccionar el doctor actual
                    }
                    doctorSelect.appendChild(option);
                });
            });

            // Preseleccionar el tipo de pago
            const tipoPagoSelect = document.getElementById('tipo-pago-editar');
            Array.from(tipoPagoSelect.options).forEach(option => {
                if (option.value === data.pagos.Tipo_pago) {
                    option.selected = true;
                }
            });

            // Preseleccionar el estado de factura
            const facturaSelect = document.getElementById('factura-editar');
            Array.from(facturaSelect.options).forEach(option => {
                if (option.value === data.pagos.Factura) {
                    option.selected = true;
                }
            });
        } else {
            console.error('Error al cargar datos del pago:', data.message);
        }
    });
}

function closeEditarPagoModal() {
    document.getElementById('editar-pago-modal').classList.add('hidden');
}

function guardarEditarPago(event) { 
    event.preventDefault();  // Prevenir el comportamiento predeterminado del formulario

    // Recoger los datos del formulario
    const form = document.getElementById('form-editar-pago');
    const formData = new FormData(form);

    // Convertir los datos del formulario en un objeto
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });

    // Confirmación antes de proceder con la actualización
    Swal.fire({
        icon: 'warning',
        title: '¿Estás seguro?',
        text: '¿Estás seguro de que deseas actualizar el pago con los nuevos datos?',
        showCancelButton: true,
        confirmButtonText: 'Sí, actualizar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Realizar la solicitud al servidor con JSON
            fetch('Solicitudes/EditarPago.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data), // Enviar los datos como JSON
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Mostrar un SweetAlert de éxito
                    Swal.fire({
                        icon: 'success',
                        title: '¡Pago actualizado correctamente!',
                        text: 'El pago ha sido actualizado exitosamente. Los cambios se reflejarán en breve.',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        closeEditarPagoModal(); // Cerrar el modal después de guardar
                        location.reload(); // Refrescar la página para ver los cambios
                    });
                } else {
                    // Mostrar un SweetAlert de error
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al actualizar el pago.',
                        text: data.message || 'Ocurrió un error al intentar actualizar el pago. Por favor, inténtelo nuevamente.'
                    });
                }
            })
            .catch(error => {
                // Mostrar un SweetAlert en caso de error en la solicitud
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un problema con la conexión al servidor. Intente de nuevo más tarde.'
                });
            });
        }
    });
}


function closeEditarPagoModal() {
    document.getElementById('editar-pago-modal').classList.add('hidden');
}

</script>