<?php
	spl_autoload_register();
	/*require_once "Config/Autoload.php";
	Config\Autoload::run();*/
	$est=new Models\Estudiantes();
	$est->hola();
	$est->set1("id",3);
	//$id=$est->get("id");
	$datos=$est->view();
	echo $datos['nombre']
	

?>