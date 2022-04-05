<?php
require("views/cabecera.php");
require_once("controllers/AsignaturaController.php");

$asignaturaController = new AsignaturaController();

function mostrarBotonModificar($id)
{
    echo '<button type="submit" name="modificarAsignatura"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>';
}

function mostrarBotonEliminarAsignatura($id)
{
    echo '<button type="submit" name="eliminarAsignatura"><i class="fa fa-trash" aria-hidden="true"></i></button>';
}

?>
<!-- Divisor del Contenido -->
<div id="contenido">
    <h1>Gestor de Asignaturas</h1>
    <h3>Listado de Asignaturas</h3>
    <table id="tablaAlumnos">
        <tr>
            <td id="filaAlumnos">Nombre</td>
            <td id="filaAlumnos">Curso</td>
        </tr>
        <tr>
            <!-- Listamos a todas las Asignaturas -->
            <?php
            $result = $asignaturaController->getAsignaturas();
            // Leemos todos los alumnos
            while ($asignatura = $result->fetch_assoc()) {
                $idAsignatura = $asignatura["id"];
                echo '<tr>';
                echo '<form action="controllers/accionesAsignatura.php" method="post">';
                echo '<input type="hidden" name="id" value="' . $idAsignatura . '">';
                echo '<td id="filaAlumnos"><input type="text" name="nombre" value="' . $asignatura["nombre"] . '"></td>';
                echo '<td id="filaAlumnos"><input type="text" name="apellidos" value="' . $asignatura["curso"] . '"></td>';
                // Creamos los botones para las acciones
                echo '<td id="filaAlumnos">';
                // Acción Modificar Asignatura
                mostrarBotonModificar($idAsignatura);
                // Acción Borrar Asignatura
                mostrarBotonEliminarAsignatura($idAsignatura);
                echo '</td></tr></form>';
            }
            ?>
        </tr>
    </table>
</div>
</div>
<?php require("views/pieDePagina.php"); ?>

</html>