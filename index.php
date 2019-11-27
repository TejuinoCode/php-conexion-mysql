<?php

/** 
 * POO CON PHP
 * Conectar a MySQL desde PHP
 * @author @TejuinoCode
 * **/

require_once("database.php");

$db = new BaseDeDatos();

if($db->conectar()){
    $db->select("table_name");
    $db->desconectar();
} else {
    echo "ALGO SALIO MAL";
}