<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clocksy Watches</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .navbar-inverse {
            background-color: #fff;
            border-color: #ffffff;

        }

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:focus,
        .navbar-inverse .navbar-nav>.active>a:hover {
            color: #060606;
            background-color: #ffffff;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #090909;
        }

        .navbar-inverse .navbar-nav>li>a:focus,
        .navbar-inverse .navbar-nav>li>a:hover {
            color: #0c4ad4;
            background-color: transparent;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="images/logo.png" style="width: 70px;margin-top: 15px;" />
              
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">
                        <h2>Clocksy Watches</h2>
                    </a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php" style="margin-top: 30px;font-size: 20px;">Home</a></li>
                <li><a href="myorders.php" style="margin-top: 30px;font-size: 20px">My Orders</a></li>
                <li><a href="appointment.html" style="margin-top: 30px;font-size: 20px;color: #0c4ad4">Appointment</a></li>
                <li><a href="myprofile.php" style="margin-top: 30px;margin-right: 0px;font-size: 20px;">Profile</a></li>
                <li><a href="logout.php" style="margin-top: 30px;margin-right: 100px;font-size: 20px;">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                 <h2 style="text-align: center;">My Appointments</h2>
                
                
                <table class="table table-bordered table-striped">
                           <tr>
                               <th>Appointment Id</th>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Email</th>
                                <th>Phone</th>
                               <th>Date</th>
                                <th>Time</th>
                               <th>Query</th>
                               <th>Status</th>
                           </tr>
                           
                           <?php
                           session_start();
                           include 'config.php';
                                
                                //SELECT `aid`, `fname`, `lname`, `email`, `phone`, `dat`, `tim`, `message`, `status` FROM `appointment` WHERE 1
                                $email=$_SESSION["email"];
                                $sql = "SELECT * FROM appointment where email='$email'";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                      
                                      
                                    echo "<tr><td> " . $row["aid"]. " </td><td> " . $row["fname"]. " </td><td> " . $row["lname"]. " </td> <td> " . $row["email"]. " </td><td> " . $row["phone"]. "</td><td> " . $row["dat"]. "</td>
                                    
                                    
                                   <td> " . $row["tim"]. "</td>
                                   <td> " . $row["message"]. "</td>
                                    <td> " . $row["status"]. "</td>
                                   
                                    
                                   <tr> ";
                                  }
                                } else {
                                  echo "Something went wrong";
                                }
                                
                                mysqli_close($conn);
                            
                           
                           ?>
                           
                           
                           
                           
                       </table>
            </div>
            
            
        </div>
    </div>



</body>

</html>