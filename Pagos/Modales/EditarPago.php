
<!-- Modal Editar Pago -->
<div id="editar-pago-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button class="close-modal absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
       
    <!-- Título principal -->
    <h1 class="text-white text-center rounded-full mb-8 text-2xl" style="background-color: #B4221B; height: 40px;">
      Editar Pago
    </h1>

    <!-- Contenido del modal -->
    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="grid grid-cols-2 gap-6">
        <!-- Input: Tratamiento -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
          <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Tratamiento"></textarea>
        </div>

        <!-- Input: Costo -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">COSTO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Costo">
        </div>

        <!-- Input: Abono -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">ABONO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Abono">
        </div>

        <!-- Select: Tipo de Pago -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">DOCTOR</label>
          <select class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
            <option disabled selected>Seleccione doctor</option>
            <option value="">Carlos Manuel Eusebio Alejo</option>
            <option value="">Gonzalo lopez perez</option>
            <option value="">Lopez doriga</option>
          </select>
        </div>

        <!-- Select: Tipo pago -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TIPO</label>
          <select name="Tipo_pago" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
            <option disabled selected>Selecciona un tipo de pago</option>
            <option value="efectivo">Efectivo</option>
            <option value="transferencia">Transferencia</option>
            <option value="billpocket">Billpocket</option>
            <option value="tarjeta">Tarjeta</option>
          </select>
        </div>

        <!-- Select: Factura -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FACTURA</label>
          <select class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
            <option disabled selected>¿Desea factura?</option>
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <!-- Input: Fecha -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FECHA</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date">
        </div>
      </div>
    </div>

    <!-- Botones del modal -->
    <div class="flex justify-end mt-6">
      <button class="close-modal text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
        Cerrar
      </button>
      <button class="submit-editar-pago text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
        Guardar
      </button>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const modals = document.querySelectorAll("#editar-pago-modal");
    const editButtons = document.querySelectorAll(".edit-pago-btn");
    const closeButtons = document.querySelectorAll(".close-modal");

    // Abrir modal al hacer clic en un botón de editar
    editButtons.forEach(button => {
      button.addEventListener("click", function () {
        const modalId = this.getAttribute("data-modal-id");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
      });
    });

    // Cerrar modal al hacer clic en los botones de cerrar
    closeButtons.forEach(button => {
      button.addEventListener("click", function () {
        const modal = this.closest("#editar-pago-modal");
        modal.classList.add("hidden");
      });
    });

    // Cerrar modal al hacer clic fuera de su contenido
    modals.forEach(modal => {
      modal.addEventListener("click", function (event) {
        if (event.target === modal) {
          modal.classList.add("hidden");
        }
      });
    });
  });
</script>

