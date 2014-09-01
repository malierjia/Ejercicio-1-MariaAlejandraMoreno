<!DOCTYPE html>
<html>
<head>

	<title>EJERCICIO 1</title>
	<meta charset = "utf-8">

</head>
<body>


<?php

include_once("includes/database.php");

///QUERY descrito en word

 $query= "SELECT claseweb.estudiantes.nombre AS nombre, claseweb.estudiantes.apellido AS apellido,
 claseweb.notas.idNota AS idNota,  claseweb.estudiantes.codigo AS codigo, claseweb.notas.nombre AS nombreNota, 
 claseweb.estudiantesnotas.valor AS valorNota 
 FROM claseweb.estudiantesnotas 
 RIGHT JOIN claseweb.estudiantes ON claseweb.estudiantesnotas.codigo = claseweb.estudiantes.codigo  
 JOIN claseweb.notas ON claseweb.estudiantesnotas.idNota = claseweb.notas.idNota 
 ORDER BY claseweb.estudiantesnotas.codigo, claseweb.estudiantesnotas.idNota 

  ";

  



 //se le asigna el query a una variable
$result= mysqli_query($con,$query);
 


//se crea una tabla donde se ven las notas de cada estudiante

echo "<table border='1'>
<tr>
    <th>codigo</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Taller 1</th>
	<th>Taller 2</th>
	<th>Taller 3</th>
	<th>Parcial 1</th>
</tr>";


//se crea un temporal para comparar el codigo
$tempCodigo = null;

//se recorre el arreglo arrojado por el query
while($row = mysqli_fetch_array($result) ) {


/*si el temporal es nulo o el temporal es diferente del codigo que arroja el query entonces se pintan los datos
del estudiante y las notas, luego se le asigna el codigo al temporal para cuando aparezca el mismo codigo no pinte
varias veces los datos. Y si aparece uno diferente haga el proceso de pintar datos del estudiante y notas
*/
if($tempCodigo == null || $tempCodigo != $row["codigo"]){

$tempCodigo = $row["codigo"];
echo"<tr>";

echo "<article id='".$row["codigo"]."'>";
echo "<td>
<a href='notaIndividual.php?codigo=".$row["codigo"]."'>".$row["codigo"]."</a></td>";

//echo"<td>".$row["codigo"]."</td>";
echo"<td>".$row["nombre"]." </td>";
echo"<td>".$row["apellido"]."</td>";


//se crea otro arreglo que reciba el query para comparalo con el anterior
$notas= mysqli_query($con,$query);

//se recorre el arreglo
while($datos = mysqli_fetch_array($notas)){

//si el codigo del arreglo row y datos son iiguales entonces se pintan las notas
if($row["codigo"]==$datos["codigo"]){
  echo"<td>".$datos["valorNota"]."</td>";

//termina segundo if
}
//termina segundo while
}
//termina primer if
}

//termina primer while
 }

//termina tabla
echo "</table>";

//$queryDos = "SELECT * FROM claseweb.estudiantes WHERE codigo =".$_GET['codigo']."";
  //    $resultado = mysql_query($queryDos) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");
/*
                while ( $row = mysql_fetch_array($resultado)){
                    echo "<article id='".$row["id"]."'>";
                    echo "<a href='productos.php?id=".$row['id']."'><button>Más info</button></a>";
                    echo "</article>";
                }
   
*/

?>

<form action="estudiantes.php" >
<br>
<input type="submit" value="Agregar">
</form>


</body>
</html>



