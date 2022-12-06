<?php

include 'config.php';

$pid = $_POST['pid'];

$name = $_POST['name'];
$des = $_POST['des'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

  ////SELECT `pid`, `name`, `desciption`, `price`, `quantity`, `type`, `photo` FROM `product` WHERE 1

           $sql = " UPDATE product SET name='$name', desciption='$des', type='$type', price='$price', quantity='$quantity' WHERE pid='$pid' ";
           
           $retval_dis = mysqli_query($conn,$sql);
        
          echo '<script> alert("Product updated Successfully")</script>';
              echo "<script type='text/javascript'> document.location = 'products.php';</script>";
       


$conn->close();

?>