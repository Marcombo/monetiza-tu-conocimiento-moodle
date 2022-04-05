<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/academia/models/alumnos.php");

class AlumnoController
{

    private $alumnoModel;

    public function __construct()
    {
        $this->alumnoModel = new AlumnoModel();
    }

    public function insertarAlumno($nombre, $apellidos, $edad)
    {
        $this->alumnoModel->insertarAlumno($nombre, $apellidos, $edad);
        // Vamos a altaAlumnoCorrecta
        header("Location:../altaAlumnoCorrecta.php");
        die();
    }

    public function actualizarAlumno($id, $nombre, $apellidos, $edad)
    {
        $this->alumnoModel->actualizarAlumno($id, $nombre, $apellidos, $edad);
        // Volvemos a editarAlumno
        header("Location:../editarAlumno.php");
        die();
    }

    public function getTodosLosAlumnos()
    {
        return $this->alumnoModel->getTodosLosAlumnos();
    }

    public function getNombreAlumno($id)
    {
        return $this->alumnoModel->getNombreAlumno($id);
    }

    public function borrarAlumno($id)
    {
        $this->alumnoModel->borrarAlumno($id);
        // Volvemos a editarAlumno
        header("Location:../editarAlumno.php");
        die();
    }

    public function getListadoExamenesAlumno($id)
    {
        return $this->alumnoModel->getExamenesDelAlumno($id);
    }

    public function verExamenesAlumno($id)
    {
        header("Location:../examenesAlumno.php?id=" . $id);
        die();
    }

    public function realizarExamen($id)
    {
        header("Location:../nuevoExamen.php?id=" . $id);
        die();
    }

    public function ponerNotaExamen($idAsignatura, $idAlumno, $fecha, $nota)
    {
        $this->alumnoModel->ponerNotaExamen($idAsignatura, $idAlumno, $fecha, $nota);
        // Volvemos a examenesDelAlumno
        header("Location:../examenesAlumno.php?id=" . $idAlumno);
        die();
    }

    public function getAsignaturasAlumno($id)
    {
        return $this->alumnoModel->getAsignaturasDelAlumno($id);
    }

    public function getNumeroExamenes($id)
    {
        return $this->alumnoModel->getNumeroExamenes($id);
    }
}