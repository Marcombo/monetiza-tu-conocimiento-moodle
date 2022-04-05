<?php

require_once("AlumnoController.php");

if (isset($_POST)) {
    // Recuperamos los datos del formulario para gestionar el Alumno
    if (isset($_POST["nombre"]))
        $nombre = $_POST["nombre"];
    if (isset($_POST["apellidos"]))
        $apellidos = $_POST["apellidos"];
    if (isset($_POST["edad"]))
        $edad = $_POST["edad"];
    if (isset($_POST["id"]))
        $id = $_POST["id"];

    // Accedemos al controlador
    $alumnoController = new AlumnoController();
    //var_dump($_POST);
    // Si quiere dar de alta un alumno nuevo
    if (isset($_POST["nuevoAlumno"])) {
        $alumnoController->insertarAlumno($nombre, $apellidos, $edad);
    }
    // Si quiere modificar el alumno
    if (isset($_POST["modificarAlumno"])) {
        $alumnoController->actualizarAlumno($id, $nombre, $apellidos, $edad);
    }
    // Si quiere realizar un examen
    if (isset($_POST["realizarExamen"])) {
        $alumnoController->realizarExamen($id);
    }
    // Si quiere ver los exámenes realizados
    if (isset($_POST["verExamenesAlumno"])) {
        $alumnoController->verExamenesAlumno($id);
    }
    // Si quiere borrar al alumno
    if (isset($_POST["eliminarAlumno"])) {
        $alumnoController->borrarAlumno($id);
    }
}