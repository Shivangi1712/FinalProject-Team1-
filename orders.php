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
                  <li><a href="adminhome.php" style="margin-top: 30px;font-size: 20px">Home</a></li>
                <li><a href="customers.php" style="margin-top: 30px;font-size: 20px">Customers</a></li>
                <li><a href="products.php" style="margin-top: 30px;font-size: 20px">Products</a></li>
                <li><a href="orders.php" style="margin-top: 30px;margin-right: 0px;font-size: 20px;color: #0c4ad4">Orders</a></li>
                 <li><a href="appointments.php" style="margin-top: 30px;font-size: 20px">Appointments</a></li>
                <li><a href="logout.php" style="margin-top: 30px;margin-right: 100px;font-size: 20px;">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                 <h2 style="text-align: center;">Customer Orders</h2>
                 
                 <hr/>
                
                
                <table class="table table-bordered table-striped">
                           <tr>
                               <th>Order Id</th>
                               <th>Name</th>
                               <th>Date</th>
                               <th>Product Name</th>
                               <th>Photo</th>
                               <th>Price</th>
                                <th>Quantity</th>
                               <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                           </tr>
                           
                           <?php
                           session_start();
                           include 'config.php';
                                
                                //SELECT `oid`, `pid`, `email`, `name`, `photo`, `qty`, `price`, `total_amount`, `status`, `dat` FROM `orders` WHERE 1
                              
                                $sql = "SELECT orders.oid,user.fname,orders.dat,orders.name,orders.photo,orders.price,orders.qty,orders.total_amount,orders.status FROM `orders` JOIN user on orders.email=user.email";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                      
                                      
                                    echo "<tr><td> " . $row["oid"]. " </td><td> " . $row["fname"]. " </td><td> " . $row["dat"]. " </td><td> " . $row["name"]. " </td> 
                                    <td> <img src=". $row["photo"]. "  style='width:50px;height:50px'/></td><td> " . $row["price"]. "</td><td> " . $row["qty"]. "</td>
                                    
                                    
                                   <td> " . $row["total_amount"]. "</td>
                                 
                                    <td> " . $row["status"]. "</td>
                                    <td>
                                    <a href='acceptorder.php?id=" . $row['oid'] . "&status=Order Confirmed'><button>Confirm</button></a>
                                 <a href='cancelorder.php?id=" . $row['oid'] . "&status=Order Cancelled'><button>Cancel</button></a>
                                    </td>
                                   
                                    
                                   </tr> ";
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



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 
        
        <hr/>
            </div>
        </div>
        </div>
        
        

</body>

</html>