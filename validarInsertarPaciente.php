<form id="form1" name="form1" method="post"
action="validarInsertarPaciente.php">

<?php
extract($_REQUEST); //Recoger todas las variables que pasan método GET o POST

/*Hacemos el llamado al archivo que contiene los valores parámetros conexión al a base de datos*/
require "conexionBasesDatos.php";

//Creamos el objeto conexión utilizando la extensión Mysqli
$objConexion = new mysqli($host,$user,$password,$baseDatos);

//verificamos la conexión
if($objConexion->connect_error)
{
  echo "Error de conexión a la base de datos ".$objConexion->connect_error;
  exit();
}

//Vamos a realizar el proceso para insertar el paciente
$sql="insert into Pacientes(pacIdentificacion,pacNombres,PacApellidos,pacFechaNacimiento,pacSexo)
values('$_REQUEST[identificacion]','$_REQUEST[NOMBRES]','$_REQUEST[apellidos]','$_REQUEST[fechaNacimiento]','$_REQUEST[sexo]')";

//Ejecutamos la consulta llamando al método query del objeto conexión y pasando la sentencia sql
if($objConexion->query($sql))
header ("location:index2.php?pag=insertarPaciente&msj=1");
else
header ("location:index2.php?pag=insetarPaciente&msj=2");

?>
