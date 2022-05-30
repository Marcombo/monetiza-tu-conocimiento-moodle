<?php

require_once("mysqlConnect.php");

/**
 * Clase para el modelo de Asignatura
 */
class AsignaturaModel
{
    private $mysqlConn;

    public function __construct()
    {
        $this->mysqlConn = new mysqlConnect();
    }

    public function insertarNuevaAsignatura($nombre, $curso)
    {
        return $this->mysqlConn->realizarConsulta("INSERT INTO Asignatura(nombre, curso) VALUES ('" . $nombre . "', '" . $curso . "')");
    }

    public function actualizarAsignatura($id, $nombre, $curso)
    {
        return $this->mysqlConn->realizarConsulta("UPDATE Asignatura SET nombre='" . $nombre . "', curso='" . $curso . "' WHERE id=" . $id);
    }

    public function getTodasLasAsignaturas()
    {
        return $this->mysqlConn->realizarConsulta("SELECT * FROM Asignatura");
    }

    public function getNombreAsignatura($id)
    {
        $asignatura = mysqli_fetch_assoc($this->mysqlConn->realizarConsulta("SELECT * FROM Asignatura WHERE id=" . $id));
        return $asignatura["nombre"] . "(" . $asignatura["curso"] . ")";
    }

    public function borrarAsignatura($id)
    {
        return $this->mysqlConn->realizarConsulta("DELETE FROM Asignatura WHERE id=" . $id);
    }
}