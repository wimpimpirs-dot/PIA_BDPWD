<?php
$con = mysqli_connect("localhost", "root", "", "colegio");
if(!$con){
    die("No se estableció la conexión con el servidor" . mysqli_error());
}

$sql = "INSERT INTO alumnos
    VALUES('$_POST[id_alumno]', '$_POST[nombre]', '$_POST[fecha_nacimiento]', '$_POST[grado]', '$_POST[promedio]')";

if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
    die('Error: ' . mysqli_error($con));
}

echo "<center>";
echo "1 registro agregado <br>";
echo "<a href='PIA_consulta.php'>Ver registros </a>";

mysqli_close($con);
?>