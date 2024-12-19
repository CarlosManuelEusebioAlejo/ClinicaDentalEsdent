<!-- Modal para los detalles de la cita -->
<div id="cita-modal" class="fixed inset-0 flex z-50 items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: auto; width: 500px; max-height: 750px;">
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
      <h1 class="text-white text-3xl mr-4">Detalles de la Cita</h1>
      <button id="editar-modal-btn" class="w-8 h-8 pt-1 bg-white rounded shadow-md">
        <i class='bx bx-edit' style='color:#3c3c3c; font-size: 1.5rem; margin-top: 1.2px;'></i>
      </button>
    </div>
    <div id="cita-detalles">
      <!-- Aquí se cargarán los detalles de la cita -->
    </div>
    <div class="flex justify-end space-x-2 mt-4">
      <!-- Botón para salir -->
      <button id="cerrar-modal" class="text-white px-4 py-2 rounded-full shadow-inner" style="background-color: #B4221B;">
        <i class='bx bx-log-out text-2xl'></i>
      </button>

      <!-- Botón para eliminar -->
      <button id="delete-patient" class="text-white px-4 py-2 rounded-full shadow-inner" style="background-color: #6B7280;" onclick="confirmarEliminacionCita()">
        <i class='bx bx-trash text-2xl'></i>
      </button>
    </div>
  </div>
</div>

<script>
  // Función para confirmar la eliminación de la cita
  function confirmarEliminacionCita() {
    Swal.fire({
      title: '¿Estás seguro?',
      text: "¡Esta acción no se puede deshacer!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Sí, eliminar',
      cancelButtonText: 'Cancelar',
    }).then((result) => {
      if (result.isConfirmed) {
        eliminarCita();
      }
    });
  }

  // Función para eliminar la cita
  async function eliminarCita() {
    const idCita = document.getElementById('id_cita').value;
    try {
      const response = await fetch(`Solicitudes/EliminarCita.php?id_cita=${idCita}`, {
        method: 'DELETE',
      });

      if (!response.ok) {
        throw new Error('Error al eliminar la cita');
      }

      // Mostrar la alerta de éxito
      Swal.fire({
        icon: 'success',
        title: 'Cita eliminada',
        text: 'La cita ha sido eliminada exitosamente',
      }).then(() => {
        // Después de que la alerta se cierre, refrescar la página
        window.location.reload();  // Refresca la página
      });

      // Ocultar el modal de detalles
      document.getElementById('cita-modal').classList.add('hidden');

    } catch (error) {
      console.error('Error al eliminar la cita:', error);
      Swal.fire({
        icon: 'error',
        title: 'Hubo un error',
        text: 'Hubo un error al intentar eliminar la cita',
      });
    }
  }
</script>
