function actualizarReloj() {
    const ahora = new Date();

    const fecha = ahora.toLocaleDateString('es-ES', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric'
    });

    const hora = ahora.toLocaleTimeString('es-ES', {
        hour12: false
    });

    document.getElementById('reloj').innerHTML = `📅 ${fecha} ⏰ ${hora}`;
}

// Actualiza cada segundo
setInterval(actualizarReloj, 1000);

// Ejecuta apenas carga la página
actualizarReloj();
