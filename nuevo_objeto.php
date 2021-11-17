<?php
include 'capa.php';
include("save_objeto.php");


switch ($_POST["opc"]) {

	case '1': 
	$salvarE = new ciie();
	$salvarE->insertEmprendedor($_POST["nombre"],$_POST["apellido"],$_POST["direccion"],$_POST["movil"],$_POST["email"],$_POST["profesion"]);
	header("Location:emprendedor.php");
	break;


	case '3': 
    $id = $_POST["ID"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];    
    $movil = $_POST["movil"];
    $email = $_POST["email"];
    $profesion = $_POST["profesion"];
    $result  = mysqli_query($conexion, "UPDATE emprendedor SET Nombre='$nombre',Apellido='$apellido',Direccion='$direccion',Movil='$movil',Mail='$email',Profesion='$profesion' WHERE id='$id' ");
    if($result){ echo 'data updated'; }
    mysqli_close($conexion);
    header("Location:emprendedor.php");
	break;

	case '4': 
	$salvarE = new ciie();
	$salvarE->eliminarEmprendedor($_POST['IDx']);
	header("Location:emprendedor.php");
	break;

//########################## DATOS DEL PROYECTO
	case '2': 
	$salvarE = new ciie();
	$salvarE->insertProyecto($_POST["fecha"],$_POST["nombre"],$_POST["estatus"],$_POST["idempre"]);
	header("Location:proyectos.php");
	break;

	case '5': 
    $id = $_POST["ID"];
    $fecha = $_POST["fecha"];
    $nombre = $_POST["nombre"];
    $estatus = $_POST["estatus"];    
    $idempre = $_POST["idempre"];

    $result  = mysqli_query($conexion, "UPDATE proyectos SET Nombre='$nombre',Fecha='$fecha',Estatus='$estatus',idemprendedor='$idempre' WHERE id='$id' ");
    if($result){ echo 'data updated'; }
    mysqli_close($conexion);
    header("Location:proyectos.php");
	break;

	case '6': 
	$salvarE = new ciie();
	$salvarE->eliminarProyecto($_POST['IDx']);
	header("Location:proyectos.php");
	break;

	case '7': //asesor
		$salvarE = new ciie();
		$salvarE->insertAsesor($_POST["nombre"],$_POST["apellido"],$_POST["direccion"],$_POST["movil"],$_POST["email"],$_POST["profesion"]);
		header("Location:asig_asesor.php");
		break;

	case '8': //asesor
		$salvarE = new ciie();
		$salvarE->insertAsignaAsesor($_POST["asesor"],$_POST["proyecto"]);
		header("Location:asig_asesor.php");
		break;


	default:
		# code...
	break;
}






?>
