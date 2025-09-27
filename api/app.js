// Función para mostrar el modal
function mostrarModal() {
    const overlay = document.getElementById('popUpOverlay');
    const modal = document.getElementById('popUpBox');
    
    if (overlay && modal) {
        overlay.style.display = 'block';
        modal.style.display = 'block';
        
        // Agregar animación de entrada
        modal.style.opacity = '0';
        modal.style.transform = 'translate(-50%, -50%) scale(0.8)';
        
        setTimeout(() => {
            modal.style.transition = 'all 0.3s ease';
            modal.style.opacity = '1';
            modal.style.transform = 'translate(-50%, -50%) scale(1)';
        }, 10);
    }
}

// Función para cerrar el modal
function cerrarModal() {
    const overlay = document.getElementById('popUpOverlay');
    const modal = document.getElementById('popUpBox');
    
    if (overlay && modal) {
        modal.style.transition = 'all 0.3s ease';
        modal.style.opacity = '0';
        modal.style.transform = 'translate(-50%, -50%) scale(0.8)';
        
        setTimeout(() => {
            overlay.style.display = 'none';
            modal.style.display = 'none';
        }, 300);
    }
}

// Cerrar modal al hacer clic en el overlay
document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.getElementById('popUpOverlay');
    
    if (overlay) {
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                cerrarModal();
            }
        });
    }
    
    });
    
    // Validación adicional del formulario
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const edad = document.getElementById('edad');
            if (edad && (edad.value < 1 || edad.value > 120)) {
                e.preventDefault();
                alert('Por favor, ingresa una edad válida (1-120 años).');
                edad.focus();
                return;
            }
            
            const fechaNacimiento = document.getElementById('fechanacimiento');
            if (fechaNacimiento && fechaNacimiento.value) {
                const fechaSeleccionada = new Date(fechaNacimiento.value);
                const hoy = new Date();
                
                if (fechaSeleccionada > hoy) {
                    e.preventDefault();
                    alert('La fecha de nacimiento no puede ser futura.');
                    fechaNacimiento.focus();
                    return;
                }
            }
        });
    }