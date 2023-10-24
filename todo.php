<!doctype html>
<html lang="eng">
<head>
    <title>
        Todo list
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
<form action="Add.php" method="POST">
 <div class="container ">

         <div class="row justify-content-center  m-auto shadow  my-5 mt-3 py-2 BG-WHITE col-md-8 bg-warning">
               <h3 class="text-center text-primary font-monospace">TODO List </h3>


             <div class=" col-8 mb-3">

                 <input type="text" class="form-control"   name="List" autocomplete="off" REQUIRED>
             </div>

             <div class="col-2">
                 <button name="add"  class="btn btn-outline-primary"> <i class="fa fa-plus"></i></button>

          <!--   <a href="Add.php" class="btn btn-outline-primary">Add</a>-->
             </div>
         </div>
     </div>
 </div>
</form>
<!--get data-->
<?php
include 'configure.php';
$sql="select * from Todo";
$rawdata= mysqli_query($con,$sql)


?>
<div class="container  ">
   <div class= "  col-8 mt-3 m-auto bg-light " >


        <table class="table table-border m-auto shadow">
            <tbody>
            <?php
               while ($row =mysqli_fetch_assoc($rawdata)){

            ?>

    <tr>
        <td> <?php echo $row['id'];?></td>
        <td> <?php echo $row['List'];?></td>


        <td style="width:10%"> <a href="del.php?id=<?= $row['id']?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt">delete</i></a> </td>


        <td style="width: 10%"> <a href="edit.php?id=<?= $row['id']?>" class="btn btn-outline-info"><i class="fas fa-edit">update</i></a> </td>
    </tr>
            <?php
               }
            ?>
    </tbody>
</table>
        </table>
    </div>
  </div>
</body>
</html>