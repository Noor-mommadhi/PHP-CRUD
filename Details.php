<?php
include 'configure.php';
$con= new mysqli("localhost","root","noor@123","noor");
?>




<!doctype html>
<html lang="eng">
<head>
    <title> Details</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">


 <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div class="container my-5">
    <a href="index.php" class= "btn btn-warning text-dark"><i class='fas fa-address-card'> <b>Add details</b></i></a>
    <a href="select.php" class="btn btn-info text-dark"><i class="fa fa-backward"><b> Back</b></i></a>
    <a href="login.php" class="btn btn bg-danger text-white"><i class="fa fa-sign-out"> <b>Logout</b></i></a>
    <table class="table table-bordered my-4" >
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Reg</th>
            <th scope="col">Name</th>
            <th scope="col">colour</th>
            <th scope="col">mileage</th>
            <th scope="col">MobileNumber</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
       $sql="select * from vehicle";
      $result=mysqli_query($con,$sql); //execute query method

if ($result->num_rows > 0) {
    //output data of each row

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
            <td> '.$Address.'</td>0
                 <td>
           <a href="view.php?viewid='.$id.'" class="text-white btn btn bg-warning"><i class="fas fa-eye"></i></a>
           <a href="update.php?updateid='.$id.'" class=" text-white btn btn bg-info" > <i class="fas fa-edit"></i> </a>
           <a href="delete.php?deleteid='.$id.'" class="text-white btn btn bg-danger"><i class="fas fa-trash-alt"></i> </a> 
        </td>
        </tr>';


    }
}
        ?>


        </tbody>
    </table>
</div>
</body>
</html>