<?php
include 'capa.php';
include("save_objeto.php");


switch ($_POST["opc"]) {

	case '1': 
	$salvarE = new ciie();
	$salvarE->insertEmprendedor($_POST["nombre"],$_POST["apellido"],$_POST["direccion"],$_POST["movil"],$_POST["email"],$_POST["profesion"]);
	header("Location:emprendedor.php");
	break;

	case '2': 
	$salvarE = new ciie();
	$salvarE->insertProyecto($_POST["fecha"],$_POST["nombre"],$_POST["estatus"],$_POST["idempre"]);
	header("Location:proyectos.php");
	break;

	default:
		# code...
	break;
}






?>
