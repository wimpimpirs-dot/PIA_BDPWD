<?php
$con = mysqli_connect("localhost", "root", "", "colegio");

if (!$con) {
    die("No se estableció la conexión con el servidor: " . mysqli_connect_error());
}

$id = $_POST['id_alumno'];

$sql = "DELETE FROM alumnos WHERE id_alumno = '$id'";

if (mysqli_query($con, $sql)) {
    echo "<center>";
    echo " Alumno con ID $id eliminado correctamente.<br>";
    echo "<a href='PIA_consulta.php'>Ver registros</a>";
} else {
    echo "Error al eliminar el registro: " . mysqli_error($con);
}

mysqli_close($con);
?>
