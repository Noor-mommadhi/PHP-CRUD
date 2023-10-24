<?php
include 'configure.php';
$list=$_POST['List'];
$id=$_POST['id'];
$sql= "update Todo set List='$list' where id=$id";
$result=mysqli_query($con,$sql );
header('location:todo.php');
?>