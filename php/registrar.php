<?php
    include("conexion.php");
    if(isset($_POST['Enviar'])){
        if  (strlen($_POST['Nombre']) >= 1 &&
             strlen($_POST['Email']) >= 1 &&
             strlen($_POST['Telefono']) >= 1 &&
             strlen($_POST['Mensaje']) >= 1
            ){
            $nombre = trim($_POST['Nombre']);
            $email = trim($_POST['Email']);
            $telefono = trim($_POST['Telefono']);
            $mensaje = trim($_POST['Mensaje']);
            $consulta = "INSERT INTO contacto_web(nombre, correo, telefono, mensaje) VALUES ('$nombre','$email','$telefono','$mensaje')";
            $resultado = mysqli_query($conexion,$consulta);

            if($resultado){
                ?>
                <h1 class="ok">nice</h1>
                <?php
            } else{
                ?>
                <h1 class="bad">error xd</h1>
                <?php
            }
        }
        else{
            ?>
            <h1 class="bad">llena los datos xd</h1>
            <?php
        }
    }
?>