<html>
<head> 
<title> ESTUDIANTES </title>
<meta charset = "utf-8">
</head>

<body>

<?php

//se conecta
include_once("includes/database.php");

//query descrito en word
$query= "SELECT * FROM claseweb.estudiantes ORDER BY apellido";
//se coloca en una variable (arreglo)
$result= mysqli_query($con,$query);


//creo tabla para mostrar estudiantes existentes
echo "<br />";
echo"<h1>Estudiantes existentes</h1>";
echo "<table border='1'>
<tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Codigo</th>
<th>Correo</th>
</tr>";

//muestro los datos recorriendo el arreglo
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['nombre'] ." </td>";
  echo "<td>" . $row['apellido'] . " </td>";
  echo "<td>" . $row['codigo'] ." </td>";
  echo "<td>" . $row['correo'] ." </td>";
}

echo "</table>";
mysqli_close($con);
?>

<form action="notas.php">
<br>
<input type="submit" value="Agregar Notas de estudiante">
</form>

<h1>Crea un nuevo estudiante</h1>

<form action="AgregaDatos.php" method ="POST">

   <label>Nombre:</label><input type="text" name="nombre" value"" ><br>
   <label>Apellido:</label><input type="text" name="apellido" value"" ><br>
   <label>Codigo:</label><input type="number" name="codigo" value"" ><br>
   <label>Correo:</label><input type="mail" name="correo" value""><br>
   <h4>*Todos los campos son oblligatorios</h4>
   <input type="submit" name="Enviar" value="Enviar" >

</form>
</body>

</html>