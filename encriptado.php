<?php
/*session_start();
if(isset($_REQUEST['btnIngresar'])){
	}*/
$nombre = $_POST['txtNombre'];
$clave = $_POST['txtClave'];

//volviendo a conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "db_inventario");
$consulta = "SELECT * FROM usuarios WHERE nombre='$nombre' AND clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if($filas>0){
	header("Location:MP.php");
}else{
	print "<script>alert('¿Qué intenta hacer?, tiene una clave y/o usuario incorrecto/s');</script>";
	print "<script>alert('Vuelve al form principal');</script>";
	echo "<a href='LOGIN_SP1.php'> Vaya aquí tiene el link </a>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

if(isset($_REQUEST["cerrar"])){
	session_destroy();//destruyendo sesión
	header("Location:LOGIN_SP1.php");//redirigiendo a LOGIN
}

/*
//PASSWORD VERIFY	
$txtClave = '123';
$claveEncript = password_hash($txtClave, PASSWORD_BCRYPT);

$prueba = '123';

if(password_verify($prueba, $claveEncript)){
	
	echo "Clave Correcta, puede acceder";
}else{
	
	echo "¿Qué intenta hacer?, tiene una clave incorrecta";
	
}//fin del if
*/

?>