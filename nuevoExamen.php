<?php
require("controllers/AsignaturaController.php");
$idAlumno = $_GET["id"];
$asignaturaController = new AsignaturaController();

require("views/cabecera.php");


?>

<!-- Divisor del Contenido -->
<div id="contenido">
    <h1>Gestor de Alumnos</h1>
    <h3>Nuevo Examen del Alumno</h3>
    <form id="nuevoAlumno" action="controllers/examenAlumno.php" method="post">
        <input type="hidden" name="idAlumno" value="<?php echo $idAlumno; ?>">
        <label for="fecha">Fecha:</label><br>
        <input type="text" id="fecha" name="fecha"><br>
        <label for="idAsignatura">Asignatura:</label><br>
        <select name="idAsignatura">
            <?php
            $listadoAsignaturas = $asignaturaController->getAsignaturas();
            // Accedemos a todas las asignaturas
            while ($asignatura = $listadoAsignaturas->fetch_assoc()) {
                echo "\t\t\t" . '<option value="' . $asignatura["id"] . '">'
                    . $asignatura["nombre"] . " (" . $asignatura["curso"] . ")" . '</option>' . "\n";
            }
            ?>
        </select><br>
        <label for="nota">Nota:</label><br>
        <input type="text" id="nota" name="nota"><br>
        <input type="hidden" id="formularioExamen" name="nuevoExamen">
        <input type="submit" value="Realizar Examen del Alumno">
    </form>
</div>
</div>
<?php require("views/pieDePagina.php"); ?>
<script src="js/alumnos.js"></script>

</html>