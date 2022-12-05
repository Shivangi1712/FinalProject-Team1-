<?php
include'config.php';

$id=$_GET["id"];

$sql="DELETE FROM user WHERE id='$id';";
	 

if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:customers.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>