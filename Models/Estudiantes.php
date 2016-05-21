<?php 
namespace Models;

	 class Estudiantes{
	 	private $id;
	 	private $nombre;
	 	private $edad;
	 	private $promedio;
	 	Private $imagen;
	 	private $id_seccion;
	 	private $fecha;
	 	private $con;

	 	public function _Constructor (){
	 		$this->con= new Conexion();
	 		
	 	}
	 	public function hola(){
	 		echo "asdñlkañlsdkñlsa";
	 	}


	 	public function set1($atributo,$contenido){
	 		$this->$atributo=$contenido;
	 	
	 	}
	 	public function get($atributo){
	 		return $this->$atributo;
	 	}

	 	public function listar(){
	 		$sql="SELECT t1.*, t2.nombre AS nombreSeccion FROM estudiantes
	 		 INNER JOIN secciones t2 
	 		 ON t1.secciones_id_secciones=t2.id_secciones";

	 		$datos= $this->con->consultRetorno($sql);
	 		return $datos;
	 	}
	 	public function agregar(){
	 		$sql="INSERT INTO  estudiantes(id_estudiantes,nombreEstudiante,edadEstudiante,promedioEstudiante,fecha,imagenEstudiante,secciones_id_secciones)
	 			VALUES (null,'{this->$nombre}','{this->$edad}','{this->$promedio}',NOW(),{this->$imagen},{this->$id_secciones})" ;
	 		$this->con->consultaSimple($sql);
	 	}
	 	public function eliminar(){
	 		$sql="DELETE FROM estudiantes 
	 			  where id_estudiantes='{this->$id}'";
	 		$this->con->consultaSimple($sql);
	 	}
	 	public function modificar(){
	 		$sql="UPDATE estudiantes SET nombreEstudiante='{this->$nombre}',edadEstudiante='{this->$edad}',
	 					 promedioEstudiante='{this->$promedio}',id_secciones='{this->$id_seccion}'
	 			  WHERE id_estudiantes='{this->$id}'";
	 		$this->con->consultaSimple($sql);
	 	}
	 	/*public function view(){
	 		$sql="SELECT t1.*, t2.nombreSeccion as nombreSeccion
	 		 FROM estudiantes
	 		  INNER JOIN secciones t2
	 		  ON t2.id_seccion=t1.id_estudiantes
	 	     WHERE t1.id_estudiantes='{this->$id}'";
	 	    $datos= $this->con->consultRetorno($sql);
	 	    $row=mysqli_fetch_assoc($datos);
	 		return $row;
	 	}*/
	 	public function view(){
	 		//echo $id;
	 		$sql="SELECT  * FROM estudiantes
 					INNER JOIN secciones ON estudiantes.secciones_id_secciones=secciones.id_secciones
 					WHERE id_estudiantes='{this->$id}'";
	 	    $datos= $this->$con->consultRetorno($sql);
	 	    $row=mysqli_fetch_assoc($datos);
	 		return $row;
	 	}
	}
?>