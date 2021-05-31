<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Gundam</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<div class="container">
						<div class="btn-menu">
							<label for="btn-menu">☰</label>
						</div>
						<div class="logo">
							<img src="./resources/gundam.png" width="90px" height="90px" onclick="location.href='index.php'">
						</div>
					</div>

					<li><a href="#"><i class="fa fa-phone"></i> +52 646-555-44-33</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> fce@uabc.com</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> Ensenada, Baja California, Mexico.</a></li>
					<button type="button" class="menuCarrito">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
							<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
						</svg>
						<a href="cart.php" class="numeroItems">
							<?php

							if (isset($_SESSION['carrito'])) {
								echo count($_SESSION['carrito']);
							} else {
								echo 0;
							}
							?>

						</a>

					</button>
					<input type="checkbox" id="btn-menu">
					<div class="container-menu">
						<div class="cont-menu">
							<nav>
								<a href="index.php">Inicio</a>
								<a href="builds.php">Builds</a>
								<a href="product.php">Productos</a>
								<a href="contacto.php">Contacto</a>
								<a href="#">Facebook</a>
								<a href="#">Youtube</a>
								<a href="#">Instagram</a>
							</nav>
							<label for="btn-menu">✖️</label>
						</div>
					</div>

				</ul>




			</div>
		</div>
		<!-- /TOP HEADER -->




	</header>
</body>



<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>