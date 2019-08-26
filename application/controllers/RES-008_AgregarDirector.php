<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
//$Esc_Cod = $_POST[''];
//$Dir_Cod = $_POST['coddirector'];
$Dir_Nom = $_POST['nombre'];
$Dir_Est = $_POST['estado'];
$consulta = "INSERT INTO `director` (`Dir_Cod`, `Dir_Nom`, `Dir_Est`) VALUES (NULL,'$Dir_Nom','$Dir_Est')";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
mysqli_close( $conexion );

?>

