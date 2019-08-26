<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
//$Esc_Cod = $_POST[''];
$Egr_Cor = $_POST['correlativo'];
$Egr_Nombre = $_POST['nombreEgresado'];
$Egre_Cre = $_POST['Creditos'];
$Egr_Grado = $_POST['Titulo'];
$Egr_Fec = $_POST['fecha'];
$Tipo_Tip_Cod = $_POST['tipoEgresado'];
$Facultad_Fac_Cod = $_POST['Escuela'];
//INSERT INTO `egresado` (`Egr_Cod`, `Egr_Cor`, `Egr_Nombre`, `Egre_Cre`, `Egr_Grado`, `Egr_Fec`, `Tipo_Tip_Cod`, `Facultad_Fac_Cod`) VALUES (NULL, 'qqewqwe', 'qweqwe', '12', '1', '2019-06-01', '1', '1');
//INSERT INTO `egresado` (`Egr_Cod`, `Egr_Cor`, `Egr_Nombre`, `Egre_Cre`, `Egr_Grado`, `Egr_Fec`, `Tipo_Tip_Cod`, `Escuela_Esc_Cod`) VALUES (NULL, 'sdf', 'sdfsdf', '123', 'weqwe', '2019-07-15', '1', '1');
$consulta = "INSERT INTO `egresado` (`Egr_Cod`, `Egr_Cor`, `Egr_Nombre`, `Egre_Cre`, `Egr_Grado`, `Egr_Fec`, `Tipo_Tip_Cod`, `Escuela_Esc_Cod`) 
VALUES (NULL, '$Egr_Cor', '$Egr_Nombre', '$Egre_Cre', '$Egr_Grado', '$Egr_Fec', '$Tipo_Tip_Cod', '$Facultad_Fac_Cod');";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
mysqli_close( $conexion );



?>
