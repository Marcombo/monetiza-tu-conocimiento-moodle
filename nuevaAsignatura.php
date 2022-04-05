<?php require("views/cabecera.php"); ?>
<!-- Divisor del Contenido -->
<div id="contenido">
    <h1>Bienvenido a Alma Mater</h1>
    <h2>Nueva Asignatura</h2>
    <form id="nueva" action="controllers/accionesAsignatura.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="curso">Curso:</label><br>
        <input type="text" id="curso" name="curso"><br>
        <input type="hidden" name="nuevaAsignatura" value="nuevaAsignatura">
        <input type="submit" value="Dar de Alta Nueva Asignatura">
    </form>
</div>
<?php require("views/pieDePagina.php"); ?>