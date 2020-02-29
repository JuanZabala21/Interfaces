<?php include('header.php'); ?>
<?php include('global/config2.php'); ?>
<!-- Titulo Catalogo -->
 <div class="titulo-cata">Producto</div>
 <div class="container">
 <?php if($mensaje !="");?>
 <div class="alert alert-success">
 <?php echo $mensaje;?>
</div>
 </div>
<!-- Grid -->
<div class="caja">
<?php    
$sentencia=$pdo->prepare("SELECT * FROM `productos` "); 
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

$conteo=$pdo->prepare("SELECT * FROM `productos` "); 
$conteo->execute(); 
$listaConteo = $conteo->fetchAll(PDO::FETCH_ASSOC);

foreach($listaConteo as $numeroConteo){
  if ($numeroConteo['id'] == openssl_decrypt($_POST['id2'],COD,KEY)) {
    $var = $numeroConteo['Click'];
    $var +=1;
    echo $var;
    // echo $numeroConteo['Click'];
    $id=openssl_decrypt($_POST['id2'],COD,KEY);
    $sql= "UPDATE productos SET Click = '$var' WHERE id = '$id'";
    $connect->multi_query($sql);
    echo $connect->error;
  }
}

// $Buscar= "SELECT * FROM 'productos' WHERE 'id' = 'openssl_decrypt($_POST[id2],COD,KEY)'";
// $Buscar=$pdo->query($Buscar); 
// $Buscar=$Buscar->fetch_object(); 
// $Conteo=$Buscar->Click+1; 
// $Buscar="UPDATE 'productos' SET 'Click' = '$conteo' WHERE 'id' = 'openssl_decrypt($_POST[id2],COD,KEY)'";
// $Buscar=$pdo->query($Buscar); 

?> 



<?php foreach($listaProductos as $producto){ 
    if ($producto['id'] == openssl_decrypt($_POST['id2'],COD,KEY)) { ?>
    <div class="column prueba" style="margin-bottom: 20px;">
      <div class="card pro">
      <br>
        <img 
        title="<?php echo $producto['Nombre'];?>"
        alt="<?php echo $producto['Nombre'];?>"
        class="foto-cata" 
        alt="foto refe" 
        style="height: 150px; width: 200px"
        href="#" 
        src="<?php echo $producto['Imagen'];?>">
        <div class="card-body">
        <span><?php echo $producto['Nombre'];?></span>
        <p><?php echo $producto['Descripcion'];?></p>
        <h5 class="card-title"><?php echo $producto['Precio'];?>$</h5>
        
        <form action="" method="post">
        <input type= "hidden"  class="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>"> 
        <input type= "hidden"  class="text" name="Nombre" id="Nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
        <input type= "hidden"  class="text" name="Precio" id="Precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
        <input type= "hidden"  class="text" name="Cantidad" id="Cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
        
        <button
        name="btnAccion"
        value="Agregar"
        type="submit"
        class="btn-reset"
        >Agregar al carrito
        </button>   
        </form>    

      </div>
    </div>
  </div>
  <?php } }?>

</div>


    
<?php include('footer.php') ?> 