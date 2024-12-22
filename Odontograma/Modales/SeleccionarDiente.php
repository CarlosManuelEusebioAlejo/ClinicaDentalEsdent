<!-- Modal para seleccionar el color y otros datos -->
<div id="seleccionarDienteModal" class="fixed inset-0 z-50 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 820px; width: 600px;">
        <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">Procedimiento</h1>

        <form id="odontogramaForm" action="" method="post">
            <input type="hidden" name="idPaciente" value="<?= $_SESSION['idPaciente'] ?>"> <!-- idPaciente -->
            <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
                <div class="grid grid-cols-2 gap-6">
                    <div class="relative col-span-2 mb-4">
                        <label class="text-xs text-[#3B3636]">COLOR DEL DIENTE</label>
                        <input id="colorPicker" type="color" class="w-full h-10 bg-[#E6ECF8] rounded-md shadow-md">
                    </div>
                    <div class="relative col-span-1">
                        <label class="text-xs text-[#3B3636]">Posición</label>
                        <input id="posicion" type="text" class="w-full h-10 bg-[#E6ECF8] rounded-md text-xs shadow-md text-[#3B3636]" readonly>
                    </div>
                    <div class="relative col-span-1">
                        <label class="text-xs text-[#3B3636]">Número de fila (OD)</label>
                        <input id="numeroFila" type="text" class="w-full h-10" readonly />
                    </div>
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">DIAGNÓSTICO</label>
                        <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20" name="Diagnostico"></textarea>
                    </div>
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
                        <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20" name="Tratamiento"></textarea>
                    </div>
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
                        <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20" name="Observaciones"></textarea>
                    </div>
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">PRESUPUESTO</label>
                        <input type="number" step="0.01" name="Presupuesto" class="w-full h-10 bg-[#E6ECF8] rounded-md text-xs shadow-md text-[#3B3636]" />
                    </div>
                </div>
            </div>
        </form>

        <div class="flex justify-end mt-6">
            <button class="text-white py-2 px-4 mr-2 rounded-full" onclick="closeSeleccionarDienteModal()" style="background-color: #B4221B;">CERRAR</button>
            <button class="text-white py-2 px-4 rounded-full" onclick="guardarColor()" style="background-color: #B4221B;">GUARDAR</button>
        </div>
    </div>
</div>
