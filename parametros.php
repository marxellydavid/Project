<?php
include "conexion.php";
//colocando parametros de conexión
$servidor = "localhost"; //server
$baseEsquema = "db_inventario"; //base de datos
$usuario = "root"; //user
$password = ""; //contraseña
//instanciando la clase de conexión
$bdConexion = new Conexion($servidor, $baseEsquema, $usuario, $password);//guardando parametros de Conexión
?>