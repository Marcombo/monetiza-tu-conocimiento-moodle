var error = document.getElementById("error");
var nombreAlumno = document.getElementById("nombreAlumno");
var apellidosAlumno = document.getElementById("apellidosAlumno");
var edadAlumno = document.getElementById("edadAlumno");

function enviarFormularioAltaAlumno() {
    console.log("Enviando formulario");
    // Array con los mensajes de error
    var mensajesError = [];
    // Verificamos que se envía toda la información
    if (nombreAlumno.value == null || nombreAlumno.value == "")
        mensajesError.push("Falta el Nombre del Alumno");
    if (apellidosAlumno.value == null || apellidosAlumno.value == "")
        mensajesError.push("Faltan los Apellidos del Alumno");
    if (edadAlumno.value == null || edadAlumno.value == "")
        mensajesError.push("Falta el Nombre del Alumno");
    error.innerHTML = mensajesError.join(",");
    return false;
}