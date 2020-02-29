<!DOCTYPE html>

    <?php include("header.php")?>

    <div id="header">
        <img alt="el papa juan" src="assets/img/juan.jpg" id="admin-logo"></img>
        <div id="name-admin">Juan Zabala</div>
        <div id="panel">PANEL</div>
    </div>

                 <!-- Separador -->
                 <div class="sepadador" >
            </div>

    <div id="sidebar">
        <ul>
            
        <a href="index.php" ><li><div class="centrar-medio">Home</div></li></a>
        <a href="logout.php" ><li><div class="centrar-medio">Cerrar Sesión</div></li></a>
        </ul>
    </div>

    <div id="data">
        <div class="titulo-panel">Productos Mas Buscados</div>
            <div class="container">
            <?php if($mensaje !="");?>
            <div class="alert alert-success">
            <?php echo $mensaje;?>
            </div>
            </div>
            <!-- Grid -->
            <div class="row row2">
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
                    <h5 class="card-title">Aqui va el contador de numeros</h5>
                    
                    <form action="" method="post">
                    <input type= "hidden"  class="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>"> 
                    <input type= "hidden"  class="text" name="Nombre" id="Nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                    <input type= "hidden"  class="text" name="Precio" id="Precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
                    <input type= "hidden"  class="text" name="Cantidad" id="Cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
                    
                    <button class="btn-reset">Resetear</button>

                    </form>    

                </div>
                </div>
            </div>
            <?php } ?>
            </div>


                
            <?php include('footer.php') ?> 

    </div>

</html>