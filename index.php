<?php include_once 'App.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>FakeStore</title>
</head>

<body>
    <h1 class="text-center">FakeStore</h1>
    <div class="container" action="cloths.php" method="POST">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Women's clothing</h5>
                        <img src="https://fakestoreapi.com/img/51Y5NI-I5jL._AC_UX679_.jpg" class="card-img-top img-fluid img-thumbnail" alt="...">
                        <p class="card-text">Fashion for women.</p>
                        <a href="cloths.php" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Men's clothing</h5>
                        <img src="https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg" class="card-img-top img-fluid img-thumbnail" alt="...">
                        <p class="card-text">Fashion for men.</p>
                        <a href="cloths.php" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jewelery</h5>
                        <img src="https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg" class="card-img-top img-fluid img-thumbnail" alt="...">
                        <p class="card-text">Fashion of jewelery..</p>
                        <a href="cloths.php" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <?php App::main() ?>
</body>

</html>