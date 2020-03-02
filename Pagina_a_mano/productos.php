<?php include('header.php'); ?>

<style>
.titulo-cata{
  margin-top: 15px;
}
</style> 

<!-- Titulo Catalogo -->
 <div class="titulo-cata">Productos</div>
 <div class="container">
 <?php if($mensaje !="");?>
 <div class="alert alert-success">
 <?php echo $mensaje;?>
</div>
 </div>
<!-- Grid -->
<div class="row" style="margin-bottom: 50px;">
<?php    
$sentencia=$pdo->prepare("SELECT * FROM `productos`"); 
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
?> 

<?php foreach($listaProductos as $producto){ ?>
    <div class="column">
      <div class="card">
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
        <h2 class="card-title"><?php echo $producto['Precio'];?>$</h2>
        
        <form action="" method="post" style="margin-bottom: 0;">
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
        
        <form action="each-producto.php" method="post">
        <input type= "hidden"  class="" name="id2" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>"> 

          <button
          class="btn-reset"
          name="btnVer"
          value="Ver"
          type="submit"
          >Ver
          </button> 
          
        </from>
      </div>
    </div>
  </div>
  <?php } ?>
</div>


    
<?php include('footer.php') ?> 