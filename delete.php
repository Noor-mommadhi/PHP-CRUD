<?php
include 'configure.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from vehicle where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Deleted data successfully";
        header('location:Details.php');

    }else
    {
        die(mysqli_error($con));
    }



}
?>