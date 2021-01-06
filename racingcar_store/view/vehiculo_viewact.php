<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Racing Car Store | Administrador y Agentes :: Vehiculos</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <meta name="keywords" content="Car Services Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
  />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }

    $(document).ready(function(){
      $("input[name=color]").change(function(){
        alert($('input[name=color]').val());
        $('#colorseleccionado').val($(this).val());
      });
    });
  </script>
  <!--// Meta tag Keywords -->

  <!-- Custom-Files -->
  <link rel="stylesheet" href="../props/css/bootstrap.css">
  <link href="../props/css/datatables.min.css" rel="stylesheet">
  <!-- Bootstrap-Core-CSS -->
  <link href="../props/css/JiSlider.css" rel="stylesheet">
  <!-- //banner-slider -->
  <link rel="stylesheet" href="../props/css/smoothbox.css" type='text/css' media="all" />
  <!-- gallery lightbox -->
  <link rel="stylesheet" href="../props/css/style.css" type="text/css" media="all" />
  <!-- Style-CSS -->
  <link rel="stylesheet" href="../props/css/fontawesome-all.css">
  <!-- Font-Awesome-Icons-CSS -->
  <!-- //Custom-Files -->

  <script src="../props/js/popper.min.js"></script>

  <script src="../props/js/bootstrap.bundle.min.js"></script>

  <!-- Web-Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
  rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Dr+Sugiyama&amp;subset=latin-ext" rel="stylesheet">
  <!-- //Web-Fonts -->

</head>

