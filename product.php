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

	<title>Gundam</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css\bootstrap.min.css" />

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
<?php include("./layouts/header.php"); ?>
		<!-- SECTION -->
		<br>
		<div class="resources">
			<div class="container">

				<div class="row">
					<?php
					include('./php/conexion.php');
					$resultado = $conexion->query("SELECT * FROM productos") or die($conexion->error);
					while ($fila	= mysqli_fetch_array($resultado)) {
					?>
						<div class="col-sm-4">
							<div class="panel panel-primary" style="background-color:#333">
								<div class="panel-heading"><strong><?php echo $fila['nombre']; ?></strong></div>
								<div class="panel-body"><img src="resources/<?php echo $fila['imagen']; ?>" width="200px" height="200px" alt="<?php echo $fila['nombre']; ?>"></div>
								<div class="panel-footer">$<?php echo $fila['precio']; ?> dlls</div>
								<div class="panel-footer">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal" onclick="enviar(<?php echo $fila['id']; ?>)">Detalles</button>

								</div>

							</div>

						</div>
					<?php } ?>
				</div>

			</div>

		</div>
		<!-- /SECTION -->

	<?php include("./layouts/footer.php")?>

		<!-- Modal -->
		<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" style="background-color:#333">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Detalles</h4>
					</div>
					<div class="modal-body" id="mostrar">

					</div>
					
				</div>
			</div>
		</div>

		<script>
			var resultado = document.getElementById("mostrar");

			function enviar(c) {
				//validamos navegador que estamos utilizando
				var xmlhttp;
				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				} else {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
						resultado.innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open("GET", "detalle.php?id=" + c, true);
				xmlhttp.send();
			}
		</script>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

</body>

</html>