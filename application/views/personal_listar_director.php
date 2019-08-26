<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <title>Módulo de Emisión de Constancias de Ranking y Egresado</title>
	
  </head>
  <body>
    <!--Menú de Navegación-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">DUFA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <!--Menu de Documentos-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Documentos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Ranking</a>
              <a class="dropdown-item" href="#">Constancias</a>
            </div>     
          </li>
          <!--Menu de configuración-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Configuración
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Datos</a>
              <a class="dropdown-item" href="#">Personal</a>
              <a class="dropdown-item" href="#">Facultad</a>
              <a class="dropdown-item" href="#">Escuela</a>
            </div>     
          </li>
          </ul>
          <!--Menu de busqueda-->
          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!--Contendido para agregar las Facultades-->

<div class="container">      
	<div class="card text-center">
		<div class="card-header">
			<ul class="nav nav-pills card-header-pills">
				<li class="nav-item">
					<a class="nav-link active" href="personal_listar_director.php">Ver Directores</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="personal_agregar_director.php">Nuevo</a>
				</li>
			</ul>
		</div>
		<div class="card-body">
			<h5 class="card-title">Directores Registrados</h5>
			<h6 class="card-subtitle mb-2 text-muted">Se muestran los Directores registrados</h6>
                
			<table class="table table-striped">
				<thead>
					
            <th>Codigo</th>
						<th>Nombre</th>
						<th>Estado</th>
            <th>Opciones</th>
				</thead>
				<tbody>
        <?php
        //$consulta = "SELECT `Seg_Esp_Cod`,`Seg_Esp_Nom`,`Seg_Est`,`Esc_Nom` FROM `segunda_especialidad`,`escuela` WHERE  `segunda_especialidad.Escuela_Esc_Cod` = `escuela.Esc_Cod`";
        $consulta = "SELECT * FROM `director`";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        //$mostrar=mysqli_fetch_array($resultado);
        while($mostrar=mysqli_fetch_array($resultado)){
          if($mostrar['Dir_Est']==0)
            continue;
        ?>
					<tr>
            <td><?php echo $mostrar['Dir_Cod']?></td>
            <td><?php echo $mostrar['Dir_Nom']?></td>
            <td><?php echo $mostrar['Dir_Est']?></td>            
            <td>
            <button type="button">
              <a href="../controllers/Modificar_Director.php?num=<?php 
              echo $mostrar['Dir_Cod']?>"><i class="fa fa-trash" aria-hidden="true">Modificar</i>
            </button>
            <button onclick="deshabilitar(<?php echo $mostrar['Dir_Cod']?>)">
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Eliminar director?</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			 El Director sera eliminado
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<form action="" method="post">
				<input type="hidden" name="method" value="delete">
				<input type="hidden" name="director_id" value="<?= $product->id ?>">
				
				<button type="submit" class="btn btn-primary">guardar Cambios</button>
			</form>
			
			
		  </div>
		</div>
	</div>
</div>

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


