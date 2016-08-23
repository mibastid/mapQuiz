
<?php

//Conexion a mysql
$conexion= mysql_connect("localhost","root","root");

//Nombro variables con metodo POST
$Nombre= $_POST['Nombre'];

//Selecciono mi Base de Datos
mysql_select_db("mapQuiz",$conexion);


//Añado la onulta
$sql="INSERT INTO lugar (`Nombre`) VALUES ('$Nombre')";

$resultado=mysql_query($sql);

//Cierro
mysql_close($conexion);

?>
