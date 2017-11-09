<?php
/*Hacemos el llamado al archivo que contiene los valores parámetros
para conectarnos a la base de datos*/

require "conexionBaseDatos.php";

//Creamos el objeto conexión con la extensióm Mysqli
$objConexion= new mysqli($host,$user,$password,$baseDatos);

//Verificamos la conexión
if($objConexion->connect_error)
{
    echo "Error de conexión a la base de datos ".$objConexion->connect_error;
    exit();
}
else
{
    echo "Conectados al Servidor y listos para usar la Base de datos ".$baseDatos;
}

?>
