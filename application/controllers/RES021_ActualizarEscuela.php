<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
//$Esc_Cod = $_POST[''];
//$Dir_Cod = $_POST['coddirector'];
$Esc_Cod = $_POST['codEsc'];
$Esc_Nom = $_POST['nomEsc'];
$Esc_Acr = $_POST['acrEsc'];
$Esc_Fac = $_POST['facEsc'];

//$consulta = "INSERT INTO `facultad` (`Fac_Cod`, `Fac_Nom`, `Fac_Acr`, `Fac_Est`) VALUES (NULL, '$Fac_Nom', '$Fac_Acr', '1');";
$consulta = "UPDATE `escuela` SET `Esc_Nom` = '$Esc_Nom', `Esc_Acr` = '$Esc_Acr' , `Facultad_Fac_Cod` = '$Esc_Fac' WHERE `escuela`.`Esc_Cod` = '$Esc_Cod';" ;
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
mysqli_close( $conexion );

?>
