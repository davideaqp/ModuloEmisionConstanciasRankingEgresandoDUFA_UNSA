<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$nombre = $_POST['nombre'];
$segundaEsp = $_POST['segEsp'];


$consulta = "INSERT INTO `grado_seg` (`Gra_Seg_Cod`, `Gra_Seg_Nom`, `Gra_Seg_Est`, `Segunda_Especialidad_Seg_Esp_Cod`) VALUES (NULL, '$nombre', '1', '$segundaEsp');";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
mysqli_close( $conexion );

?>
