<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = "SELECT * FROM `egresado`";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Egr_Cod</th>";
echo "<th>Egr_Cor</th>";
echo "<th>Egr_Nombre</th>";
echo "<th>Egre_Cre</th>";
echo "<th>Egr_Grado</th>";
echo "<th>Egr_Fec</th>";
echo "<th>Tipo_Tip_Cod</th>";
echo "<th>Facultad_Fac_Cod</th>";
echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado ))
{
 echo "<tr>";
 echo "<td>" . $columna['Egr_Cod'] . "</td>
        <td>" . $columna['Egr_Cor'] . "</td>
        <td>" . $columna['Egr_Nombre'] . "</td>
        <td>" . $columna['Egre_Cre'] . "</td>
        <td>" . $columna['Egr_Grado'] . "</td>
        <td>" . $columna['Egr_Fec'] . "</td>
        <td>" . $columna['Tipo_Tip_Cod'] . "</td>
        <td>" . $columna['Facultad_Fac_Cod'] . "</td>";
 echo "</tr>";
}
echo "</table>";
?>	
