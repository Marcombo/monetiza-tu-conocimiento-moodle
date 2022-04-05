<?php

require_once("AsignaturaController.php");

if (isset($_POST)) {
    // Recuperamos los datos del formulario para gestionar la Asignatura
    if (isset($_POST["nombre"]))
        $nombre = $_POST["nombre"];
    if (isset($_POST["curso"]))
        $curso = $_POST["curso"];
    if (isset($_POST["id"]))
        $id = $_POST["id"];

    //Accedemos al Controladcor
    $asignaturaControlador = new AsignaturaController();
    //var_dump($_POST);
    // Si quiere dar de alta una asignatura nueva
    if (isset($_POST["nuevaAsignatura"])) {
        $asignaturaControlador->insertarAsignatura($nombre, $curso);
    }
    // Si quiere modificar una asignatura
    if (isset($_POST["modificarAsignatura"])) {
        $asignaturaControlador->modificarAsignatura($id, $nombre, $curso);
    }
    // Si quiere eliminar una asignatura
    if (isset($_POST["eliminarAsignatura"])) {
        $asignaturaControlador->borrarAsignatura($id);
    }
}