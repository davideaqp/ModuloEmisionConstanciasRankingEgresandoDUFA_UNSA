<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$nombre = $_POST['nombre'];
$escuela= $_POST['escuela'];


$consulta = "INSERT INTO `grado` (`Gra_Cod`, `Gra_Nom`, `Gra_Est`, `Escuela_Esc_Cod`) VALUES (NULL, '$nombre', '1', '$escuela');";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
mysqli_close( $conexion );

?>
