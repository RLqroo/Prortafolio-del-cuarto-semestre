/**
 * Práctica 20: Aplicación de Prompt y Alert
 * Esta función se llama cuando se presiona el botón en index.html.
 */
function solicitarDatos() {
    // 1. Pedir al usuario su nombre, apellido y carrera usando 'prompt()'
    const nombre = prompt("Por favor, ingresa tu nombre:");
    const apellido = prompt("Por favor, ingresa tu apellido:");
    const carrera = prompt("Por favor, ingresa tu carrera:");

    // Verificar si el usuario presionó Cancelar o no ingresó nada en al menos un campo
    if (nombre === null || apellido === null || carrera === null || nombre === "" || apellido === "" || carrera === "") {
        alert("¡Captura cancelada o incompleta! Por favor, intenta de nuevo.");
        return; // Detiene la ejecución si los datos no son válidos
    }

    // 2. Construir el mensaje final con un formato claro
    const mensajeAlerta = `
        ¡Datos Ingresados Correctamente!

        Nombre: ${nombre}
        Apellido: ${apellido}
        Carrera: ${carrera}
    `;

    // Mostrar los datos ingresados por el usuario en una alerta usando 'alert()'
    alert(mensajeAlerta);
}

// Opcional: Mensaje en consola al cargar la página
console.log("El script está cargado. Haz clic en el botón 'Iniciar Captura de Datos' para activar la función solicitarDatos().");