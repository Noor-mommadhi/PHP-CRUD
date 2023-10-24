<?php
include 'configure.php';
$con= new mysqli("localhost","root","noor@123","noor");
?>




<!doctype html>
<html lang="eng">
<head>
    <title>Client panel</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
<style>
    .button{
        margin-left: 70%;
    }
</style


<body>
<div class="container my-5">


    <h3 class="text-danger"><i>Vehicle details</i></h3>
    <div class="button">
    <a href="select.php" class="btn btn-info text-dark"><i class="fa fa-backward"><b> Back</b></i></a>
    <a href="login.php" class="btn btn bg-danger text-white"><i class="fa fa-sign-out"> <b>Logout</b></i></a>
    </div>
    <table class="table table-bordered my-4 table   table-striped" >
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Reg</th>
            <th scope="col">Name</th>
            <th scope="col">colour</th>
            <th scope="col">mileage</th>
            <th scope="col">MobileNumber</th>
            <th scope="col">Address</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $sql="select * from vehicle";
        $result=mysqli_query($con,$sql);

        if ($result->num_rows > 0) {
            //output data of each row
            //while ($row = $result->fetch_assoc()) {
            //  if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['Id'];
                $Reg = $row['Reg'];
                $Name = $row['Name'];
                $colour = $row['colour'];
                $mileage = $row['mileage'];
                $Mobile= $row['Mobile'];
                $Address = $row['Address'];
                echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $Reg . '</td>
            <td>'.$Name.'</td>
            <td>'.$colour.'</td>
            <td>' .$mileage.'</td>
            <td>'.$Mobile.'</td>
            <td> '.$Address.'</td>
        </tr>';
                //  }
                //}
            }
        }
        ?>


        </tbody>
    </table>
</div>
</body>
</html>