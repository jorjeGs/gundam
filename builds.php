<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Gundam - Builds</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
  <?php include("./layouts/header.php"); ?>

		<!-- NAVIGATION -->
		<!-- /NAVIGATION -->

		<!--Banner principal-->
		<div class="section">
			<div class="container">
				<div class="row" id="titulos">
                    <h1>Elige tu arma...</h1>
				</div>
                
                <div class="card border-light mb-3" style="max-width: 100%; background-image: linear-gradient(180deg, #ff8926 0, #ff7a2d 12.5%, #ff652f 25%, #ff482e 37.5%, #ff0e2b 50%, #f1002a 62.5%, #e5002c 75%, #dd0032 87.5%, #d7003b 100%);" id="builds">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="resources/new/aerocool-cyclon.png" alt="..." width="350px">
                        <h2 class="card-text">GPU Ryzen 2100G, 8GB RAM a 2166MHZ, 500GB HDD </h2>
                      </div>
                      <div class="col-md-6">
                        <div class="card-body" class="info">
                          <h1 class="card-title">AeroCool Cyclon</h1>
                          <p class="card-text">Solo lo mas esencial para jugar los juegos del momento con tus amigos.</p>
                          <button onclick="location.href='product.php'" >Ordena Ya</button>
                        </div>
                      </div>
                    </div>
                </div>
                <!--BannersBuilds-->
                <div class="card border-light mb-3" style="max-width: 100%; background-image: linear-gradient(180deg, #ff85b9 0, #ff76bd 16.67%, #ff5fbc 33.33%, #ff3eb6 50%, #df14b1 66.67%, #c200b1 83.33%, #a800b7 100%);" id="builds">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <div class="card-body" class="info">
                          <h1 class="card-title">Zalman M3</h1>
                          <p class="card-text">Para el trabajo, la escuela, y el gaming a mayor velocidad.</p>
                          <button onclick="location.href='product.php'" >Ordena Ya</button>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <img src="resources/new/zalman-m3-plus.png" alt="..." width="350px">
                        <h2 class="card-text">GPU Ryzen 3200G, 8GB RAM DDR4 a 2700MHZ, 1TB HDD </h2>
                      </div>
                    </div>
                </div>
                <!--BannerBuilds-->
                <div class="card border-light mb-3" style="max-width: 100%; background-image: linear-gradient(180deg, #aed3ff 0, #0e86ff 50%, #0044c4 100%); " id="builds">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="resources/new/lianli-pc011-dynamic.png" alt="..." width="350px">
                        <h2 class="card-text">Intel i5 7200u, GTX 970 4GB, 16GB RAM DDR4 a 3200MHZ, 500GB SSD </h2>
                      </div>
                      <div class="col-md-6">
                        <div class="card-body" class="info">
                          <h1 class="card-title">Lian-Li</h1>
                          <p class="card-text">Chatea, graba, o haz stream de tus juegos favoritos, todo en una PC.</p>
                          <button onclick="location.href='product.php'" >Ordena Ya</button>
                        </div>
                      </div>
                    </div>
                </div>
                <!--BannerBuilds-->
                <div class="card border-light mb-3" style="max-width: 100%; background-image: linear-gradient(180deg, #cbff0f 0, #a6ff1a 16.67%, #74f81d 33.33%, #00e81d 50%, #00d824 66.67%, #00cc34 83.33%, #00c448 100%);" id="builds">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <div class="card-body" class="info">
                          <h1 class="card-title">Phanteks Eclipse</h1>
                          <p class="card-text">Los ultimos y mas nuevos juegos AAA en 4K a 60FPS, sin problemas, lo tienes aqui.</p>
                          <button onclick="location.href='product.php'" >Ordena Ya</button>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <img src="resources/new/phanteks-eclipse-p360x.png" alt="..." width="280px">
                        <br><br>
                        <h2 class="card-text">Intel i7 7700K, GTX 1050 Ti 4GB, 16GB RAM DDR4 a 3200MHZ, 500GB SSD </h2>
                      </div>
                    </div>
                </div>
                <!--BannerBuilds-->
                <div class="card border-light mb-3" style="max-width: 100%; background-image: linear-gradient(180deg, #aed3ff 0, #0e86ff 50%, #0044c4 100%); " id="builds">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="resources/new/thermaltake-commander-g31.png" alt="..." width="400px">
                        <br>
                        <h2 class="card-text">Intel i9 9900K, RTX 2080 Ti 11GB, 32GB RAM DDR4 a 3200MHZ, 2TB SSD</h2>
                      </div>
                      <div class="col-md-6">
                        <div class="card-body" class="info">
                          <h1 class="card-title">GUNDAM V</h1>
                          <p class="card-text">La Maquina de Combate unica y superior de <strong>Gundam</strong></p>
                          <p class="card-text"><em><strong>Por tiempo LIMITADO</strong></em></p>
                          <button onclick="location.href='product.php'" >Ordena Ya</button>
                        </div>
                      </div>
                    </div>
                </div>

			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


		<!-- FOOTER -->
		<footer id="footer">
			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
