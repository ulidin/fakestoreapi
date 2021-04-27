<?php include_once 'App.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Clothes</title>
</head>

<body class="container">
    <div class="row">
        <!-- <h1 class="text-center"></h1> -->
    </div>
    <div class="row d-flex">
        <!-- http://webacademy.se/fakestore/ -->
        <!-- 'https://fakestoreapi.com/products/'-->
        <?php App::getDataImages('https://fakestoreapi.com/products/'); ?>
    </div>
</body>

</html>