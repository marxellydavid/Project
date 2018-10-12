<?php
include "parametros.php";
if(isset($_REQUEST))
{
	$txtNombre = (isset($_REQUEST['Nombre']) ? $_REQUEST['Nombre']: "");
	$txtTipo = (isset($_REQUEST['Tipo']) ? $_REQUEST['Tipo']:"");
	$txtExistencia = (isset($_REQUEST['Existencia']) ? $_REQUEST['Existencia']: "");
	$HerramientaID = (isset($_REQUEST['id']) ? $_REQUEST['id']: 0);
}
$estado = 0;

if(isset($_REQUEST['btnGuardar']))
{
	if($HerramientaID==0)
	{
		$sqlProceso="INSERT INTO herramientas(nombre, tipo_id, existencia)
		VALUES('$txtNombre','$txtTipo', '$txtExistencia')";
	}else{
	$sqlProceso="UPDATE herramientas SET
	nombre='$txtNombre',
	clave='$txtClave'
	WHERE id = $HerramientaID";
	
	//regresando a su valor de vacio
	$HerramientaID=0;
	}
	
$rsProceso = $bdConexion->consultaSQL($sqlProceso);
//enviando script de almacenamiento correcto
print "<script>alert('Registro almacenado correctamente');</script>";
}

?>

<!DOCTYPE html>
<html lang="es">
<html>
<head>
<title></title>
</head>
<body>

<form action="" name="frmHerramientas" method="POST" autocomplete="off">
<input type="hidden" name="id" value="id">
Nombre:<input type="text" name="Nombre" placeholder="Nombre"><br>
Tipo:<input type="text" name="Tipo" placeholder="Tipo"><br>
Existencia:<input type="text" name="Existencia" placeholder="Existencia"><br>
<input type="submit" name="btnGuardar" value="REGISTRAR HERRAMIENTA">
</form>

</body>
</html>