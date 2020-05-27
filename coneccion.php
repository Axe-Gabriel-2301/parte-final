<?php
class coneccion extends mysqli
{
	

	public function __construct()
	{
	$servidor = "localhost",
	$basadatos ="examen05";
	$usuario ="root";
	$passwod ="";
		parent::__cons($servidor, $usuarios, $password, $basadatos);
		$this->query("SET NAMES 'utf8';");
		$this->conect_erno ? die('error en la coneccion') :$error="conectado a ".$basadatos;
		echo $error;
		unset($error)

	}
}
?>