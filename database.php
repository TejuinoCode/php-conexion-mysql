<?php 

require_once("config.php");

class BaseDeDatos
{
    protected $conexion;
    protected $db;
    protected $conectar;

    public function conectar()
    {
        $this->conexion = mysqli_connect(HOST, USER, PASS, DBNAME);

        if(!$this->conexion) DIE ("ERROR DE CONEXION:");
            $this->db = mysqli_select_db($this->conexion, DBNAME);

        if(!$this->db) DIE ("ERROR DE BASE DE DATOS: ".DBNAME);
        
        return true;
    }


    public function desconectar()
    {
        if ($this->conexion) {
            mysqli_close($this->conexion);
        }
    }


    public function select($tabla)
    {
        $query = "SELECT * FROM ".$tabla;

        $result = mysqli_query($this->conexion, $query);

        if(!$result) echo "ERROR EN LA CONSULTA";

            while($columna = mysqli_fetch_array($result))
            {
                echo "Columna: ".$columna['campo_tabla']."<br>";
            }

    }

}


