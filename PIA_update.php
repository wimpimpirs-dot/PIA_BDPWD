<?php
$con = mysqli_connect("localhost", "root", "", "colegio");

if (!$con) {
    die("No se estableció la conexión con el servidor: " . mysqli_connect_error());
}

$id = $_POST['id_alumno'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha_nacimiento'];
$grado = $_POST['grado'];
$promedio = $_POST['promedio'];

$sql = "UPDATE alumnos 
        SET nombre='$nombre', fecha_nacimiento='$fecha', grado='$grado', promedio='$promedio'
        WHERE id_alumno='$id'";

if (mysqli_query($con, $sql)) {
    echo "<center>";
    echo " Registro actualizado correctamente.<br>";
    echo "<a href='PIA_consulta.php'>Ver registros</a>";
} else {
    echo " Error al actualizar el registro: " . mysqli_error($con);
}

mysqli_close($con);
?>