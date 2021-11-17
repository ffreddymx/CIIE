<?php

include_once('clases/clasConexion.php');
include_once('clases/clasSquery.php');


/*******************  aqui defines  *****************************/


class ciie
{

	public  $id,$usuario,$password,$nombre,$tipo,$grado;


 function __construct() {

 		//$this->marca="";
    }


	public function insertEmprendedor($nombre,$apellido,$direccion,$movil,$email,$profesion)
	{
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->direccion = $direccion;
			$this->movil = $movil;
			$this->profesion = $profesion;
			$this->email = $email;

			$obj_cliente=new sQuery();
			$query="INSERT into emprendedor(Nombre,Apellido,Direccion,Movil,Profesion,Mail)
values('$this->nombre','$this->apellido','$this->direccion','$this->movil','$this->profesion','$this->email')";
			$obj_cliente->executeQuery($query);
			return $obj_cliente->getAffect();
	}

	public function insertAsesor($nombre,$apellido,$direccion,$movil,$email,$profesion)
	{
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->direccion = $direccion;
			$this->movil = $movil;
			$this->profesion = $profesion;
			$this->email = $email;

			$obj_cliente=new sQuery();
			$query="INSERT into asesor(Nombre,Apellido,Direccion,Movil,Profesion,Mail)
values('$this->nombre','$this->apellido','$this->direccion','$this->movil','$this->profesion','$this->email')";
			$obj_cliente->executeQuery($query);
			return $obj_cliente->getAffect();
	}



	public function insertProyecto($fecha,$nombre,$estatus,$idempre)
	{
			$this->fecha = $fecha;
			$this->nombre = $nombre;
			$this->estatus = $estatus;
			$this->idempre = $idempre;

			$obj_cliente=new sQuery();
			$query="INSERT into proyectos(Nombre,Fecha,Estatus,idemprendedor)
values('$this->nombre','$this->fecha','$this->estatus','$this->idempre')";
			$obj_cliente->executeQuery($query);
			return $obj_cliente->getAffect();
	}

	 
	public function insertAsignaAsesor($asesor,$proyecto)
	{
			$this->asesor = $asesor;
			$this->proyecto = $proyecto;

			$obj_cliente=new sQuery();
			$query="INSERT into asepro(idpro,idase)
								values('$this->proyecto','$this->asesor')";
			$obj_cliente->executeQuery($query);
			return $obj_cliente->getAffect();
	}


	 public function getEmprendedor()
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT *  FROM  emprendedor  ");
		return $obj_cliente->fetchAll();
		}	 


		public function getAsesor()
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT *  FROM  asesor  ");
		return $obj_cliente->fetchAll();
		}	


		public function getProyecto()
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT *  FROM  proyectos  ");
		return $obj_cliente->fetchAll();
		}	


	  public  function eliminarEmprendedor($var)	// elimina el embarque comlepleto con el folio
		{
			$obj_cliente=new sQuery();
			$query="DELETE from emprendedor where id ='$var' ";
			$obj_cliente->executeQuery($query); // ejecuta la consulta para  borrar el cliente
			return $obj_cliente->getAffect(); // retorna todos los registros afectados
		}

	  public  function eliminarProyecto($var)	// elimina el embarque comlepleto con el folio
		{
			$obj_cliente=new sQuery();
			$query="DELETE from proyectos where id ='$var' ";
			$obj_cliente->executeQuery($query); // ejecuta la consulta para  borrar el cliente
			return $obj_cliente->getAffect(); // retorna todos los registros afectados
		}

}//fin
?>
