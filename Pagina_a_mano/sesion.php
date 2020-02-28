<?php 
include_once 'global/conexion.php';
include_once 'global/config.php';

session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) as contar where usuario = $usuario ' and password = $password '";
$consulta = mysqli_query($connect,$q);
$array = mysqli_fetch_array($consulta); 

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: index.php");

}else{
    echo 'Datos incorrectos';

}

?>