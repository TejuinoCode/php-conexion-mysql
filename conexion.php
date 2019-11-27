<?php 

/**
 * Conectar PHP 7 a MySQL
 * @author: @TejuinoCode
**/

// Definimos las variables necesarias para la conexion
$usuario = "username";
$password = "userpassword";
$servidor = "localhost";
$basededatos = "databasename";

// Conexion a MySQL
$conexion = mysqli_connect($servidor, $usuario, $password) or die ("Error de CONEXION");
// Conexion a la base de datos
$db = mysqli_select_db($conexion, $basededatos) or die ("Error DATABASE");

//Construimos la consulta y la ejecutamos
$consulta = "SELECT * FROM table_name LIMIT 10";
$resultado = mysqli_query($conexion, $consulta) or die ("Error CONSULTA");


// Creamos una tabla con codigo embebido PHP y Etiquetas HTML
echo "<table>";
echo "<tr>";
    echo "<th> Campo 1 </th>";
    echo "<th> Campo 2 </th>";
    echo "<th> Campo n </th>";
echo "</tr>";
// Converimos nuestro result a un array para mostrarlos en la tabla
while($columna = mysqli_fetch_array($resultado))
{
    echo "<tr>";
        echo "<td>".$columna['campo_table']."</td><td>".$columna['campo_table']."</td>";
    echo "</tr>";
}
echo "</table>";

// Cerramos la conexion
mysqli_close( $conexion );

?>