<body>
  <!-- banner & header section -->
  <div class="main">
    <!-- header -->
    <header>
     <?php require 'navbar.php'; ?>
   </header>
   <!-- //header -->
   <!-- banner -->
   <div class="banner-silder">
     <div id="JiSlider" class="jislider">
      <ul>
        <li>
          <div class="banner-top banner-top1">
            <div class="container">
              <div class="banner-info">
                <h3 class="name text-white text-uppercase text-center">
                  <span class="name-part w3l-text1">Para</span>
                  <span class="name-part w3l-text2">Dominar</span>
                  <span class="name-part w3l-text2">El camino</span>
                  <span class="name-part w3l-text3">Primero debes Dominarte
                    <label>A ti</label>Mismo</span>
                  </h3>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="banner-top banner-top2">
              <div class="container">
                <div class="banner-info">
                  <h3 class="name text-white text-uppercase text-center">
                    <span class="name-part w3l-text1">La unica </span>
                    <span class="name-part w3l-text2">Forma</span>
                    <span class="name-part w3l-text3">de no
                      <label>Arriesgarte</label> Es no VIVIR </span>
                    </h3>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="banner-top banner-top3">
                <div class="container">
                  <div class="banner-info">
                    <h3 class="name text-white text-uppercase text-center">
                      <span class="name-part w3l-text1">Ningun</span>
                      <span class="name-part w3l-text2">Camino</span>
                      <span class="name-part w3l-text3">
                        <label>FACIL</label>Hizo experto a un conductor</span>
                      </h3>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="banner-top banner-top4">
                  <div class="container">
                    <div class="banner-info">
                      <h3 class="name text-white text-uppercase text-center">
                        <span class="name-part w3l-text1">Carreteras</span>
                        <span class="name-part w3l-text2">Rectas</span>
                        <span class="name-part w3l-text3"> no hacen
                          <label>conductores</label> habiles</span>
                        </h3>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- //banner -->
        </div>
        <!-- banner & header section -->
        <!-- about -->
        <div class="about py-5">
          <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Vehiculo - Actualizar
              <span></span>
            </h3>
            <?php foreach($this->obj_model->get_vehiculoAct(base64_decode($_REQUEST["id"])) as $vehiculo){ ?>
              <div class="modal-body">
                <form action="" method="POST">
                  <input type="hidden" name="id" value="<?php echo $vehiculo[0]?>">
                  <div class="form-group">
                    <label class="sr-only" for="inlineFormInputGroup">Matricula</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Matricula</div>
                      </div>
                      <input type="text" class="form-control" name="matricula" required="" placeholder="Ingrese la matricula..." value="<?php echo $vehiculo[1]?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="inlineFormInputGroup">Color</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Color</div>
                      </div>
                      <input type="color" class="form-control" name="color" required="" placeholder="Ingrese un Color..." value="<?php echo $vehiculo[2]?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="inlineFormInputGroup">Año</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Año</div>
                      </div>
                      <input type="number" maxlength="4" class="form-control" name="anio" required="" placeholder="Año que desea..." value="<?php echo $vehiculo[3]?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="inlineFormInputGroup">Precio</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Precio</div>
                      </div>
                      <input type="number" class="form-control" name="precio" required="" placeholder="Precio Unitario..." value="<?php echo $vehiculo[4]?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <label class="sr-only" for="inlineFormInputGroup">Modelo</label>
                      <div class="input-group-prepend">
                        <div class="input-group-text">Modelo</div>
                      </div>
                      <select class="form-control" name="modelo" required="">
                        <option value="">---Seleccione un modelo---</option>
                        <?php foreach($this->obj_model->get_modelo() as $modelo){ ?>
                          <option value="<?php echo $modelo[0]?>"<?php if($modelo[0] == $vehiculo[5]){ echo "selected"; } ?>> <?php echo $modelo[1] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col">
                      <div class="input-group mb-2">
                        <label class="sr-only" for="inlineFormInputGroup">Estado</label>
                        <div class="input-group-prepend">
                          <div class="input-group-text">Estado</div>
                        </div>
                        <select class="form-control" name="estado" required="">
                          <option value="">---Seleccione un estado---</option>
                          <?php foreach($this->obj_model->get_estado() as $estado){ ?>
                            <option value="<?php echo $estado[0]?>"<?php if($estado[0] == $vehiculo[6]){ echo "selected";} ?>> <?php echo $estado[1] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group mb-2">
                        <label class="sr-only" for="inlineFormInputGroup">Disponibilidad</label>
                        <div class="input-group-prepend">
                          <div class="input-group-text">Disponibilidad</div>
                        </div>
                        <select class="form-control" name="dispo" required="">
                          <option value="">---Disponibilidad---</option>
                          <?php foreach($this->obj_model->get_disponibilidad() as $disponibilidad){ ?>
                            <option value="<?php echo $disponibilidad[0]?>"<?php if($disponibilidad[0] == $vehiculo[7]){ echo "selected";} ?>> <?php echo $disponibilidad[1] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <label class="sr-only" for="inlineFormInputGroup">Concesionarias</label>
                      <div class="input-group-prepend">
                        <div class="input-group-text">Concesionarias</div>
                      </div>
                      <select class="form-control" name="concesionaria" required="">
                        <option value="">---Seleccione una Concesionaria---</option>
                        <?php foreach($this->obj_model->get_concesionaria() as $concesionaria){ ?>
                          <option value="<?php echo $concesionaria[0]?>"<?php if($concesionaria[0] ==$vehiculo[8]){ echo "selected";} ?>> <?php echo $concesionaria[1] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <center>
                    <input class="btn btn-primary" type="submit" name="action" value="Actualizar">
                    <input class="btn btn-secondary" type="button" onclick="history.back()" name="volver atrás" value="Volver Atrás">
                  </center>
                </form>
              </div>
            <?php } ?>
          </div>
        </div>
        <!--//about-->
        <!-- footer -->
        <div class="footer-bot py-5 text-center">
          <div class="container">
           <div class="logo2">
            <a href="index.php"><img src="../props/images/logo.png" width="100px"></a>
          </div>
          <!-- social icons -->
          <div class="agileinfo_social_icons my-4">
            <ul class="agileits_social_list list-unstyled">
             <li>
              <a href="#" class="w3_agile_facebook">
               <i class="fab fa-facebook-f"></i>
             </a>
           </li>
           <li class="mx-2">
            <a href="#" class="agile_twitter">
             <i class="fab fa-twitter"></i>
           </a>
         </li>
         <li>
          <a href="#" class="w3_agile_dribble">
           <i class="fab fa-dribbble"></i>
         </a>
       </li>
       <li class="ml-2">
        <a href="#" class="w3_agile_google">
         <i class="fab fa-google-plus-g"></i>
       </a>
     </li>
   </ul>
 </div>
 <!-- social icons -->
 <!-- copyright -->
 <p class="copyright-w3ls"> &copy; 2019 Racing Car Store. All Rights Reserved | Diseñado por Pedro Mendoza
 </p>
 <!-- //copyright -->
</div>
</div>
<!-- //footer -->

<!-- Js files -->
<!-- JavaScript -->
<script src="../props/js/jquery-2.2.3.min.js"></script>
<!-- <script src="js/jquery-1.11.3.min.js"></script> -->
<!-- Default-JavaScript-File -->
<script src="../props/js/bootstrap.js"></script>
<script src="../props/js/datatables.min.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->
<script type="text/javascript">
  $(document).ready(function () {
    $('#cli').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
</script> 
<!--banner-slider-->
<script src="../props/js/JiSlider.js"></script>
<script>
  $(window).load(function () {
   $('#JiSlider').JiSlider({
    color: '#fff',
    start: 3,
    reverse: true
  }).addClass('ff')
 })
</script>
<!-- //banner-slider -->

<!-- smooth scrolling -->
<script src="../props/js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->

<!-- move-top -->
<script src="../props/js/move-top.js"></script>
<!-- easing -->
<script src="../props/js/easing.js"></script>
<!--  necessary snippets for few javascript files -->
<script src="../props/js/car_services.js"></script>
<!-- banner text -->
<script src="../props/js/text.js"></script>
<!-- menu -->
<script src="../props/js/menu.js"></script>
<!-- lightbox -->
<script src="../props/js/smoothbox.jquery2.js"></script>
<!-- testimonials -->
<!-- required-js-files-->
<link href="../props/css/owl.carousel.css" rel="stylesheet">
<script src="../props/js/owl.carousel.js"></script>
<script>
  $(document).ready(function () {
   $("#owl-demo").owlCarousel({
    items: 1,
    lazyLoad: true,
    autoPlay: false,
    navigation: true,
    navigationText: true,
    pagination: true,
  });
 });
</script>
<!-- //required-js-files-->
<!-- //Js files -->

</body>

</html>