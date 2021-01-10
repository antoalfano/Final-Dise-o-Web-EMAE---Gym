<!doctype html>
<html lang="es">
  <head>
    <!--Required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--Bootstrap CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />

    <!--CSS-->
    <link rel="stylesheet" href="css/main.css" />
</head>



<?php

include("database.php");


if (isset($_POST['registrar'])){

if (strlen($_POST['email']) >= 1 ){

    $mail = trim($_POST['email']);
    $fecha = date("d/m/y");

    $consulta = "INSERT INTO `data`(`email`, `fechareg`) VALUES ('$mail','$fecha')";

    $resultado = mysqli_query($conex,$consulta);

    if ($resultado){
        ?>
        <h3 class="bien">Te has inscripto correctamente!!</h3>
        <div class="text-center">
        <a href="index.php"><button type="submit" class="btn btn-primary">Volver a la página principal</button></a> 
        </div>
        <?php
    }else {
        ?>
        <h3 class="bien">Ups! Ha ocurrido un error.</h3>
        <div class="text-center">
        <a href="index.php"><button type="submit" class="btn btn-primary">Volver a la página principal</button></a> 
        </div>
        <?php
    } 
    
    }else{
        ?>
        <h3 class="error">Ups! Ha ocurrido un error.</h3>
        <div class="text-center">
        <a href="index.php"><button type="submit" class="btn btn-primary">Volver a la página principal</button></a> 
        </div>
        <?php

   }

}


?>

</html>