<?php

require_once("mysqlConnect.php");

/**
 * Clase para el modelo de Alumno
 */
class AlumnoModel
{
    private $mysqlConn;

    public function __construct()
    {
        $this->mysqlConn = new mysqlConnect();
    }

    public function insertarAlumno($nombre, $apellidos, $edad)
    {
        return $this->mysqlConn->realizarConsulta("INSERT INTO Alumno(nombre, apellidos, edad) VALUES ('" . $nombre . "','" . $apellidos . "'," . $edad . ")");
    }

    public function actualizarAlumno($id, $nombre, $apellidos, $edad)
    {
        $sql = 'UPDATE Alumno SET nombre="' . $nombre . '", apellidos="' . $apellidos . '", edad=' . $edad . ' WHERE id=' . $id;
        return $this->mysqlConn->realizarConsulta($sql);
    }

    public function getNombreAlumno($id)
    {
        $datosAlumno = mysqli_fetch_assoc($this->mysqlConn->realizarConsulta("SELECT * FROM Alumno WHERE id=" . $id));
        return $datosAlumno["nombre"] . " " . $datosAlumno["apellidos"];
    }

    public function getTodosLosAlumnos()
    {
        return $this->mysqlConn->realizarConsulta("SELECT * FROM Alumno");
    }

    public function borrarAlumno($id)
    {
        $sql = "DELETE FROM Alumno WHERE id=" . $id;
        return $this->mysqlConn->realizarConsulta($sql);
    }

    public function getExamenesDelAlumno($id)
    {
        return $this->mysqlConn->realizarConsulta("SELECT * FROM `Examen` WHERE idAlumno=" . $id);
    }

    public function getAsignaturasDelAlumno($id)
    {
        return $this->mysqlConn->realizarConsulta("SELECT * FROM Examen WHERE idAlumno=" . $id);
    }

    public function getNumeroExamenes($id)
    {
        $result = mysqli_fetch_assoc($this->mysqlConn->realizarConsulta("SELECT * FROM Examen WHERE idAlumno=" . $id));
        return $result;
    }

    public function ponerNotaExamen($idAsignatura, $idAlumno, $fecha, $nota)
    {
        $sql = 'INSERT INTO Examen(idAlumno, idAsignatura, fecha, nota) VALUES ('
            . $idAlumno . ', ' . $idAsignatura . ', "' . $fecha . '", ' . $nota . ')';
        return $this->mysqlConn->realizarConsulta($sql);
    }
}