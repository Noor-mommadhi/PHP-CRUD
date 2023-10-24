<?php
include 'configure.php';
    $id=$_GET['id'];
$sql="select * from Todo where id=$id";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$id=$row['id'];
$list=$row['List'];

if(isset($_GET['add'])) {
    $id=$_GET['id'];
    $list=$row['List'];

    $sql = "update Todo set id='$id',List='$list' where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "Updated successfully";
        header('location:edit.php');
    }
}
?>
<!doctype html>
<html lang="eng">
<head>
    <title>edit</title>



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">


    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="">
<form action="edit1.php" method="POST">
    <div class="container">

        <div class="row justify-content-center  m-auto shadow  my-5 mt-3 py-2 BG-WHITE col-md-8">
            <h3 class="text-center text-primary font-monospace">EDIT </h3>


            <div class=" col-10 mb-3">

                <input type="text" class="form-control"   value="<?php echo $row['List'];?>" name="List" autocomplete="off" >
            </div>

            <div class="col-2">
                <button name="add"  class="btn btn-outline-primary">update</button>
                <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            </div>
        </div>
    </div>
    </div>
</form>
</body>
</html>
