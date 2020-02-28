<body>

    <?php include('header.php'); ?>

    <div  class="container-scroller contai">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form action="flogin.php" method="POST">
                        <?php
                    if(isset($_GET["status"])){
                        $id = $_GET["status"];
                        $message = $_GET["msg"];
                        echo"<br> <div id='$id' style='margin-left:-1%; margin-top:8%; text-align:center; color:red;'>$message</div>";
                    }?>
                  
                  <div class="titulo_login">INICIO DE SESION</div>
                  
                  <div class="form-group">
                  <label class="label">Usuario</label>
                    <div class="input-group">
                      <input name="username" type="text" class="form-control input_caja" placeholder="Username">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input name="password" type="password" class="form-control input_caja" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div> 
               </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block btn_incio">INICIAR SESIÓN</button>
                    </form>
                  </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../../assets/js/shared/off-canvas.js"></script>
    <script src="../../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
  </body>