<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Racing Car Store | Administrador y Agentes :: Pedidos</title>
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
  <script src="../props/js/marcas.js"></script>  

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
            <h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Pedidos
              <span></span>
            </h3>
            <center>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Modalingresar">
                Nuevo Pedido
              </button>
            </center>
            <br>
            <div align="center"><?php if(isset($mensaje)){ echo $mensaje; } ?></div>
            <br>
            <div class="table-responsive-xl">
              <table class="table table-striped table-dark table-curved" id="ped">
                <thead>
                  <tr>
                    <td>Modelo</td>
                    <td>Marca</td>
                    <td>Pais</td>
                    <td>Proveedor</td>
                    <td>Concesionaria</td>
                    <td>Fecha del pedido</td>
                    <td>Fecha de entrega</td>
                    <td>Operaciones</td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($this->obj_pedido->get_pedidos() as $valor) { ?>
                    <tr>
                      <td><?php echo $valor[0]; ?></td>
                      <td><?php echo $valor[1]; ?></td>
                      <td><?php echo $valor[2]; ?></td>
                      <td><?php echo $valor[3]; ?></td>
                      <td><?php echo $valor[4]; ?></td>
                      <td><?php echo $valor[5]; ?></td>
                      <td><?php echo $valor[6]; ?></td>
                      <td>
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opciones
                          </button>
                          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <?php $gd = base64_encode('get_datos') ?>
                            <?php $e = base64_encode('eliminar') ?>
                            <?php $id = base64_encode($valor[7]) ?>
                            <a onclick="return confirm('Esta seguro de eliminar el modelo <?php echo $valor[0]." de la marca ".$valor[1]; ?> ?');" class="dropdown-item" href="?action=<?php echo $e ?>&id=<?php echo $id ?>">Eliminar</a>
                            <a class="dropdown-item" href="?action=<?php echo $gd ?>&id=<?php echo $id ?>">Modificar</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--//about-->
        <!-- ************************************** -->

        <!-- Modal Ingresar-->
        <div class="modal fade" id="Modalingresar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header" style="background-color: black">
                <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Poppins', sans-serif; color: #2471A3;">Nuevo Pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <img src="../props/images/bannermodal1.png">
              <div class="modal-body">
               <form action="" method="POST" autocomplete="off"><!--aqui empiezo y lo puedo borra -->
                <div class="form-group">
                  <div class="input-group mb-2">
                    <label class="sr-only" for="inlineFormInputGroup">Marca</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">Marca</div>
                    </div>
                    <select class="form-control" id="inlineFormCustomSelect" required onchange="load(this.value)">
                      <option value="">--Seleccione su marca--</option>
                      <?php foreach ($this->obj_pedido->get_marca() as $marca) { ?>
                        <option value="<?php echo $marca[0] ?>"><?php echo $marca[1] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <label class="sr-only" for="inlineFormInputGroup">Modelo</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">Modelo</div>
                    </div>
                    <select class="form-control" name="modelo" required id="modelo">
                      <option value="">--Seleccione su modelo--</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <label class="sr-only" for="inlineFormInputGroup">Cantidad</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">Cantidad</div>
                    </div>
                    <input type="number" class="form-control" id="inlineFormInputGroup"  name="cantidad" required placeholder="Cantidad a pedir...">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <label class="sr-only" for="inlineFormInputGroup">Proveedor</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">Proveedor</div>
                    </div>
                    <select class="form-control" id="inlineFormCustomSelect" name="proveedor" required>
                      <option value="">--Seleccione su proveedor--</option>
                      <?php foreach ($this->obj_pedido->get_proveedor() as $proveedor) { ?>
                        <option value="<?php echo $proveedor[0] ?>"><?php echo $proveedor[1] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <label class="sr-only" for="inlineFormInputGroup">Concesionario</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">Concesionario</div>
                    </div>
                    <select class="form-control" id="inlineFormCustomSelect" name="concesionario" required>
                      <option value="">--Seleccione un concesionario--</option>
                      <?php foreach ($this->obj_pedido->get_concesionario() as $concesionario) { ?>
                        <option value="<?php echo $concesionario[0] ?>"><?php echo $concesionario[1] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <center>
                  <input class="btn btn-primary" type="submit" name="action" value="Guardar">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </center>
              </form><!--aqui termino y lo puedo borra -->
            </div>
          </div>
        </div>
      </div>





      <!-- ************************************** -->
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
    $('#ped').DataTable();
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