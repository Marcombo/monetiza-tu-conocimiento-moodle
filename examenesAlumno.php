<?php
require_once("controllers/AlumnoController.php");
require_once("controllers/AsignaturaController.php");
$alumnoController = new AlumnoController();
$asignaturaController = new AsignaturaController();
$id = $_GET["id"];

require("views/cabecera.php");
?>

<!-- Divisor del Contenido -->
<div id="contenido">
    <h1>Gestor de Alumnos</h1>
    <h3>Examenes del Alumno: <?php echo $alumnoController->getNombreAlumno($id); ?></h3>

    <table>
        <tr>
            <td>Fecha</td>
            <td>Asignatura</td>
            <td>Nota</td>
        </tr>
        <!-- Listamos a todos los Alumnos -->
        <?php

        $result = $alumnoController->getListadoExamenesAlumno($id);
        // Mostramos los exámenes del Alumno
        while ($examen = $result->fetch_assoc()) {
            $nombreAsignatura = $asignaturaController->getNombreAsignatura($examen["idAsignatura"]);
            // Formateamos la fecha para verlo como estamos acostumbrados en España
            $timestamp = strtotime($examen["fecha"]);
            $fecha = date("d-m-Y", $timestamp);
            // Mostramos los datos en la fila
            echo '<tr>';
            echo '<td>' . $fecha . '</td>';
            echo '<td>' . $nombreAsignatura . '</td>';
            echo '<td>' . $examen["nota"] . '</td>';
            echo '</tr>';
        }

        ?>
    </table>
</div>
</div>
<?php require("views/pieDePagina.php"); ?>

</html>