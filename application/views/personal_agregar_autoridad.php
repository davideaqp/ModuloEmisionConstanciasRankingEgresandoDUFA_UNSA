<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <title>
    Módulo de Emisión de Constancias de Ranking y Egresado de la DUFA
    </title>
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
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!--Fin del Menú de Navegación-->

    <div class="container">
      <center>
        <!--Contendido para agregar las Operador-->
        <div class="container">
          <center>
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">Agregar una nueva Autoridad</h5>
                <h6 class="card-subtitle mb-2 text-muted">Llene el formulario para agregar una nueva Autoridad</h6>
                <form method="post" action="../controllers/AgregarAutoridad.php">
                  <div class="form-group row">
                    <label for="autoridadNombre" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre">
                    </div>
                  </div>
                    <div class="form-group row">
                      <label for="autoridadEstado" class="col-sm-2 col-form-label">Estado:</label>
                      <div class="col-sm-10">
                        <select name="estado"id="estado" class="form-control">
                          <option selected>Escoja Estado</option>
                          <option value="1">Habilitado</option>
                          <option value="2">Deshabilitado</option>
                        </select>
                      </div>
                    </div>
                  <button type="reset" class="btn btn-danger">
                  Cancelar
                  </button>
                  <button type="submit" class="btn btn-danger">
                  Aceptar
                  </button>
                  <button type="button" class="btn btn-danger"onclick="window.location.href='personal.php'">
                  Atrás
                  </button>
                </form>
              </div>
            </div>
          </center>
        </div>
        <!--FIN Menú de Agregar Operador-->
      </center>
      <center>


      </center>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
