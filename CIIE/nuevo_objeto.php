<?php
include 'capa.php';
include("save_objeto.php");


switch ($_POST["opc"]) {

	case '1': 
	$salvarE = new Aprende();
    $valor = $_POST["idgrupo"];
	$salvarE->insertAlumno($_POST["nombre"],$_POST["apellido"],$_POST["tutor"],$_POST["direccion"],$_POST["matricula"]);
	header("Location:agr_alumno.php");
	break;


	default:
		# code...
	break;
}






?>
