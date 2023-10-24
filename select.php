<?php

include 'configure.php';
?>
<!doctype html>
<html lang="eng">
<head>
    <title>select</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        .container1{
            margin-bottom: 50%;

        }
    </style>
</head>
<body>

<div class="container">
    <h3 class="text-center bg-warning ">Choose The Panel</h3><br>
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="width: 18rem;">
                <img src="admin.jpg" class="card-img-top" alt="admin image">
                <div class="card-body">
                    <h5 class="card-title">ADMIN</h5>

                    <a href="Details.php" class="btn btn-primary">Click me</a>
                </div>
            </div>


        </div>

            <div class="col-sm-6">
                <div class="card"  style="width: 18rem;">
                    <img src="ur.jpeg" class="card-img-top" alt="admin image">
                    <div class="card-body">
                        <h5 class="card-title">USER</h5>

                        <a href="client.php" class="btn btn-primary">Click me</a>
                    </div>
                </div>


            </div>
    </div>
</div>



</body>
</html>




