<?php

class Conexion
{	//creando variables de conexión
	private $servidor;
	private $baseEsquema;
	private $usuario;
	private $password;
	private $link;
	
	//creando constructor
	function __construct($Servidor, $BaseEsquema, $Usuario, $Password)
	{
		$this->link = mysqli_connect($Servidor, $Usuario, $Password, $BaseEsquema);
		
		if(!$this->link){
			echo "<h1>HAY UN ERROR EN LA CONEXION</h1>";
		}//cerrando if
	}//cerrando construct
	
	//creando function de cerrarConexion
	
	public function cerrarConexion()
	{
		return (mysqli_close($this->link));
	}//cerrando function de cerrarConexion
	
	//consultaSQL
	function consultaSQL($sql)
	{
		if(!($resultado = mysqli_query($this->link,$sql))){
			echo "<br/>Ha ocurrido un error en la consulta:<br/>".$sql."<br/>";
		}else{
			return($resultado);
		}
	}//cerrando function de consultaSQL
}//llave de cierre de conexion

?>