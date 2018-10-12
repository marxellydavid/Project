<?php
include "llenarselect.php";

if(isset($_REQUEST))
{
	$txtHerramienta = (isset($_REQUEST['herramientaid']) ? $_REQUEST['herramientaid']: "");
	$txtUsuario = (isset($_REQUEST['usuarioid']) ? $_REQUEST['usuarioid']:"");
	$txtEmpleado = (isset($_REQUEST['empleadoid']) ? $_REQUEST['empleadoid']: "");
	$txtFechaPrestamo = (isset($_REQUEST['fprestamo']) ? $_REQUEST['fprestamo']: "");
	$txtFechaDevolucion = (isset($_REQUEST['fdevolucion']) ? $_REQUEST['fdevolucion']: "");
	$txtCantidad = (isset($_REQUEST['cantidad']) ? $_REQUEST['cantidad']: "");
	//$txtPrestamo = (isset($_REQUEST['prestamo']) ? $_REQUEST['prestamo']: "");
	$txtObservaciones = (isset($_REQUEST['observaciones']) ? $_REQUEST['observaciones']: "");
	$PrestamoID = (isset($_REQUEST['id']) ? $_REQUEST['id']: 0);
}
$estado = 0;

if(isset($_REQUEST['btnGuardar']))
{
	if($PrestamoID==0)
	{
		$sqlPrestamo="INSERT INTO prestamos(herramienta_id, usuario_id, empleado_id, fecha_prestamo, fecha_devolucion, cantidad,observaciones)
		VALUES('$_POST[slcHerramienta]','$_POST[slcUsuario]','$_POST[slcEmpleado]','$txtFechaPrestamo','$txtFechaDevolucion','$txtCantidad','$txtObservaciones')";
	}else{
	$sqlPrestamo="UPDATE prestamos SET
	herramienta_id='$_POST[slcHerramienta]',
	usuario_id='$_POST[slcUsuario]',
	empleado_id='$_POST[slcEmpleado]',
	fecha_prestamo='$txtFechaPrestamo',
	fecha_devolucion='$txtFechaDevolucion',
	cantidad='$txtCantidad',
	observaciones='$txtObservaciones'
	WHERE id = $PrestamoID";
	
	//regresando a su valor de vacio
	$PrestamoID=0;
	}
	
$rsPrestamo = $bdConexion->consultaSQL($sqlPrestamo);
//enviando script de almacenamiento correcto
}

?>


<!DOCTYPE html>
<html lang="es">
<html>
<head>
<title></title>
</head>
<meta charset="utf-8">
<body>

<form action="" name="frmPrestamos" id="frmPrestamos" method="POST" autocomplete="off">
<input type="hidden" name="id" value="id">
<p>HERRAMIENTA</p>
<select name="slcHerramienta" data-rule="true" style="width: 330px; height: 30px;" id="slcHerramienta"
onchange="mostrarHerramienta($('#slcHerramienta').val();">
<option value="-1">::.Seleccionar.::</option>
<?php MostrarHerramienta($bdConexion) ?>
</select><!--Fin de select-->
<p>USUARIO</p>
<select name="slcUsuario" data-rule="true" style="width: 330px; height: 30px;" id="slcUsuario"
onchange="mostrarUsuario($('#slcUsuario').val();">
<option value="-1">::.Seleccionar.::</option>
<?php MostrarUsuario($bdConexion) ?>
</select><!--Fin de select-->		
<p>EMPLEADO</p>
<select name="slcEmpleado" data-rule="true" style="width: 330px; height: 30px;" id="slcEmpleado"
onchange="mostrarEmpleado($('#slcEmpleado').val();">
<option value="-1">::.Seleccionar.::</option>
<?php MostrarEmpleado($bdConexion) ?>
</select><!--Fin de select--><br>
Fecha de Préstamo:<input type="date" name="fprestamo"><br>
Fecha de Devolución:<input type="date" name="fdevolucion"><br>
Cantidad:<input type="text" name="cantidad"><br>
<!--Prestamo:<input type="text" name="prestamo"><br>-->
Observaciones:<input type="text" name="observaciones"><br>
<input type="submit" name="btnGuardar" value="REGISTRAR">
</form>

</body>
</html>