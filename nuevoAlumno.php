<?php require("views/cabecera.php"); ?>
<!-- Divisor del Contenido -->
<div id="contenido">
    <h1>Gestor de Alumnos</h1>
    <h3>Nueva Alta de Alumno</h3>
    <form id="nuevoAlumno" action="controllers/accionesAlumno.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos"><br>
        <label for="edad">Edad:</label><br>
        <input type="text" id="edad" name="edad"><br>
        <input type="hidden" id="formularioAltaAlumno" name="nuevoAlumno">
        <input type="submit" onmouseover="enviarFormularioAltaAlumno()" value="Dar de Alta Nuevo Alumno">
    </form>
</div>
</div>
<?php require("views/pieDePagina.php"); ?>
<script src="js/alumnos.js"></script>

</html>