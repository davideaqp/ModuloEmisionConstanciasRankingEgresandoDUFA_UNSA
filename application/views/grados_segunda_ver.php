<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <title>
    Módulo de Emisión de Constancias de Ranking y Egresado de la DUFA
		</title>
		<script language="JavaScript">
			function deshabilitar(num){
    	if (confirm('¿Estas seguro de enviar este formulario ?')){
		    	}
		}
		</script>
  </head>
  <body>
		<!--Menú de Navegación-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="../../index.php">INICIO <span class="sr-only">(current)</span></a>
					</li>
					<!--Menu de Documentos-->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							ESTUDIANTES
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="registrar_egresado.php">Registrar Egresado</a>
							<a class="dropdown-item" href="registrar_pregrado.php">Registrar Pregrado</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							DOCUMENTOS
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="ranking_emision_pregrado.php">Emisión de Ranking</a>
							<a class="dropdown-item" href="constancia_ver_datos.php">Emisión de Constancias</a>
						</div>
					</li>
					<!--Menu de configuración-->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							CONFIGURAR
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="datos_excel.php">Subir Excel</a>
							<a class="dropdown-item" href="personal.php">Personal</a>
							<a class="dropdown-item" href="facultad_agregar.php">Facultad</a>
							<a class="dropdown-item" href="escuela_agregar.php">Escuela</a>
							<a class="dropdown-item" href="especialidad_agregar.php">Especialidad</a>
							<a class="dropdown-item" href="grado_agregar.php">Grados</a>
              <a class="dropdown-item" href="segunda_especialidad_agregar.php">Segundas Especialidades</a>
              <a class="dropdown-item" href="grados_segunda_especialidad_agregar.php">Grados Segundas Especialidades</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<!--Fin del Menú de Navegación-->

<div class="container">
		<div class="row">
				<div class="col">
						<center><h3 class="text-uppercase">Grados de Segundas Especialidades</h3></center>
								<table class="table table-striped">
										<thead>
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Estado</th>
										<th>Segunda Especialidad</th>
										<th>Opciones</th>
										</thead>
										<tbody>
<?php

$consulta = "SELECT Gra_Seg_Cod,Gra_Seg_Nom,Gra_Seg_Est,Seg_Esp_Nom FROM grado_seg,segunda_especialidad WHERE grado_seg.Segunda_Especialidad_Seg_Esp_Cod = segunda_especialidad.Seg_Esp_Cod ORDER BY Gra_Seg_Cod ASC";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
//$mostrar=mysqli_fetch_array($resultado);
while($mostrar=mysqli_fetch_array($resultado)){
	if($mostrar['Gra_Seg_Est']==0)
		continue;
?>
												<tr>
												<td><?php echo $mostrar['Gra_Seg_Cod']?></td>
												<td><?php echo $mostrar['Gra_Seg_Nom']?></td>
                        <?php
                          $var = "Habilitado";
                          if($mostrar['Gra_Seg_Est']==2)
                              $var = "Desistido";
                        ?>
												<!--<td><//?php echo $mostrar['Gra_Seg_Est']?></td>-->
                        <td><?php echo $var?></td>
												<td><?php echo $mostrar['Seg_Esp_Nom']?></td>



												<td>
																<?php $guia = $mostrar['Gra_Seg_Cod']?>
 																		<!--<input type="hidden" name="method" value="delete">-->
																		<!--<input type="hidden" name="product_id" value="">-->
																		<button type="button">

																		<a href="../controllers/Modificar_Grado_Segunda.php?num=<?php echo $mostrar['Gra_Seg_Cod']?>"><i class="fa fa-trash" aria-hidden="true">Modificar</i>

																		</button>
																		<button onclick="deshabilitar(<?php echo $mostrar['Gra_Seg_Cod']?>)">
																				<i class="fa fa-trash" aria-hidden="true">Deshabilitar</i>
																		</button>

												</td>
												</tr>
<?php
}
?>
										</tbody>
								</table>
				</div>
		</div>
 </div>
</div>
</div>

<center>
		<button type="submit" class="btn btn-danger"onclick="window.location.href='grados_segunda_especialidad_agregar.php'">Atras</button>
</center>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
				integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
				crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
				integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
				crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
				integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
				crossorigin="anonymous"></script>
</body>
</html>
