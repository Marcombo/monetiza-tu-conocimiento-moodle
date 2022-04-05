<?php require("views/cabecera.php"); ?>
<!-- Divisor del Contenido -->
<div id="contenido">
    <h1>Bienvenido a Alma Mater</h1>
    <h3> Bienvenido al Gestor de Alumnos y Asignaturas. ¿Qué deseas hacer?</h3>
    <table>
        <tr>
            <td>
                <a href="gestionAlumnos.php">
                    <i id="botonIcono" class="fa fa-graduation-cap" aria-hidden="true"></i>
                </a>
            </td>
            <td>
                <a href="gestionAsignaturas.php">
                    <i id="botonIcono" class="fa fa-file-text-o" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td>Gestión de Alumnos</td>
            <td>Gestión de Asignaturas</td>
        </tr>
    </table>
</div>
<?php require("views/pieDePagina.php"); ?>

</html>