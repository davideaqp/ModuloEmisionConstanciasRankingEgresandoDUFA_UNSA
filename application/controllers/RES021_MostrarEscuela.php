<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = "SELECT * FROM escuela";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Esc_Cod</th>";
echo "<th>Esc_Nom</th>";
echo "<th>Esc_Acr</th>";
echo "<th>Esc_Est</th>";
echo "<th>Esc_Fac</th>";
echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado ))
{
 echo "<tr>";
 echo "<td>" . $columna['Esc_Cod'] . "</td><td>" . $columna['Esc_Nom'] . "</td><td>" . $columna['Esc_Acr'] . "</td><td>" . $columna['Esc_Est'] . "</td><td>" . $columna['Facultad_Fac_Cod'] . "</td>";
 echo "</tr>";
}
echo "</table>";
?>	


