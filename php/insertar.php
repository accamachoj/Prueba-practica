<?php 
	$conexion=mysqli_connect('localhost','root','','prueba');

	$nombre=$_POST['nombre'];
	$mensaje=$_POST['mensaje'];

	$sql="INSERT into nombrecompleto (nombre,mensaje)
			values ('$nombre','$mensaje')";
	echo mysqli_query($conexion,$sql);
 ?>