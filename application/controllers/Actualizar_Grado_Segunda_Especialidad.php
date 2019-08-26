<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
//$Esc_Cod = $_POST[''];
//$Dir_Cod = $_POST['coddirector'];
$Codigo = $_POST['codigo'];
$Nombre = $_POST['denominacion'];
$Seg_Especialidad = $_POST['segunda_espec'];

echo $Codigo;
echo $Nombre;
echo $Seg_Especialidad;
$consulta = "UPDATE `grado_seg` SET `Gra_Seg_Nom` = '$Nombre', `Segunda_Especialidad_Seg_Esp_Cod` = '$Seg_Especialidad' WHERE `grado_seg`.`Gra_Seg_Cod` = '$Codigo';" ;

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
mysqli_close( $conexion );

?>
