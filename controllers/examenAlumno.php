<?php

require("AlumnoController.php");

$alumnoController = new AlumnoController();

$idAlumno = $_POST["idAlumno"];
$idAsignatura = $_POST["idAsignatura"];
$fecha = $_POST["fecha"];
$nota = $_POST["nota"];

$alumnoController->ponerNotaExamen($idAsignatura, $idAlumno, $fecha, $nota);