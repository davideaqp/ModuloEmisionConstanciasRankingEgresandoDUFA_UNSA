<?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "dufa";
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
$numero = $_GET['num'];
$sentencia = "SELECT * FROM `director` WHERE`Dir_Cod`='".$numero."'";
$resultado = mysqli_query($conexion, $sentencia) or die (mysql_error());
$filas=mysqli_fetch_assoc($resultado);
$contenido = [$filas['Dir_Cod'],$filas['Dir_Nom'],$filas['Dir_Est']];

$sentenciaEscuelas = "SELECT Esc_Cod,Esc_Nom FROM `escuela` WHERE escuela.Esc_Est=1" ;

$consultaNombreEscuela = "SELECT Esc_Nom FROM `escuela` WHERE escuela.Esc_Cod='$contenido[3]'";
$resultadoNombreEscuela = mysqli_query($conexion, $consultaNombreEscuela) or die (mysql_error());
$resultadoEscuelas = mysqli_query($conexion, $sentenciaEscuelas) or die (mysql_error());
$resultado = mysqli_query($conexion, $sentencia) or die (mysql_error());
$filas=mysqli_fetch_assoc($resultado);
$pEscuela = mysqli_fetch_assoc($resultadoNombreEscuela);
$escuelaM = [$pEscuela['Esc_Nom']];
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
			function pregunta(){
    	if (confirm('¿Estas seguro de enviar este formulario?')){
      	document.actualizar.submit()
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
      <center>
        <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
              <li class="nav-item">
                <a class="btn btn-danger" href="../views/personal_listar_director.php">Ver Directores</a>
              </li>
            </ul>
            </div>
              <div class="card-body">
                <h5 class="card-title">Modificar</h5>
                <h6 class="card-subtitle mb-2 text-muted">Llene el formulario Modificar Director</h6>
								<form name="actualizar" action="Actualizar_Director.php" method="post">

                  <div class="form-group row">
                  <label for="segundaEspecialidadcodigo" class="col-sm-2 col-form-label">Codigo:</label>
                  <div class="col-sm-10">
                  <input type="text" name="codigodir" class="form-control" id="codigodir" placeholder="codigo" value="<?php echo $contenido[0] ?>" readonly>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="nombreSegEspecialidad" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-10">
									<input type="text" name="nombreDir" class="form-control" id="nombreDir" placeholder="Nombre de Segunda Especialidad" value="<?php echo $contenido[1] ?>">
                  </div>
                </div>            


            <button type="reset" class="btn btn-danger">Cancelar</button>
            <button type="button" onclick="pregunta()" class="btn btn-danger">Aceptar</button>
            </form>
          </div>
        </div>
      </center>
    </div>
   
  </body>
</html>
