<?php include('header.php'); ?>
<?php include('global/config2.php'); ?>
<!-- Titulo Catalogo -->

<style>
.titulo-cata{
  margin-top: 15px;
}
</style> 


 <div style="text-align: center"class="titulo-cata">Producto</div>
 <div class="container">
 <?php if($mensaje !="");?>
 <div class="alert alert-success">
 <?php echo $mensaje;?>
</div>
 </div>
<!-- Grid -->
<div style="margin-left: 650px" class="caja">
<?php    
$sentencia=$pdo->prepare("SELECT * FROM `productos` "); 
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

$conteo=$pdo->prepare("SELECT * FROM `productos` "); 
$conteo->execute(); 
$listaConteo = $conteo->fetchAll(PDO::FETCH_ASSOC);

$prueba = openssl_decrypt($_POST['id2'],COD,KEY);

foreach($listaConteo as $numeroConteo){
  if ($numeroConteo['id'] == $prueba) {
    $var = $numeroConteo['Click'];
    $var +=1;
    $id=openssl_decrypt($_POST['id2'],COD,KEY);
    $sql= "UPDATE productos SET Click = '$var' WHERE id = '$id'";
    $connect->multi_query($sql);
  }
}
?> 

<?php foreach($listaProductos as $producto){ 
    if ($producto['id'] == $prueba) { ?>
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
        <h3 class="card-title"><?php echo $producto['Precio'];?>$</h3>
        
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
        <input
        class="btn-reset"
        value="Regresar"
        type="submit"
        onclick = "location = 'productos.php '"
        >
      </div>
    </div>
  </div>
  <?php } }?>

</div>


    
<?php include('footer.php') ?> 