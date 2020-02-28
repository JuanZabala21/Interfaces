<!DOCTYPE html>
            <?php include('header.php'); ?>

            <!-- Separador -->
            <div class="sepadador">
            </div>
            <!-- Slider -->

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img class="imagen-slide" src="assets/img/img-fondo3.jpg" style="width:100%">
                    <div class="text color-white"><div class="texto-dentro colo-blue">LOS MEJORES PRODUCTOS</div></div>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img class="imagen-slide" src="assets/img/img-fondo2.jpg" style="width:100%">
                    <div class="text"><div class="texto-dentro">CALIDAD GARANTIZADA</div></div>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img class="imagen-slide" src="assets/img/img-fondo1.jpg" style="width:100%">
                    <div class="text"><div class="texto-dentro">GARANTIA POR 3 AÑOS</div></div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
            </div>
            <br>                
            <div class="puntos" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
            </div>

             <!-- Separador -->
             <div class="sepadador" style="margin-top: 9px;">
            </div>
            
            <?php include('search_bar.php'); ?>

            <?php include('categoria.php'); ?>

<!-- Separador -->


            <!-- Footer -->

        <?php include('footer.php'); ?>

        </body>
    </html>