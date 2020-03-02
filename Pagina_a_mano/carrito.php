 <?php 

 session_start();
 
 $mensaje=""; 
 $resend = "http://interfaces.test/Pagina_a_mano/detallado.php";

 if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case 'Agregar': 

        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
            $id=openssl_decrypt($_POST['id'],COD,KEY);
            $mensaje.=""; 
        }else{ 
            $mensaje.="";
        }

        if(is_string(openssl_decrypt($_POST['Nombre'],COD,KEY))){
            $Nombre=openssl_decrypt($_POST['Nombre'],COD, KEY);
            $mensaje.="";
        }else{ 
            $mensaje.=""; 
        break;
        }

        if(is_numeric(openssl_decrypt($_POST['Cantidad'],COD,KEY))){
            $Cantidad=openssl_decrypt($_POST['Cantidad'],COD, KEY);
            $mensaje.="";
        }else{ 
            $mensaje.=""; 
        break;
        }

        if(is_numeric(openssl_decrypt($_POST['Precio'],COD,KEY))){
            $Precio=openssl_decrypt($_POST['Precio'],COD, KEY);
            $mensaje.="";
        }else{ 
            $mensaje.=""; 
        break;
        }

        if(!isset($_SESSION['Carrito'])){

            $producto=array(
                'id' =>$id,
                'Nombre' =>$Nombre,
                'Cantidad' =>$Cantidad,
                'Precio' =>$Precio
            );
            $_SESSION['Carrito'][0]=$producto; 
            $mensaje="Producto agregado al carrito"; 
            header("Location: ".$resend);
        
        }else{ 
             $idProductos=array_column($_SESSION['Carrito'],"id");
               if(in_array($id,$idProductos)){
                echo "<script> alert('El producto ya ha sido seleccionado')</script>";
            }else{

            $NumPro= count($_SESSION['Carrito']);
            $producto=array(
                    'id' =>$id,
                    'Nombre'=>$Nombre,
                    'Cantidad'=>$Cantidad,
                    'Precio'=>$Precio
                );
                $_SESSION['Carrito'][$NumPro]=$producto; 
                $mensaje="Producto agregado al carrito"; 
                header("Location: ".$resend);
            }
            
        }

            // header("Location: ".$resend);
            // $mensaje="Producto agregado al carrito"; 
    break;

    case "Eliminar": 
        
        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
            $id=openssl_decrypt($_POST['id'],COD,KEY);
            foreach($_SESSION['Carrito'] as $indice=>$producto){
                if($producto['id']==$id){
                    unset($_SESSION['Carrito'][$indice]);
                    echo "<script>alert('Elemento Borrado')</script>";
                }
            }
        }else{ 
            $mensaje.="Ups... ID incorrecto".$id;
        }
    break; 
      }
    }
 ?>