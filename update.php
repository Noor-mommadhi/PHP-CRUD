<?php
include 'configure.php';
$con= mysqli_connect("localhost","root","noor@123","noor");
$id=$_GET['updateid'];
$sql="select * from vehicle where id=$id";
$result=mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
$Reg= $row['Reg'];
$Name = $row['Name'];
$colour = $row['colour'];
$mileage = $row['mileage'];
$Mobile = $row['Mobile'];
$Address = $row['Address'];


if(isset($_POST['submit'])) {
    $Reg = $_POST['Reg'];
    $Name = $_POST['Name'];
    $colour = $_POST['colour'];
    $mileage = $_POST['mileage'];
    $Mobile = $_POST['mobile'];
    $Address = $_POST['Address'];
    $sql = "update vehicle set  id='$id',Reg='$Reg',Name='$Name', colour='$colour', mileage='$mileage',Mobile='$Mobile',Address='$Address' where id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {

         //echo "updated successfully";
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
    <title>Update</title>
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
                        <form method="post">

                            <div class="mb-3">
                                <label for="Reg no" class="form-label">Register number</label>
                                <input type="number" class="form-control" id="Reg no"  name="Reg" autocomplete="off" value=<?php echo $Reg;?>>

                                <div class="mb-3">
                                    <label for="Name" class="form-label">vehicle Name</label>
                                    <input type="text" class="form-control" id="Name" autocomplete="off" name="Name"  value=<?php echo $Name;?>>
                                </div>

                                <div class="mb-3">
                                    <label for="mileage" class="form-label">Mileage</label>
                                    <input type="number" class="form-control" id="mileage" autocomplete="off" name="mileage"  value=<?php echo $mileage;?>>
                                </div>
                                <div class="mb-3">
                                    <label for="colour" class="form-label">Colour</label>
                                    <input type="text" class="form-control" id="colour" autocomplete="off" name="colour"  value=<?php echo $colour;?>>
                                </div>
                                <div class="mb-3">
                                    <label for="ph no" class="form-label">Mobile number</label>
                                    <input type="number" class="form-control" id="ph no" autocomplete="off" name="mobile"  value=<?php echo $Mobile;?>>
                                </div>
                                <div class="mb-3">
                                    <label for="Address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="Address" autocomplete="off" name="Address" value=<?php echo $Address?>>
                                </div>



                                <button type="submit" class="btn btn-danger" name="submit">Update</button>
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
