<?php namespace Models;

	 class Secciones{

	 private $id;
	 private $nombre;
	 private $con;

	 public function _construct(){
	 	$this->con= new Conexion();
	 }
	 public function set($atributo,$contenido){
	 		this->$atributo=$contenido;
	 	
	 }
	 public function get($atributo){
	 		return this->$atributo;
	 }
	 public function listar(){
	 	$sql="SELECT * FROM secciones";
	 	$datos= $this->con->consultRetorno($sql);
	 		return $datos;
	 }
	 public function agregar(){
	 	$sql="INSERT INTO secciones(id_seccion,nombre_seccion)
	 		   VALUES (null,'{this->$nombre}')";
	    $this->con->consultaSimple($sql);
	 }
	 public function eliminar(){
	 	$sql="DELETE Secciones WHERE
	 	 	 id_secciones='{this->$id}'"
	 	$datos= $this->con->consultRetorno($sql);
	 }	
	 public function modificar(){
	 		$sql="UPDATE FROM secciones SET nombre_secciones='{this->$nombre}'
	 		WHERE id_seccion='{this->$id}'";
	 		$this->con->consultaSimple($sql);
	 	}
	 public function view(){
	 		$sql="SELECT * FROM secciones 
	 		    where id_seccion='{this->$id}'";
	 	    $datos= $this->con->consultRetorno($sql);
	 	    >$row=mysqli_fetch_assoc($datos);
	 		return $row;
	 }
	}
?>