
<?php

// Creo mi conexion
						//(Servidor, usuario, contraseña)
$conexion = mysql_connect("localhost","root","root");
//Parametros por si la conexion falla
if(!$conexion){
die('La base de datos no ha podido conectarse por: '.mysql_error());
}

//Creacion de la Base de Datos
if(mysql_query("CREATE DATABASE mapQuiz",$conexion))
{
echo "Se ha creado la base de datos";
}

else{
echo "No se ha podido crear la base de datos por el siguiente error: ". mysql_error();
}


//Preparo esta peticion
mysql_select_db("MisLugares",$conexion);
$sql = "CREATE TABLE Lugar
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
Nombre varchar(30))";

//Ejecuto la peticion
mysql_query($sql,$conexion);

//Cerrar la conexion

mysql_close($conexion);

?>
