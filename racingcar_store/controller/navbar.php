<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Car Services Auto Mobile Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
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

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dr+Sugiyama&amp;subset=latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<div class="container-fluid">
		<div class="row header-w3ls-top pt-lg-5 pt-md-4 pt-3 px-lg-5 px-3">
			<div class="col-xl-10 col-md-9 col-sm-8 col-6 logo">
				<a href="index.php"><img src="../props/images/logo.png" width="150px"></a>
			</div>
			<div class="col-xl-2 col-md-3 col-sm-4 col-6 menu-agile text-center">
				<a href="#menu" id="toggle">
					<span></span>
				</a>
				<div id="menu" class="menustyles">
					<ul class="list-unstyled">
						<li>
							<a href="../controller/home_controller.php">Home</a>
						</li>

						<?php 
						if (isset($_SESSION["rol"])) {

							if ($_SESSION["rol"]!=3) { ?>
								<li>
									<a href="pedido_controller.php">Pedido</a>
								</li>								
								<li>
									<a href="vehiculo_controller.php">Vehiculo</a>
								</li>
								<li>
									<a href="modelo_controller.php">Modelos</a>
								</li>
								<li>
									<a href="cliente_controller.php">Cliente</a>
								</li>
								<li>
									<a href="venta_controller.php">Ventas</a>
								</li>

							<?php }else{ ?>


								<li>
									<a href="#acercade" class="scroll">Acerca De</a>
								</li>
								<li>
									<a href="#servicios" class="scroll">Servicios</a>
								</li>
								<li>
									<a href="#equipo" class="scroll">Equipo</a>
								</li>
								<li>
									<a href="#catalogo" class="scroll">Catalogo</a>
								</li>
								<li>
									<a href="#marcas" class="scroll">Marcas</a>
								</li>

								<?php 
							}
							?>
							<li>
								<a href="../props/cerrar_sesion.php">Cerrar Sesion</a>
							</li>
							<?php 
						}else{ ?>

							<li>
								<a href="../controller/login_controller.php">Iniciar Sesion</a>
							</li>	
						<?php } ?>						
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>

</html>