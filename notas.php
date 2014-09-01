<html>
<head> 
<title> ASIGNAR NOTAS </title>
<meta charset = "utf-8">
</head>

<body>

<?php

//se conecta
include_once("includes/database.php");

//query descrito en word
$query= "SELECT * FROM claseweb.notas";

//se coloca en una variable (arreglo)
$result= mysqli_query($con,$query);

//print_r($result);

//creo tabla
echo"<h1>Criterios</h1>";
echo "<table border='1'>
<tr>
<th>IdNota</th>
<th>Nombre</th>
<th>Porcentaje</th>
</tr>";

//muestro los datos recorriendo el arreglo
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['idNota'] ."</td>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" .  $row['porcentaje'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);

?>

<form action="estudiantesnotas.php">
<br>
<input type="submit" value="Ver Notas">
</form>

<br>
<h1>Asignar notas a un estudiante</h1>

<form action="AgregaNotas.php" method ="POST">
   <label>Codigo estudiante:</label><input type="number" name="codigo" ><br>
   <label>Taller 1:</label><input type="number" name="valorNota" ><br>
   <label>Taller 2:</label><input type="number" name="valorNotaDos"><br>
   <label>Taller 3:</label><input type="number" name="valorNotaTres"><br>
   <label>Parcial:</label><input type="number" name="valorNotaCuatro"><br>
   <h4>*Todos los campos son oblligatorios</h4>
   <input type="submit" value="Enviar">
</form>

</body>
</html>