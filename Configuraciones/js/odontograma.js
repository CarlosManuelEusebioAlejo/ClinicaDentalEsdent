// Js de modal SeleccionarDiente
document.addEventListener('DOMContentLoaded', () => {
    // Inicializar colores desde LocalStorage
    initializeColors();

    // Asignar eventos de clic a todos los botones del cuadrado
    document.querySelectorAll('.hover-btn, .hover-btn-center').forEach((button, index) => {
        const buttonId = `btn${index + 1}`; // Crear ID único para cada botón
        button.setAttribute('id', buttonId);

        // Asignar evento onclick
        button.addEventListener('click', () => {
            openSeleccionarDienteModal(button, buttonId);
        });
    });
});

let activeButton = null;
let activeButtonId = null;

// Inicializar colores desde LocalStorage
function initializeColors() {
    document.querySelectorAll('.hover-btn, .hover-btn-center').forEach((button, index) => {
        const buttonId = `btn${index + 1}`;
        const color = localStorage.getItem(buttonId);
        if (color) {
            button.style.backgroundColor = color;
        }
    });
}

// Abrir modal y guardar el botón activo
function openSeleccionarDienteModal(button, buttonId) {
    activeButton = button;
    activeButtonId = buttonId;
    document.getElementById('seleccionarDienteModal').classList.remove('hidden');
}

// Cerrar modal
function closeSeleccionarDienteModal() {
    document.getElementById('seleccionarDienteModal').classList.add('hidden');
}

// Guardar el color seleccionado
function guardarColor() {
    const colorPicker = document.getElementById('colorPicker');
    if (activeButton) {
        activeButton.style.backgroundColor = colorPicker.value;
        localStorage.setItem(activeButtonId, colorPicker.value);
    }
    closeSeleccionarDienteModal();
}



// Js de modal Ver Datos del Odontograma
    function openOdontogramaModal() {
        document.getElementById('odontogramaModal').classList.remove('hidden');
    }

    function closeOdontogramaModal() {
        document.getElementById('odontogramaModal').classList.add('hidden');
    }

    // Seleccionar el botón de cerrar "X" y el modal
    const closeOdontogramaModalX = document.getElementById('close-odontograma-modal-x');
    const odontogramaModal = document.getElementById('odontogramaModal');

    // Cerrar el modal al hacer clic en la "X"
    closeOdontogramaModalX.addEventListener('click', function() {
        odontogramaModal.classList.add('hidden');
    });
