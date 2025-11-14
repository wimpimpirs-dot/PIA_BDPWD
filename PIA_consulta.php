<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar alumnos</title>
    <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #333;
      overflow: hidden;
    }

    .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }

    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
  </style>
</head>
<body>
<div class="navbar">
  <a href="Pia_home.html">Portada</a>
    <a href="PIA_detele.html">Eliminar un registro</a>
    <a href="Pia_insert.html">Agregar registro</a>
    <a href="PIA_consulta.php">Consulta registro</a>
    <a href="PIA_update.html">Actualizar registro</a>
  </div>
<center>
    <?php
    $con =mysqli_connect("localhost","root","","colegio");
    $resultado = mysqli_query($con, "select * from alumnos");
    if($resultado === FALSE){
        echo "fallo";
        die(mysqli_error());
    }
    echo "<center><fonr face='Arial'>";
    echo "<h1>Consulta de la tabla datos</h1>";
    echo "<table border='1'>
    <tr>
        <th> Matricula </th>
        <th> Nombre </th>
        <th> Fech. Nac </th>
        <th> Grado </th>
        <th> Promedio </th>
        </tr>";

while($row=mysqli_fetch_array($resultado)){
    echo "<tr>";
    echo "<td align=center>" .$row['id_alumno']."</td>";
    echo "<td align=center>" .$row['nombre']."</td>";
    echo "<td align=center>" .$row['fecha_nacimiento']."</td>";
    echo "<td align=center>" .$row['grado']."</td>";
    echo "<td align=center>" .$row['promedio']."</td>";
    echo "</tr>";
        }
    echo "</table>";
    $registros=mysqli_num_rows($resultado);
    echo "<br>Registros:" . $registros;
mysqli_close($con);
    ?>
</center>
</body>
</html>