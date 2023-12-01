<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php

    require 'productos.php';

    foreach (datos_productos()  as $key => $value) {


        // $calidadArray = json_decode($producto['calidad'], true);
        //    echo "<br>$key . $value";


    ?>


        <div class="contenedor">
          
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <img src="<?php echo $value['imagen'] ?>" class="card-img-top" alt="...">
                        <h5 class="card-title"><?php echo $value['id'] ?></h5>
                        <p class="card-text"><?php echo $value['precio'] ?></p>
                        <!-- <p class="card-text"><?php echo $value['calidad'] ?></p> -->






                        <!-- agregar <php y ?> foreach ($calidadArray as $val) {
                    echo "<p> $val</p>";
                }
                 -->

                        <a href="#" class="btn btn-primary"> <?php echo $value['nombre'] ?></a>
                    </div>
                </div>

            </div>
        <!-- </div> -->

    <?php
    }
    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>