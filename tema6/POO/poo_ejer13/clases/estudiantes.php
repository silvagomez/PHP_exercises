<?php
require_once "conectar.php";

class Estudiante
{
    private $est;

    public function __construct(){
        $this->est=array();
        
    }
    public function get_Estudiante()
    {
        $sql="select * from estudiante";
        $con=Conectar::conexion();
        $res=mysqli_query($con,$sql);
        while($reg =mysqli_fetch_assoc($res)){
            $this->est[]=$reg;    
        }
        // mysqli_close($con);
        Conectar::cerrarConexion($con);
        return $this->est;
    }  
}

?>