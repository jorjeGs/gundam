<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Gundam - Contacto</title>

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
		<!-- HEADER -->
        <header class="header">
            <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
                <div class="logo">
                    <img src="/resources/gundam.png" width="90px" height="90px" onclick="location.href='index.html'" >
                </div>
            </div>
        </header>
        <div class="capa"></div>
    <!--	--------------->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="index.php">Inicio</a>
                <a href="builds.php">Builds</a>
                <a href="product.php">Productos</a>
                <a href="contacto.php">Contacto</a>
                <a href="https://www.facebook.com/FC.UABC">Facebook</a>
                <a href="https://www.youtube.com/channel/UCOc93OfYi58yAmkC8qZaHQw">Youtube</a>
                <a href="https://www.instagram.com/uabc_oficial/?hl=es-la">Instagram</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
		<!-- /HEADER -->



		<div class="section">
            <div class="container">
                <div class="row g-0" id="contacto">
                    <div class="col-md-6" >
                        <h1><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>UABC Ensenada Campus Sauzal</h1>
                        <h2>666-666-66-66</h2>
                        <form method="post" id="formula">
                            <input type="text" name="Nombre" placeholder="Nombre completo">
                            <input type="email" name="Email" placeholder="Correo">
                            <input type="text" name="Telefono" placeholder="10 Digitos (opcional)">
                            <input type="text" name="Mensaje" placeholder="Envianos un mensaje" id="mensaje">
                            <input type="submit" name="Enviar">
                        </form>  
                    </div>
                    <div class="col-md-6">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3388.5486740873157!2d-116.66918738531702!3d31.864494537257656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d93ee8ce88f58f%3A0x8a83a2556bd08ecd!2sUABC%20Campus%20Sauzal!5e0!3m2!1ses!2smx!4v1621286428556!5m2!1ses!2smx" width="550" height="400" style="border: 10px; border-style: solid; border-color:rgb(37, 37, 37);" allowfullscreen="" loading="lazy" id="mapa"></iframe>
                    </div>
                </div>
                <div id="titulos"><h1>Siguenos en...</h1></div>
                <div class="row g-0" id="redes">
                    <div class="col-md-4 col-xs-6">
						<button onclick="location.href='https://www.facebook.com/FC.UABC'" style="background-color: blue;">Facebook</button>
					</div>
					
					<div class="col-md-4 col-xs-6">
						<button onclick="location.href='https://www.youtube.com/channel/UCOc93OfYi58yAmkC8qZaHQw'" style="background-color: red;">Youtube</button>
					</div>
					
					<div class="col-md-4 col-xs-6">
						<button onclick="location.href='https://www.instagram.com/uabc_oficial/?hl=es-la'" style="background-color: orange;">Instagram</button>
					</div>
                </div>
            </div>
        </div>

		
		


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

        <?php 
            include("php/registrar.php");
        ?>

	</body>
</html>
