<?php include('header.php')?>
<br>
<h3> Lista del Carrito <h3>

<?php if(!empty($_SESSION['Carrito'])) {?>



<table class="table table-light table-bordered">
    <tbody>
        <tr>
            <th width="40%" class="text-center">Nombre</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%"> --  </th>
        </tr>
        <?php $total=0; ?>
        <?php foreach ($_SESSION['Carrito'] as $indice=>$producto){ ?>
        <tr>
            <td width="40%" class="text-center"><?php echo $producto['Nombre'] ?></td>
            <td width="15%" class="text-center"><?php echo $producto['Cantidad']?></td>
            <td width="20%" class="text-center"><?php echo $producto['Precio']?></td>
            <td width="20%" class="text-center"><?php echo number_format ($producto['Precio']*$producto['Cantidad'],2)?></td>

            <form action="" method="post"> 

            <input type= "hidden"  class="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>"> 

            <td width="5%"> <button 
            class="btn btn-danger" 
            name="btnAccion" 
            value="Eliminar"
            type="submit">
             Eliminar</button> </td>
            
            </form>

            
        </tr>
        
        <?php $total=$total+($producto['Precio']*$producto['Cantidad']); ?>
        <?php } ?>

        <tr>
        <td colspan="3" text-align="right"><h3>Total</h3></td> 
        <td text-align="right"><h3>$ <?php echo number_format($total,2); ?></h3></td> 
        <td></td> 
        </tr>


    </tbody>
</table>

<?php }else{ ?>

<div class="alert alert-success">
    No hay productos en el carrito
</div> 

<?php }  ?>

<?php include('footer.php')?>