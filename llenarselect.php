<?php

include "parametros.php";

function MostrarHerramienta($bdConexion){
	$sqlHerramienta = "SELECT id,nombre FROM herramientas";
	$rsHerramienta = $bdConexion->consultaSQL($sqlHerramienta);
	while($fila=mysqli_fetch_array($rsHerramienta)){
		
		print "<option value='".$fila[0]."'>".$fila[1]."</option>";
	}
}

function MostrarUsuario($bdConexion){
	$sqlUsuario = "SELECT usuario_id FROM usuarios WHERE nombre='Davi'";
	$rsUsuario = $bdConexion->consultaSQL($sqlUsuario);
	while($fila=mysqli_fetch_array($rsUsuario)){
		
		print "$fila[0]";
	}
}

function MostrarEmpleado($bdConexion){
	$sqlEmpleado = "SELECT id,nombres FROM empleados";
	$rsEmpleado = $bdConexion->consultaSQL($sqlEmpleado);
	while($fila=mysqli_fetch_array($rsEmpleado)){
		print "<option value='".$fila[0]."'>".$fila[1]."</option>";
	}
}

?>