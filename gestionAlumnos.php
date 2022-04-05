<?php require("views/cabecera.php"); ?>
<!-- Divisor del Contenido -->
<div id="contenido">
    <h1>Gestión de Alumnos</h1>
    <table>
        <tr>
            <td>
                <a href="nuevoAlumno.php">
                    <i id="botonIcono" class="fa fa-user-plus"></i>
                </a>
            <td>
                <a href="editarAlumno.php">
                    <i id="botonIcono" class="fa fa-pencil"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td>Nuevo Alumno</td>
            <td>Editar Alumno</td>
        </tr>
    </table>
</div>
<?php require("views/pieDePagina.php"); ?>

</html>