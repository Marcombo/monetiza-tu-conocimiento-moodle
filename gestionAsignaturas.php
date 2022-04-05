<?php require("views/cabecera.php"); ?>
<!-- Divisor del Contenido -->
<div id="contenido">
    <h1>Gestión de Asignaturas</h1>
    <table>
        <tr>
            <td>
                <a href="nuevaAsignatura.php">
                    <i id="botonIcono" class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                </a>
            <td>
                <a href="editarAsignatura.php">
                    <i id="botonIcono" class="fa fa-id-card-o" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td>Nueva Asignatura</td>
            <td>Editar Asignatura</td>
        </tr>
    </table>
</div>
<?php require("views/pieDePagina.php"); ?>

</html>