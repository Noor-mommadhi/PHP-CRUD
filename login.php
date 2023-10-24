<?php
include 'configure.php';

?>

<!doctype html>
<html lang="en">
<head>
    <title>login</title>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        .new{
            margin-left: 400px;
            margin-top: 30px;
        }
        body{


            background-size: cover;
        }
        .btn{
            border-radius: 30px;
            width: 80px;

        }
        .form-group i{
            position: relative;
            left: 85%;
            top: -25px;
            display: none;

        }
        .fa-check-circle
        {
            color:green;
        }
        .fa-exclamation{
            color: red;
        }
        .form-control .n_ok i.fa-check-circle{
            color: green;
            visibility: visible;
        }
        .form-control .n_remove i.fa-exclamation{
            color: red;
            visibility: visible;}
    </style>
</head>
<body class="body body bg-secondary">
<!--navbar-->


<!--<nav class="navbar navbar-expand-sm bg-warning text-white  justify-content-right">
    <ul class="navbar-nav justify-"content="center">
        <li class="nav-item"><a href="boostrap.html" class="nav-link  "> <i class="fas fa-home"></i>Home</a> </li>

    </ul>
</nav>-->
<!---from-->


<div class="new my-5">

    <div class="container justify-content-center">
        <div class="row">
            <div class="col-sm-7">
                <nav class="navbar navbar-expand-sm bg-warning text-white  justify-content-center">
                    <ul class="navbar-nav justify-"content="center">
                        <li class="nav-item">
                            <h3> <b>LOGIN</b></h3> </li>
                    </ul>
                </nav>
            </div>


            <div class="container ">
                <div class="row ">
                    <div class="col-sm-7">
                        <div class="card bg-white">
                            <div class="card-body">
                                <form action="select.php" >
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <label for="user" ><span class="fas fa-user"></span> User name  </label>
                                            <input type="text"  placeholder=" Enter User Name" id="user" class="form-control" required>
                                            <i class="fas fa-check-circle n_ok"></i>
                                            <i class="fa fa-exclamation n_remove"></i>
                                        </div>
                                    </div><br>

                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label for="password3"><span class='fas fa-eye-slash'></span> Password</label>

                                            <input type="password" id="password3" placeholder="Enter the password" class="form-control">
                                            <i class="fas fa-check-circle pd_ok"></i>
                                            <i class="fa fa-exclamation pd_remove"></i>


                                        </div>
                                    </div> <br>
                                    <!--button-->

                                    <b>         <input type="submit" value="login" class="bg-warning btn"> </b>
                                    <script type="text/javascript" src="script1.js"></script>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

