<?php

include 'config.php';

$id = $_GET['id'];

$status = $_GET['status'];


           $sql = " UPDATE appointment SET status='$status' WHERE aid='$id' ";
           
           $retval_dis = mysqli_query($conn,$sql);
        
          echo '<script> alert("Appointment approved successfully")</script>';
              echo "<script type='text/javascript'> document.location = 'appointments.php';</script>";
       


$conn->close();

?>