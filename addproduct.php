<?php

include 'config.php';
$name = $_POST['name'];
$des = $_POST['des'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

//SELECT `pid`, `name`, `desciption`, `price`, `quantity`, `type`, `photo` FROM `product` WHERE 1


$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_json = "SELECT * from product where name='$name'";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {

      $target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO product (name,desciption,price,quantity,type,photo) VALUES ('$name','$des','$price','$quantity','$type',' $target_path')";

    if ($conn->query($sql) === TRUE) {
        echo '<script> alert("Product Added Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'products.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 
      
      
}else{
       echo '<script> alert("Book exists please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'products.php';</script>";
}
?>

