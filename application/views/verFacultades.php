<!doctype html>
<html lang="en">
<head>
    <title>DUFA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <center><h3 class="text-uppercase">Facultades</h3></center>
                <table class="table table-striped">
                    <thead>
                    <th>N°</th>
                    <th>codigo</th>
                    <th>nombre</th>
                    <th>numeroEscuelas</th>
                    <th>opciones</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>FIPS</td>
                            <td>Ingenieria de Producción y Servicios</td>
                            <td>7</td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="method" value="delete">
                                    <input type="hidden" name="product_id" value="<?= $product->id ?>">
                                    <button type="submit">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    </tbody>
                </table>

                <?php
                $usuario = "root";
                $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
                $servidor = "localhost";
                $basededatos = "dufa";
                $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
                $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

                $consulta = "SELECT * FROM facultad";
                $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                echo "<table borde='2'>";
                echo "<tr>";
                echo "<th>Fac_Cod</th>";
                echo "<th>Fac_Nom</th>";
                echo "<th>Fac_Acr</th>";
                echo "<th>Fac_Est</th>";
                echo "</tr>";
                while ($columna = mysqli_fetch_array( $resultado ))
                {
                echo "<tr>";
                echo "<td>" . $columna['Fac_Cod'] . "</td><td>" . $columna['Fac_Nom'] . "</td><td>" . $columna['Fac_Acr'] . "</td><td>" . $columna['Fac_Est'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
                ?>
        </div>
    </div>
 </div>
</div>
</div>

<center>
    <button type="submit" class="btn btn-primary"onclick="window.location.href='facultad.php'">Atras</button>
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
