<?php
include("./php/conexion.php");
if (isset($_GET['id'])) {
  $resultado = $conexion->query("SELECT * FROM productos where id=" . $_GET['id']) or die($conexion->error);
  if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_row($resultado);
  } else {
    header("Location: ./index.php");
  }
} else {
  //se redirecciona
  header("Location: ./index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Detalle</title>
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet" />
  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css" />
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
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
  <div class="container">
  <form>
  <table border="0">
    <tr>
    <th rowspan="4"><img src="./resources/<?php echo $fila[4]; ?>" alt="<?php echo $fila[1]; ?>" width="200" height="200"></th>
    <th><?php echo $fila[1]; ?></th>
    </tr>
    <tr>
    <td align="justify"><?php echo $fila[2]; ?></td>
    </tr>
    <tr>
    <th align="right">Precio: $<strong><?php echo $fila[3]; ?></strong></th>
    </tr>
    <tr>
    <td align="right">Cantidad: <input type="number" min="1" max="10" value="1" name="txtCantidad"> </td>
    </tr>
  </table>
  </form>
  </div>

  <!-- jQuery Plugins -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/nouislider.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>