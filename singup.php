<?php

include 'config.php';
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pass = $_GET['pass'];
$add = $_GET['add'];
$qus = $_GET['qus'];
$ans = $_GET['ans'];
$cno = $_GET['cno'];
$cvv = $_GET['cvv'];
$month = $_GET['month'];
$year = $_GET['year'];


//SELECT `id`, `fname`, `lname`, `phone`, `email`, `pass`, `address`, `qus`, `ans`, `status`, `cardno`, `mon`, `year`, `cvv` FROM `user` WHERE 1

$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_json = "SELECT * from user where email='$email'";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
    
$query_dis="INSERT INTO user (fname,lname, email,phone, pass,address,qus,ans,cardno,mon,year,cvv,status)
VALUES ('$fname', '$lname', '$email', '$phone','$pass','$add','$qus','$ans','$cno','$month','$year','$cvv','Active')";
//echo $query_dis; 

$retval_dis = mysqli_query($con,$query_dis);

mysqli_close($con);
 echo '<script> alert("Customer Register Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'signin.html';</script>";
}else{
      echo "<script type='text/javascript'> document.location = 'singup.html';</script>";
}
?>
