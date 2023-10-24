
<?php
include 'configure.php';

$id=$_GET['viewid'];

$sql="select * from vehicle where id=$id";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
$Reg=$row['Reg'];
$Name=$row['Name'];
$colour=$row['colour'];
$mileage=$row['mileage'];
$Mobile=$row['Mobile'];
$Address=$row['Address'];

?>



<!doctype html>
<html lang="en">
<head>
    <title>Vehicle</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="view">
                <h2 style="color: red">Vehicle Details</h2><br>
                <table class="table table-bordered table-striped table bg-success">
                    <tr>
                        <th>Id</th>
                        <th>Reg</th>
                        <th>Name</th>
                        <th>colour</th>
                        <th>mileage</th>
                        <th>Mobile</th>
                        <th>Address</th>
                    </tr>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $Reg;?></td>
                        <td><?php echo $Name;?></td>
                        <td><?php echo $colour;?></td>
                        <td><?php echo $mileage;?></td>
                        <td><?php echo $Mobile?></td>
                        <td><?php echo $Address;?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
