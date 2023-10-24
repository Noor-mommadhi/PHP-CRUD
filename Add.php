<?php

include 'configure.php';
$con=new mysqli("localhost","root","noor@123","noor");
if(isset($_POST['add'])) {
    $List = $_POST['List'];
    $sql = "INSERT INTO Todo(List) values ( '$List')";

    $result = mysqli_query($con, $sql);

    if ($result) {

      //  echo "data inserted successfully";
         header("location:todo.php");
    } else {
        die(mysqli_error($con));
    }
}


?>