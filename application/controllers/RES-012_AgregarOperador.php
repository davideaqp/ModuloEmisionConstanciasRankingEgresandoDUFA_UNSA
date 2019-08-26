<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
//$Esc_Cod = $_POST[''];

$Ope_Nom = $_POST['nombre'];
$Ope_Est = $_POST['estado'];
$consulta = "INSERT INTO `operador` (`Ope_Cod`, `Ope_Nom`, `Ope_Est`) VALUES (NULL,'$Ope_Nom','$Ope_Est')";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
mysqli_close( $conexion );
?>
