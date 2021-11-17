<?php
$mysqli = new mysqli('localhost' , 'root' ,'' ,'ciie');

if($_POST && !empty($_POST['user']) && !empty($_POST['pas']) ) {


$resultado = $mysqli->query("SELECT * FROM userxwz WHERE usuario = '{$_POST['user']}' AND password = '{$_POST['pas']}' ");

$fila = $resultado->fetch_assoc();


     if(isset($fila)) {
           session_start();

      $_SESSION["user"]=$fila['usuario'];
      $_SESSION["nombre"]=$fila['Nombre'];
      $_SESSION["tipo"]=$fila['Tipo'];
      $_SESSION["id"]=$fila['Id'];

      $_SESSION["autentificado"] ="SI";
      fclose($file);

     

           //todo bien
         header("Location: inicio.php");
           exit;

      } else {
           session_destroy();
           header("Location: index.php?error=si");
           //usuario incorrecto o password incorrecto
      }
      mysqli_close($resultado);

}

?>
