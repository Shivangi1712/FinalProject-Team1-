<?php
include'config.php';

$id=$_GET["id"];

$sql="DELETE FROM product WHERE pid='$id';";
	 

if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:products.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>