<?php
include 'configure.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="delete from Todo where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
         //echo "Deleted data successfully";
        header('location:todo.php');

    }else
    {
        die(mysqli_error($con));
    }



}
?>