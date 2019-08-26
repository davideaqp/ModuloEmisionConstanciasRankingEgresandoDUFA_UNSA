<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
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
            <a class="nav-link" href="./index.php">INICIO <span class="sr-only">(current)</span></a>
          </li>
          <!--Menu de Documentos-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ESTUDIANTES
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="application/views/registrar_egresado.php">Registrar Egresado</a>
              <a class="dropdown-item" href="application/views/registrar_pregrado.php">Registrar Pregrado</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              DOCUMENTOS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="application/views/ranking_emision_pregrado.php">Emisión de Ranking</a>
              <a class="dropdown-item" href="application/views/constancia_ver_datos.php">Emisión de Constancias</a>
            </div>
          </li>
          <!--Menu de configuración-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CONFIGURAR
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="application/views/datos_excel.php">Subir Excel</a>
              <a class="dropdown-item" href="application/views/personal.php">Personal</a>
              <a class="dropdown-item" href="application/views/facultad_agregar.php">Facultad</a>
              <a class="dropdown-item" href="application/views/escuela_agregar.php">Escuela</a>
              <a class="dropdown-item" href="application/views/especialidad_agregar.php">Especialidad</a>
              <a class="dropdown-item" href="application/views/grado_agregar.php">Grados</a>
              <a class="dropdown-item" href="application/views/segunda_especialidad_agregar.php">Segunda Especialidad</a>
              <a class="dropdown-item" href="application/views/grados_segunda_especialidad_agregar.php">Grados Segunda Especialidad</a>

            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!--Fin del Menú de Navegación-->

    <div class="card text-center">
      <div class="card-header">
        <h2>
        Módulo de Emisión de Constancias de Ranking y Egresado de la DUFA
        </h>
      </div>
      <div class="card-body">
        <img src="public/img/index.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="card-footer text-muted">
        <!-- Footer -->
        <footer class="page-footer font-small blue">

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2019 Copyright: Equipo EPISDUFA - UNSA
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>
