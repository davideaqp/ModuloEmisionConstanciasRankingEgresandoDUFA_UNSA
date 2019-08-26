
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">

    <title>
    Módulo de Emisión de Constancias de Ranking y Egresado de la DUFA
    </title>
    <script src="../../public/js/jquery-1.11.3.min.js"></script>

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
	<div class="card text-center">
		<div class="card-header">

		<ul class="nav nav-pills card-header-pills">
              <li class="nav-item">
                <a class="btn btn-danger" href="Ver_egresado.php">Ver Egresados</a>
              </li>
            </ul>
		</div>

		<div class="card-body">
			<h5 class="card-title">REGISTRO DE PREGRADO</h5>
			<h6 class="card-subtitle mb-2 text-muted"></h6>


			<form method="post" action="../controllers/RES020_RegistrarEgresado.php">
				<div class="form-group row">
					<label for="escuelaNombre" class="col-sm-2 col-form-label">Numero Correlativo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="correlativo" id="correlativo" placeholder="Nº Correlativo">
					</div>
				</div>

				<div class="form-group row">
					<label for="escuelaFacultad" class="col-sm-2 col-form-label">Tipo de Egresado</label>
					<div class="col-sm-10">
						<select class="custom-select" name="tipoEgresado" id="tipoEgresado">
						  <option selected>Seleccionar Tipo</option>
						  <option value="1">Pregrado</option>
						  <option value="2">Segunda Especialidad</option>
						  <option value="3">Complementacion Academica</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="escuelaNombre" class="col-sm-2 col-form-label">Nombre de Egresado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombreEgresado" id="nombreEgresado" placeholder="Nombre Completo">
					</div>
				</div>

			  <div class="form-group row">
				<label for="escuelaCodigo" class="col-sm-2 col-form-label">Facultad</label>
				<div class="col-sm-10">
				  <select class="custom-select" name="facultad" id="facultad">
				  /*
				  <option selected>Seleccionar Facultad</option>

				  <?php
					$usuario = "root";
					$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
					$servidor = "localhost";
					$basededatos = "dufa";
					$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
					$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
					$query = "SELECT * FROM `facultad`";
					$resultado3 = mysqli_query ($conexion, $query);
					?>
					<?php
					while ( $fila = mysqli_fetch_array ( $resultado3 ) ) {?>
					<option value=<?php echo $fila['Fac_Cod'];?>><?php echo $fila['Fac_Nom'];?> </option>
					<?php

                    }

					?>
				</select>
				</div>
			  </div>


			  <div class="form-group row">
				<label for="escuelaCodigo" class="col-sm-2 col-form-label">Escuela</label>
				<div class="col-sm-10">
                <div id="select2lista"></div>

				</div>
			  </div>

			  <div class="form-group row">
				<label for="escuelaCodigo" class="col-sm-2 col-form-label">Titulo a optar</label>
				<div class="col-sm-10">
				  <select class="custom-select" name="Titulo" id="Titulo">
				  <?php
					$query1 = "SELECT * FROM `grado`";
					$resultado2 = mysqli_query ($conexion, $query1);
					?>
					<?php
					while ( $fila = mysqli_fetch_array ( $resultado2 ) ) {?>
					<option value=<?php echo $fila['Gra_Cod'];?>><?php echo $fila['Gra_Nom'];?> </option>
					<?php

                    }
					?>
					</select>
				</div>
			  </div>

			  <div class="form-group row">
				<label for="escuelaCodigo" class="col-sm-2 col-form-label">Creditos</label>
				<div class="col-sm-10">
				  <input type="number" class="form-control" name="Creditos" id="Creditos" placeholder="">
				</div>
			  </div>
			  <div class="form-group row">
				<label for="escuelaCodigo" class="col-sm-2 col-form-label">Fecha Egreso</label>
				<div class="col-sm-10">
				  <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Codigo de Escuela">
				</div>
			  </div>


			  <button type="submit" class="btn btn-primary">Cancelar</button>

			  <button type="submit" class="btn btn-primary">Aceptar</button>
			</form>


		  </div>
		</div>


    </div>



<center>
    <button type="submit" class="btn btn-primary"onclick="window.location.href='../../index.php'">Atras</button>
</center>


  </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#facultad').val(1);
		recargarLista();

		$('#facultad').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos_egresado.php",
			data:"continente=" + $('#facultad').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}

</script>



  </body>
</html>
