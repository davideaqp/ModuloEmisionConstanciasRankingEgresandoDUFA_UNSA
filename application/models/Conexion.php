<?php
  class Conexion{
    public static function conectar(){
      try{
        $host = "mysql:host=localhost;";
        $dbname = " dbname=dufa";
        $user = "root";
        $password = "";
        $conexion = new PDO($host.$dbname,$user,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET UTF8");
      }catch(Exception $e){
        die("Error" . $e->getMessage());
        echo "linea del arror".$e->getLine();
      }

      return $conexion;
    }
  }

 ?>
