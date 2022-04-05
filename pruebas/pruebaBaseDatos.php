<?php

require_once("../models/mysqlConnect.php");

// Probamos el funcionamiento de la base de datos
function pruebaAccesoBaseDatos()
{
    $mysqlConn = new mysqlConnect();
    $result = $mysqlConn->realizarConsulta("SELECT * FROM Alumno");
    echo "<h1>PRUEBA ACCESO DATOS</h1>";
    mostrarResultadosAlumnos($result);
}

// Función para mostrar el resultado de la una consulta SQL
function mostrarResultadosAlumnos($result)
{
    echo "<h3>Mostrar Alumnos</h3>";
    while ($alumno = $result->fetch_assoc()) {
        echo "Alumno nº" . $alumno["id"] . "<br>----------------------------<br>";
        echo "- Nombre: " . $alumno["nombre"] . "<br>";
        echo "- Apellidos: " . $alumno["apellidos"] . "<br>";
        echo "- Edad: " . $alumno["edad"] . "<br><br>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Prueba de Acceso a la Base de Datos</title>
</head>

<body>
    <?php pruebaAccesoBaseDatos(); ?>
</body>

</html>