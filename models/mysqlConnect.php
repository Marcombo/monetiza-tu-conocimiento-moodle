<?php

class mysqlConnect
{
    private $server;
    private $user;
    private $password;
    private $database;
    private $mysqli;

    //Construcctor por Defecto
    public function __construct()
    {
        $this->server = "localhost";
        $this->user = "root";
        $this->password = "root";
        $this->database = "almamater";
        $this->mysqli = new mysqli($this->server, $this->user, $this->password, $this->database);
        $this->mysqli->set_charset("utf8");
    }

    public function realizarConsulta($consulta)
    {
        return $this->mysqli->query($consulta);
    }
}