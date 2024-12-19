
<!-------------------------------------------------- Modal Actualizar Pago -------------------------------------------------------->
<div id="actualizar-pago-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-hidden relative" style="background-color: #FBFDFF; width: 500px;">
    <!-- Título del Modal -->
    <h1 class="text-white text-center rounded-full mb-6 text-2xl font-semibold" style="background-color: #B4221B;">
      Actualizar Pago
    </h1>

    <!-- Contenedor de contenido -->
    <div class="p-6 rounded-lg shadow-md" style="background-color: #f8f9fc;">
      <!-- Tratamiento -->
      <div class="text-center mb-6">
        <h2 class="text-lg font-semibold">TRATAMIENTO</h2>
        <p class="text-sm text-gray-600">Limpieza y Valoración</p>
      </div>

      <!-- Información de Pago -->
      <div class="grid grid-cols-2 gap-4 text-center mb-6">
        <!-- Abono Total -->
        <div>
          <h3 class="text-lg font-semibold">ABONO TOTAL</h3>
          <p class="text-lg font-semibold">$500</p>
        </div>
        <!-- Adeudo -->
        <div>
          <h3 class="text-lg font-semibold">ADEUDO</h3>
          <p class="text-lg font-semibold">$2,500</p>
        </div>
      </div>

      <!-- Input para Abono -->
      <div class="text-left mb-6">
        <label for="abono-input" class="block text-sm font-semibold mb-2">ABONO</label>
        <input id="abono-input" type="number" placeholder="Ingrese el monto" class="w-full px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" style="box-shadow: inset 0px 3px 6px #5690ce6c; background-color: #f1f3fb;">
      </div>
    </div>

    <!-- Botones -->
    <div class="flex justify-end mt-6">
      <button id="cancelar-actualizar-pago" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
        CANCELAR
      </button>
      <button id="guardar-actualizar-pago" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
        ACTUALIZAR
      </button>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("actualizar-pago-modal");
    const abrirBotones = document.querySelectorAll(".open-actualizar-pago");
    const cancelarBoton = document.getElementById("cancelar-actualizar-pago");
    const guardarBoton = document.getElementById("guardar-actualizar-pago");

    // Abrir modal
    abrirBotones.forEach((boton) => {
      boton.addEventListener("click", function () {
        modal.classList.remove("hidden");
      });
    });

    // Cerrar modal
    cancelarBoton.addEventListener("click", function () {
      modal.classList.add("hidden");
    });
  });
</script>
