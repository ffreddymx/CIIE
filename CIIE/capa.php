<?php
//error_reporting(0);
if(!isset($_SESSION)) 
    session_start(); 
//session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION["autentificado"] != "SI") {
    //si no existe, envio a la página de autentificacion
    header("Location: index.php");
    //ademas salgo de este script
    exit();
}



if(!empty($_SESSION['user']))
 {
   //quitamos el posible SQLInjection del user y password
   $conexion =  mysqli_connect('localhost' , 'root' ,'' ,'ciie');
                   mysqli_set_charset($conexion,'utf8');

             //  mysql_select_db("Pichucalco",$conexion);
   $_SESSION['user'] = mysqli_real_escape_string($conexion,$_SESSION['user']);
   //$_SESSION['token'] = mysql_real_escape_string($_SESSION['token']);

} else {
      session_destroy();
      header("Location:index.php");
        exit;
   }

 
?>
