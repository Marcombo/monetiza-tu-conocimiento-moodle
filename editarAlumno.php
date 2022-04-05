<?php
require("views/cabecera.php");
require_once("controllers/AlumnoController.php");

$alumnoController = new AlumnoController();

function mostrarBotonModificar($id)
{
    echo '<button type="submit" name="modificarAlumno"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>';
}

function mostrarRealizarExamen($id)
{
    echo '<button type="submit" name="realizarExamen"><i class="fa fa-file-text-o" aria-hidden="true"></i></button>';
}

function mostrarBotonExamenesRealizados($id)
{
    echo '<button type="submit" name="verExamenesAlumno"><i class="fa fa-eye" aria-hidden="true"></i></button>';
}

function mostrarBotonEliminarAlumno($id)
{
    echo '<button type="submit" name="eliminarAlumno"><i class="fa fa-trash" aria-hidden="true"></i></button>';
}

?>
<!-- Divisor del Contenido -->
<div id="contenido">
    <h1>Gestor de Alumnos</h1>
    <h3>Listado de Alumnos</h3>
    <table id="tablaAlumnos">
        <tr>
            <td id="filaAlumnos">Nombre</td>
            <td id="filaAlumnos">Apellidos</td>
            <td id="filaAlumnos">Edad</td>
            <td id="filaAlumnos">Acciones</td>
        </tr>
        <tr>
            <!-- Listamos a todos los Alumnos -->
            <?php
            $result = $alumnoController->getTodosLosAlumnos();
            // Leemos todos los alumnos
            while ($alumno = $result->fetch_assoc()) {
                $idAlumno = $alumno["id"];
                echo '<tr>';
                echo '<form action="controllers/accionesAlumno.php" method="post">';
                echo '<input type="hidden" name="id" value="' . $idAlumno . '">';
                echo '<td id="filaAlumnos"><input type="text" name="nombre" value="' . $alumno["nombre"] . '"></td>';
                echo '<td id="filaAlumnos"><input type="text" name="apellidos" value="' . $alumno["apellidos"] . '"></td>';
                echo '<td id="filaAlumnos"><input type="text" name="edad" value="' . $alumno["edad"] . '"></td>';
                // Creamos los botones para las acciones
                echo '<td id="filaAlumnos">';
                // Acción Modificar Alumno
                mostrarBotonModificar($idAlumno);
                // Acción Realizar Examen
                mostrarRealizarExamen($idAlumno);
                // Si tiene exámenes => los mostramos
                $numeroExamenes = $alumnoController->getNumeroExamenes($idAlumno);
                if ($numeroExamenes > 0)
                    mostrarBotonExamenesRealizados($idAlumno);
                // Acción Borrar Alumno
                mostrarBotonEliminarAlumno($idAlumno);
                echo '</td></tr></form>';
            }
            ?>
        </tr>
    </table>
</div>
</div>
<?php require("views/pieDePagina.php"); ?>
<script src="js/asignaturas.js"></script>

</html>