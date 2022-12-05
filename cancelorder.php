<?php

include 'config.php';

$id = $_GET['id'];

$status = $_GET['status'];


           $sql = " UPDATE orders SET status='$status' WHERE oid='$id' ";
           
           $retval_dis = mysqli_query($conn,$sql);
        
          echo '<script> alert("Order cancelled successfully")</script>';
              echo "<script type='text/javascript'> document.location = 'orders.php';</script>";
       


$conn->close();

?>