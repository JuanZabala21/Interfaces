<?php 
include_once 'Pagina_a_mano/global/conexion.php';
include_once 'Pagina_a_mano/global/config2.php';

session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) as contar where usuario = $usuario ' and password = $password '";
$consulta = mysqli_query($connect,$q);
$array = mysqli_fetch_array($consulta); 

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: Pagina_a_mano/index.php");

}else{
    echo 'Datos incorrectos';

}

?>