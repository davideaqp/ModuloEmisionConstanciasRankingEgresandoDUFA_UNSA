<?php
  class Segunda_Especialidad_model{
    private $db;
    private $especialidades;
    //private $pdo;

    public function __construct(){
      try{
        require_once("Conexion.php");

        $this->db = Conexion::conectar();
        $this->especialidades = array();

        //$this->pdo = Conexion::conectar();
        //$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(Exception $e){
        die($e->getMessage());
      }

    }

    public function getEspecialidades(){
      try
          {
            $consulta = $this->db->query("SELECT * FROM segunda_especialidad");

            while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
              $this->especialidades[] = $filas;
            }

            return $this->especialidades;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
  }

  public function crearSegundaEspecialidad($nom,$est,$esc){
    try
        {
          $sql = "INSERT INTO `segunda_especialidad` (`Seg_Esp_Cod`, `Seg_Esp_Nom`,`Seg_Esp_Est`,`Escuela_Esc_Cod`) VALUES (NULL, '$nom', '1', '$esc');";
          $consulta = $this->db->query($sql);
      }
      catch(Exception $e)
      {
          die($e->getMessage());
      }
  }
}
?>
