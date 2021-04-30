<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $db = "pruebita";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

   	
    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

    /*
    $sql = "CREATE DATABASE IF NOT EXISTS pruebita";
    if($conexion->query($sql) === true){
        echo "1";
    }else{
        die("Error al crear base de datos: " . $conexion->error);
    }
    */
    
    /*   
    $sql = "CREATE TABLE IF NOT EXISTS usuarios(
        id int auto_increment,
        nombre varchar(50),
        apellido varchar(50),
        primary key(id)
    )";

    if($conexion->query($sql) === true){
        echo "1";
    }else{
        die("Error al crear tabla: " . $conexion->error);
    }
    */

    $nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];

	$sql="INSERT into usuarios (nombre,apellido)
			values ('$nombre','$apellido')";
	echo mysqli_query($conexion,$sql);

?>