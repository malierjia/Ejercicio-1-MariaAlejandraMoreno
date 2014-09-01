<!DOCTYPE html>
<html>
<head>
	<title>CREASTE ESTUDIANTE</title>
	<meta charset = "utf-8">
</head>

<body>
<?php

//se conecta
include_once("includes/database.php");

//variables que reciben lo que llega de estudiantes.php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$codigo = $_POST["codigo"];
$correo = $_POST["correo"];

//Muestra que se agrega
echo"<h1>AGREGASTE</h1>";
echo "<br/>";
echo "Mi nombre es"." ".$nombre;
echo "<br/>";
echo "Mi apellido es"." ".$apellido;
echo "<br/>";
echo "Mi codigo es"." ".$codigo;
echo "<br/>";
echo "Mi correo es"." ".$correo;

//inserta los datos en la base de datos, query descrito en word
$query= "INSERT INTO `estudiantes`(`codigo`, `nombre`, `apellido`, `correo`) VALUES ('$codigo','$nombre','$apellido','$correo')";
mysqli_query($con,$query);
?>


<form action="estudiantes.php" >
<br>
<input type="submit" value="Agregar otro Estudiante">
</form>
<form action="estudiantesnotas.php" >
<br>
<input type="submit" value="Ver notas de Estudiantes">
</form>
<form action="notas.php">
<br>
<input type="submit" value="Agregar Notas de estudiante">
</form>
</body>

</html>

