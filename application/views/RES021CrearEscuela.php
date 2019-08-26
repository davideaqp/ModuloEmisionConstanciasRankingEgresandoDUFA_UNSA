<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->
    <!-- Estilo CSS local -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <title>Módulo de Emisión de Constanias de Ranking y Egresado</title>
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
              <a class="dropdown-item" href="facultad_agregar.php">Facultad</a>
              <a class="dropdown-item" href="escuela_agregar.php">Escuela</a>
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


    <div class="container">

		<div class="card text-center">
		  <div class="card-header">
			<ul class="nav nav-pills card-header-pills">
			  <li class="nav-item">
				<a class="nav-link active" href="../controllers/RES021_MostrarEscuela.php">Ver Escuelas</a>
			  </li>
			  
			  <li class="nav-item">
				<a class="nav-link disabled" href="escuela_agregar.php">Agregar Escuela</a>
			  </li>
			</ul>
		  </div>
		
		  <div class="card-body">
			<h5 class="card-title">NUEVA ESCUELA</h5>
			<h6 class="card-subtitle mb-2 text-muted">Llene el formulario para agregar nueva escuela</h6>
			
			
			<form action="../controllers/RES021Anadir.php" method="post">
			  <div class="form-group row">
				<label for="escuelaNombre" class="col-sm-2 col-form-label">Nombre de Escuela</label>
				<div class="col-sm-10">
				  <input type="text" name="nomEsc" class="form-control" id="escuelaNombre" placeholder="Nombre de Escuela">
				</div>
			  </div>
			  <div class="form-group row">
				<label for="escuelaCodigo" class="col-sm-2 col-form-label">Acronimo</label>
				<div class="col-sm-10">
				  <input type="text" name="acrEsc" class="form-control" id="escuelaCodigo" placeholder="Codigo de Escuela">
				</div>
			  </div>
			  
			  <div class="form-group row">
				<label for="escuelaFacultad" class="col-sm-2 col-form-label">Estado</label>
				<div class="col-sm-10">
				<select type="number" name="estEsc" class="custom-select">
				  <option selected>Estado</option>
				  <option value="1">Habilitado</option>
				  <option value="2">Deshabilitado</option>
				  <option value="3">Eliminado</option>
				</select>
				</div>
				</div>

				<div class="form-group row">
				<label for="escuelaFacultad" class="col-sm-2 col-form-label">Facultad</label>
				<div class="col-sm-10">
				<select type="number" name="facEsc" class="custom-select">
				  <option selected>Estado</option>
				  <option value="1">Habilitado</option>
				</select>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
