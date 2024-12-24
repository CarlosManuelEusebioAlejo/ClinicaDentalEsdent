<!-------------------------------------------------- Modal Actualizar Pago -------------------------------------------------------->
<div id="actualizar-pago-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-hidden relative" style="background-color: #FBFDFF; width: 500px;">
    <!-- Título del Modal -->
    <h1 class="text-white text-center rounded-full mb-6 text-2xl font-semibold" style="background-color: #B4221B;">
      Actualizar Pago
    </h1>
    <!-- Formulario de Actualización -->
    <form id="form-actualizar-pago" onsubmit="guardarActualizarPago(event)">
    <!-- Contenedor de contenido -->
    <div class="p-6 rounded-lg shadow-md" style="background-color: #f8f9fc;">
      <!-- Tratamiento -->
      <div class="text-center mb-6">
        <h2 class="text-lg font-semibold" id="tratamiento-info">TRATAMIENTO</h2>
        <p class="text-sm text-gray-600" id="descripcion-tratamiento">Limpieza y Valoración</p>
      </div>

      <!-- Información de Pago -->
      <div class="grid grid-cols-2 gap-4 text-center mb-6">
        <!-- Costo -->
        <div>
          <h3 class="text-lg font-semibold">COSTO</h3>
          <p id="costo-pago" class="text-lg font-semibold">$500</p>
        </div>
        <!-- Abono -->
        <div>
          <h3 class="text-lg font-semibold">ABONO</h3>
          <p id="abono-pago" class="text-lg font-semibold">$500</p>
        </div>
        <!-- Adeudo -->
        <div>
          <h3 class="text-lg font-semibold">ADEUDO</h3>
          <p id="adeudo-pago" class="text-lg font-semibold">$2,500</p>
        </div>
      </div>

      <!-- Input para Abono -->
      <div class="text-left mb-6">
        <label for="abono-input" class="block text-sm font-semibold mb-2">ABONO</label>
        <input id="abono-input" type="number" placeholder="Ingrese el monto" class="w-full px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" style="box-shadow: inset 0px 3px 6px #5690ce6c; background-color: #f1f3fb;">
      </div>
    </div>

      <!-- Campo oculto para el ID del pago -->
      <input type="hidden" id="id_pago" name="id_pagos">
      <div class="flex justify-end mt-6">
        <button id="cancelar-actualizar-pago" type="button" onclick="CancelarlaActualizacion()" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
          CANCELAR
        </button>
        <button type="submit" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
          ACTUALIZAR
        </button>
      </div>
    </form>
  </div>
</div>

<script>
function ActualizarPagoAdeudo(idPago) {
    const modal = document.getElementById('actualizar-pago-modal');
    modal.classList.remove('hidden');

    // Obtener datos del pago desde el servidor
    fetch('Solicitudes/Mostrar_Pagos_paciente.php', {
        method: 'POST',
        body: new URLSearchParams({ id_pagos: idPago })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Rellenar campos del pago
            document.getElementById('descripcion-tratamiento').textContent = data.pagos.Tratamiento; // Descripción del tratamiento
            document.getElementById('costo-pago').textContent = `$${data.pagos.Costo}`; // Costo
            document.getElementById('abono-pago').textContent = `$${data.pagos.Abono}`; // Abono
            document.getElementById('adeudo-pago').textContent = `$${data.pagos.Adeudo}`; // Adeudo

            // Pre-llenar el campo de abono
            document.getElementById('abono-input').value = data.pagos.Abono;

            // Asignar el ID de pago al campo oculto
            document.getElementById('id_pago').value = idPago;
        } else {
            console.error('Error al cargar los datos del pago:', data.message);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudieron cargar los datos del pago. Intente de nuevo.'
            });
        }
    })
    .catch(error => {
        console.error('Error al realizar la solicitud:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un problema con la conexión al servidor. Intente de nuevo más tarde.'
        });
    });
}

function closeActualizarPagoModal() {
    document.getElementById('actualizar-pago-modal').classList.add('hidden');
}

function guardarActualizarPago(event) { 
    event.preventDefault();  // Prevenir el comportamiento predeterminado del formulario

    // Recoger el valor del abono
    const abonoInput = document.getElementById('abono-input');
    const abono = parseFloat(abonoInput.value) || 0;

    // Validar si el abono es válido
    if (abono <= 0 || isNaN(abono)) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Por favor, ingrese un monto válido para el abono.'
        });
        return;
    }

    // Obtener el adeudo actual
    const adeudoActual = parseFloat(document.getElementById('adeudo-pago').textContent.replace('$', '').replace(',', ''));
    const nuevoAdeudo = adeudoActual - abono;

    // Verificar que el nuevo adeudo no supere el costo
    if (nuevoAdeudo < 0) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'El abono no puede ser mayor que el adeudo.'
        });
        return;
    }

    // Confirmación antes de continuar con la actualización
    Swal.fire({
        icon: 'warning',
        title: '¿Estás seguro?',
        text: '¿Estás seguro de que deseas actualizar el pago con el nuevo abono?',
        showCancelButton: true,
        confirmButtonText: 'Sí, actualizar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Actualizar la UI con el nuevo adeudo
            document.getElementById('adeudo-pago').textContent = `$${nuevoAdeudo.toFixed(2)}`;

            // Obtener el ID de pago desde el campo oculto
            const idPago = document.getElementById('id_pago').value;

            // Enviar los datos al servidor para actualizar el pago
            fetch('Solicitudes/ActualizarPago.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id_pago: idPago, abono: abono, nuevo_adeudo: nuevoAdeudo }) // Enviar los datos como JSON
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
                        closeActualizarPagoModal(); // Cerrar el modal después de guardar
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

function CancelarlaActualizacion() {
    document.getElementById('actualizar-pago-modal').classList.add('hidden');
}
</script>
