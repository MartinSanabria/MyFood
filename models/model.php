<?php 
    class Modelo{
        private $Modelo;
        private $db;
        private $datos;

        //metodo de constructor
        public function __construct()
        {
            $this->Modelo = array();
            $this->db = new PDO('mysql:host=localhost;dbname=dbr',"root","");
        }
        //insert
        public function insertar($tabla, $data){
            $consulta="insert into ".$tabla." values (null, ". $data . ")";
            $resultado=$this->db->query($consulta);
            if ($resultado){
            return true;
            }else{
            return false;
            }
        }
        //mostrar
        public function mostrar($tabla, $condicion){
            $consul="select * from ".$tabla." where".$condicion.";";
            $resu=$this->db->query($consul);
            while($filas = $resu->fetchAll(PDO::FETCH_ASSOC)){
                $this->datos[]=$filas;
            }
            return $this->datos;
        }
        //update
        public function actualizar ($tabla, $data, $condicion){
            $consulta="update ".$tabla. " set ". $data." where ".$condicion;
            $resultado=$this ->db->query($consulta) ;
            if ($resultado) {
                return true;
            }else{
                return false;
            }
        }
        //eliminar
        public function eliminar($tabla, $condicion){
            $eli="delete from ".$tabla." where ".$condicion;
            $res=$this->db->query ($eli);
            if ($res) {
            return true;
            }else {
            return false;
            }
            
        }
        

    }


?>