<?php
	 namespace Models;
	 class Conexion{
	 	private $datos=array(
	 		"host"=>"localhost",
	 		"user"=>"root",
	 		"pw"=>"",
	 		"bd"=>"colegio"
	 		);
	 	private $con;
	 	public function _Construct (){
	 		$this->con= new \mysqli ($this->datos['host'],$this->datos['user'],
	 			$this->datos['pw'],$this->datos['bd'] );
	 	}
	 	public function consultaSimple ($sql){
	 		$this->con->query($sql);
	 	}
	 	public function consultRetorno ($sql){
	 		$datos=$this->$con->query($sql);
	 		return $datos;
	 	}
	 }
?>