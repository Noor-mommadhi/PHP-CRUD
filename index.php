<?php
include 'configure.php';
$con= mysqli_connect("localhost","root","noor@123","noor");
if(isset($_POST['submit'])) {
    $Reg = $_POST['Reg'];
    $Name = $_POST['Name'];
    $colour = $_POST['colour'];
    $mileage = $_POST['mileage'];
    $Mobile = $_POST['mobile'];
    $Address = $_POST['Address'];
    $sql ="INSERT INTO vehicle(Reg,Name,colour,mileage,Mobile,Address)
values('$Reg','$Name','$colour','$mileage','$Mobile','$Address')";
    $result = mysqli_query($con,$sql);

    if ($result) {

       // echo "data inserted successfully";
        header("location:Details.php");
    } else {
        die(mysqli_error($con));
    }

}


?>

<!doctype html>
<html lang="eng">
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title> vehicles</title>
</head>
<body>
<div>
<div class="container my-4">

    <div class="row">
        <div class="col-sm-5">

        <div class="card bg-white">
            <div class="card-body">
<div class="bg-warning text-white text-center">
    <h3>Vehicles</h3>
</div><br>
    <form  action="#" method="post">

        <div class="mb-3">
            <label for="Reg no" class="form-label">Register number</label>
            <input type="number" class="form-control" id="Reg no"  name="Reg" autocomplete="off" REQUIRED>

        <div class="mb-3">
            <label for="Name" class="form-label">vehicle Name</label>
            <input type="text" class="form-control" id="Name" autocomplete="off" name="Name" REQUIRED>
        </div>

            <div class="mb-3">
                <label for="mileage" class="form-label">Mileage</label>
                <input type="number" class="form-control" id="mileage" autocomplete="off" name="mileage" REQUIRED>
            </div>
            <div class="mb-3">
                <label for="colour" class="form-label">Colour</label>
                <input type="text" class="form-control" id="colour" autocomplete="off" name="colour" REQUIRED>
            </div>
            <div class="mb-3">
                <label for="ph no" class="form-label">Mobile number</label>
                <input type="number" class="form-control" id="ph no" autocomplete="off" name="mobile" REQUIRED>
            </div>
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" id="Address" autocomplete="off" name="Address" REQUIRED>
            </div>

        <button type="submit" class="btn btn-danger" name="submit">Submit</button>
        </div>
    </div>
        </div>
    </form>
    </div>
    </div>
</div>
</div>

</body>
</html>


