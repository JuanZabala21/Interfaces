<?php 
include ('global/config.php');
include ('global/conexion.php');
include ('carrito.php');
?>

        <head>
            <meta charset="utf-8">
            <title>Tienda</title>
            <link href="css/style.css" rel="stylesheet" />
            <link href="css/slider.css" rel="stylesheet" />
            <link href="css/search.css" rel="stylesheet" />
            <link href="css/grid.css" rel="stylesheet" />
            <link href="css/footer.css" rel="stylesheet" />
            <link href="css/login.css" rel="stylesheet" />
            <link href="css/panel.css" rel="stylesheet" />
            <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->
            <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> 
        </head>
        
        <body class="container">
            <!-- navbar -->
            <header>            
                    <nav role="navigation">
                        <ul class="menu-navbar">
                            <li class="list-option menu-hambur">
                                <div id="menuToggle">
                                    <input type="checkbox" />
        
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    
                                    <ul id="menu">
                                        <a href="index.php"><li>Inicio</li></a>
                                        <a href="productos.php"><li>Productos</li></a>
                                        <a href="login.php"><li>Iniciar Sesión</li></a>
                                        <a href="panel.php"><li>Panel</li></a>
                                      
                                    </ul>
                                </div>
                            </li>
                            <li class="list-option" id="title"><a href="index.php">INICIO</a></li>
                            <li class="list-option titulo-pagina titu-header"><a href="#"><h3>Electrodomestico <span>Perú</span></h3></a></li>
                            <li class="list-option icono-carro"><a href="detallado.php"><img alt="icono-carrito" src="assets/icon/carrito.svg"></img></a></li>
                            <li class="list-option" id="title"><a href="detallado.php">(<?php echo (empty($_SESSION['Carrito']))?0:count($_SESSION['Carrito']);?>)</a></li>                         
                        </ul>
                    </nav>                
            </header>

             <!-- Separador -->
             <div class="sepadador">
            </div>