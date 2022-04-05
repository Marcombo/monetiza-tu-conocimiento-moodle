<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/academia/models/asignaturas.php");

class AsignaturaController
{

    private $asignaturaModel;

    public function __construct()
    {
        $this->asignaturaModel = new AsignaturaModel();
    }

    public function getNombreAsignatura($id)
    {
        return $this->asignaturaModel->getNombreAsignatura($id);
    }

    public function getAsignaturas()
    {
        return $this->asignaturaModel->getTodasLasAsignaturas();
    }

    public function insertarAsignatura($nombre, $curso)
    {
        $this->asignaturaModel->insertarNuevaAsignatura($nombre, $curso);
        // Vamos a altaAsignaturaCorrecta
        header("Location:../altaAsignaturaCorrecta.php");
        die();
    }

    public function modificarAsignatura($id, $nombre, $curso)
    {
        $this->asignaturaModel->actualizarAsignatura($id, $nombre, $curso);
        // Vamos a editarAsignatura
        header("Location:../editarAsignatura.php");
        die();
    }

    public function borrarAsignatura($id)
    {
        $this->asignaturaModel->borrarAsignatura($id);
        // Vamos a editarAsignatura
        header("Location:../editarAsignatura.php");
        die();
    }
}