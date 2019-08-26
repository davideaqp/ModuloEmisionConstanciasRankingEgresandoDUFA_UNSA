<?php 
$conexion=mysqli_connect('localhost','root','','dufa');
$continente=$_POST['continente'];

	$sql="SELECT * FROM `escuela` WHERE Facultad_Fac_Cod = $continente";

	$result=mysqli_query($conexion,$sql);

	$cadena="<select class='custom-select' name='Escuela' id='Escuela'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}

	echo  $cadena."</select>";
	

?>
