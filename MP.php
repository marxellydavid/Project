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
	$IDUsuario = (isset($_REQUEST['UserID']) ? $_REQUEST['UserID']: 0);
	$PrestamoID = (isset($_REQUEST['id']) ? $_REQUEST['id']: 0);
}
$estado = 0;

if(isset($_REQUEST['btnGuardar']))
{
	if($PrestamoID==0)
	{
		$sqlPrestamo="INSERT INTO prestamos(herramienta_id, usuario_id, empleado_id, fecha_prestamo, fecha_devolucion, cantidad,observaciones)
		VALUES('$_POST[slcHerramienta]','$IDUsuario','$_POST[slcEmpleado]','$txtFechaPrestamo','$txtFechaDevolucion','$txtCantidad','$txtObservaciones')";
	}else{
	$sqlPrestamo="UPDATE prestamos SET
	herramienta_id='$_POST[slcHerramienta]',
	usuario_id='$IDUsuario',
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

<! doctype html>
<html lang="es">
<html>
<head>
<meta charset="UTF8">
<meta name="viewport" content="width=device-width">
<title>Menú de sistema de herramientas</title>

<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" type="text/css">

<script src="plugins/bootstrap/js/jquery-3.1.1.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.js"></script>
</head>
<meta charset="utf-8">
<body>

<form action="" name="frmPrestamos" id="frmPrestamos" method="POST" autocomplete="off">
<!--hiddens-->
<input type="hidden" name="id" value="id">
<!--hidden de user-->
<input type="text" name="UserID" id="UserID" value="<?php MostrarUsuario($bdConexion) ?>">

<p>HERRAMIENTA</p>
<select name="slcHerramienta" data-rule="true" style="width: 330px; height: 30px;" id="slcHerramienta"
onchange="mostrarHerramienta($('#slcHerramienta').val();">
<option value="-1">::.Seleccionar.::</option>
<?php MostrarHerramienta($bdConexion) ?>
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

<?php

/*<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<a href="#" class="navbar-brand">Sección principal</a>
<button aria-expanded="false" class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">

<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

</div>

<div class="navbar-collapse collapse" id="navbar-main">
<ul class="nav navbar-nav">
<li>
<a href="#">Otra sección</a>
</li>
<!--primer menú desplegable-->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown"
href="#" id="themes">SECCIÓN DE HERRAMIENTAS<span class="caret"></span></a>

<ul class="dropdown-menu" aria-labelledby="themes">
<li><a href="#">TIPOS DE HERRAMIENTAS</a></li>
<li><a href="#">SOLICITAR PRÉSTAMO</a></li>
</ul>
</li>
<!--Segundo menú desplegable-->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown"
href="#" id="themes">CONÓCENOS<span class="caret"></span></a>

<ul class="dropdown-menu" aria-labelledby="themes">
<li><a href="#">NUESTRA VISIÓN</a></li>
<li><a href="#">NUESTRA MISIÓN</a></li>
<li><a href="#">UN POCO DE NUESTRA HISTORIA</a></li>
</ul>
</li>

<!--Tercer menú desplegable-->

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown"
href="#" id="themes">MÁS<span class="caret"></span></a>

<ul class="dropdown-menu" aria-labelledby="themes">
<li><a href="LOGIN_SP1.php">SALIR DEL SISTEMA</a></li>
</ul>
</li>

</ul>
</div>
</div>
</nav>*/

?>

</body>
</html>