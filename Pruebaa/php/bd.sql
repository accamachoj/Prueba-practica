create database if not exists pruebas;
use pruebas;
create table if not exists usuarios(
				id int auto_increment,
                nombre varchar(50),
                apellido varchar(50)
					);