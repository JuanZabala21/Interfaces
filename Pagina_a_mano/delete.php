<?php 
include 'global/config2.php';
include 'header.php';

$sentencia=$pdo->prepare("SELECT * FROM `productos` "); 
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

$conteo=$pdo->prepare("SELECT * FROM `productos` "); 
$conteo->execute(); 
$listaConteo = $conteo->fetchAll(PDO::FETCH_ASSOC);

foreach($listaConteo as $numeroConteo){
  if ($numeroConteo['id'] == openssl_decrypt($_POST['id'],COD,KEY)) {
    $id=openssl_decrypt($_POST['id'],COD,KEY);
    $sql= "UPDATE productos SET Click = '0' WHERE id = '$id'";
    $connect->multi_query($sql);

    header('location: panel.php');
  }
}
?> 


