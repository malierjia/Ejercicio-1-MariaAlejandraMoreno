<!DOCTYPE html>
<html>
<head>
	<title>CREASTE NOTAS</title>
	<meta charset = "utf-8">
</head>

<body>
<?php

//se conecta
include_once("includes/database.php");

//variables que reciben lo que llega de notas.php
$codigo = $_POST["codigo"];
$valorNota = $_POST["valorNota"];
$valorNotaDos = $_POST["valorNotaDos"];
$valorNotaTres = $_POST["valorNotaTres"];
$valorNotaCuatro = $_POST["valorNotaCuatro"];

//muestra lo que se agrega
echo"<h1>AGREGASTE</h1>";
echo "<br/>";
echo "Codigo"." ".$codigo;
echo "<br/>";
echo "Taller 1"." ".$valorNota;
echo "<br/>";
echo "Taller 2"." ".$valorNotaDos;
echo "<br/>";
echo "Taller 3"." ".$valorNotaTres;
echo "<br/>";
echo "Final"." ".$valorNotaCuatro;
echo "<br/>";


//inserta los datos en la base de datos, query descrito en word
$query= "INSERT INTO `estudiantesnotas`(`codigo`, `idNota`, `valor`) VALUES ('$codigo','1','$valorNota')"; 
$queryDos="INSERT INTO `estudiantesnotas`(`codigo`, `idNota`, `valor`) VALUES ('$codigo','2','$valorNotaDos')";
$queryTres="INSERT INTO `estudiantesnotas`(`codigo`, `idNota`, `valor`) VALUES ('$codigo','3','$valorNotaTres')";
$queryCuatro="INSERT INTO `estudiantesnotas`(`codigo`, `idNota`, `valor`) VALUES ('$codigo','4','$valorNotaCuatro')";

mysqli_query($con,$query);
mysqli_query($con,$queryDos);
mysqli_query($con,$queryTres);
mysqli_query($con,$queryCuatro);

?>


</form>
<form action="estudiantesnotas.php" >
<br>
<input type="submit" value="Ver notas de Estudiantes">
</form>
</body>

</html>

