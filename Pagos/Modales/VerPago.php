
<!-- Modal Ver Pago -->
<div id="ver-pago-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button onclick="closepagosModal()" class="close-modal absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
       
    

    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 40px;">
      <h1 class="text-white text-2xl mr-4">Ver Datos del Pago</h1>
      <button  onclick="openEditarPagoModal(idpagosdebe)" class="edit-pago-btn w-8 h-8 pt-1 bg-white rounded  shadow-md" data-modal-id="editar-pago-modal">
        <i class='bx bx-edit' style='color:#3c3c3c; font-size: 1.5rem; margin-top: 1.2px;'></i>
      </button>
    </div>

    <!-- Contenido del modal -->
    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="grid grid-cols-2 gap-6">
        <!-- Input: Tratamiento -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
          <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                    placeholder="Tratamiento"  name="Tratamiento"
                    disabled>
          </textarea>
        </div>

        <!-- Input: Costo -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">COSTO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                 placeholder="3000"  name="Costo"
                 disabled>
        </div>

        <!-- Input: Abono -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">ABONO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                 placeholder="3000" name="Abono"
                 disabled>
        </div>

        <!-- Input: Abono -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">DOCTOR</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                 placeholder="Carlos Manuel" name="Nombre_doctor"
                 disabled>
        </div>

        <!-- Input: TIPO PAGO -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TIPO PAGO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                placeholder="Efectivo"  name="Tipo_pago"
                disabled>
        </div>

        <!-- Input: FACTURA -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FACTURA</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                placeholder="No" name="Factura"
                disabled>
        </div>

        <!-- Input: Fecha -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FECHA</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
          type="date"  name="fecha_Pago" disabled>
        </div>
      </div>
    </div>

    <!-- Botones del modal -->
    <div class="flex justify-end mt-6">
      <button onclick="closepagosModal()" class="close-ver-modal text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
        Cerrar
      </button>

    </div>
  </div>
</div>

<script>
function VerPago(idpagos) {
    // Mostrar el modal
    const modal = document.getElementById('ver-pago-modal');
    modal.classList.remove('hidden');

    // Realizar solicitud al servidor para obtener los datos del pagos
    fetch('Solicitudes/Mostrar_Pagos_paciente.php', {
        method: 'POST',
        body: new URLSearchParams({ id_pagos: idpagos })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Rellenar los campos del modal con los datos obtenidos
            modal.querySelector('button[onclick^="openEditarPagoModal"]').setAttribute(
    'onclick',
    `openEditarPagoModal(${data.pagos.id_pagos})`
);

            modal.querySelector('textarea[name="Tratamiento"]').value = data.pagos.Tratamiento || '';
            modal.querySelector('input[name="Costo"]').value = data.pagos.Costo || '';
            modal.querySelector('input[name="Abono"]').value = data.pagos.Abono || '';
            modal.querySelector('input[name="Nombre_doctor"]').value = data.pagos.Nombre_doctor || '';
            modal.querySelector('input[name="Tipo_pago"]').value = data.pagos.Tipo_pago || '';
            modal.querySelector('input[name="Factura"]').value = data.pagos.Factura || '';
            modal.querySelector('input[name="fecha_Pago"]').value = data.pagos.fecha_Pago || '';
        } else {
            console.error('Error al obtener los datos del pagos:', data.message);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudieron cargar los datos del pagos.',
            });
        }
    })


}

function closepagosModal() {
    const modal = document.getElementById('ver-pago-modal');
    modal.classList.add('hidden');
}

</script>
