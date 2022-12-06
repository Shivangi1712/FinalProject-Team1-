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
                <!-- <a class="navbar-brand" href="#">GSY Services</a> -->
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">
                        <h2>Clocksy Watches</h2>
                    </a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="adminhome.php" style="margin-top: 30px;font-size: 20px;">Home</a></li>
                <li><a href="customers.php" style="margin-top: 30px;font-size: 20px">Customers</a></li>
                <li><a href="products.php" style="margin-top: 30px;font-size: 20px">Products</a></li>
                <li><a href="orders.php" style="margin-top: 30px;margin-right: 0px;font-size: 20px">Orders</a></li>
                 <li><a href="appointments.php" style="margin-top: 30px;font-size: 20px">Appointments</a></li>
                <li><a href="logout.php" style="margin-top: 30px;margin-right: 100px;font-size: 20px;">Logout</a></li>
            </ul>
        </div>
    </nav>


      <div class="container">
          
          
          <div class="row">

            <div class="col-md-6" >
                
                 <h2>Search Products</h2>

  <input class="form-control" id="myInput" type="text" placeholder="Search..">
            </div>
    <div class="col-md-3" ></div>   
            <div class="col-md-3" style="text-align: left;margin-top: 50px;">
                
                <a href="addproduct.html" style="text-align: left"><button class="btn btn-success">+ Add Product</button></a>
                </div>
                </div>
          
          
        <div class="row">
            
            <div class="col-md-12">
                 
                 <hr/>
                 
                
                <br/>
             
                 <table class="table table-stripped table-bordered">
                    
                        <tr>
                            <th>Product ID</th>
                            <th>Photo</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                           
                        </tr>
                    <tbody id="myTable"> 
                        <?php



                        include 'config.php';

                        //SELECT `pid`, `name`, `desciption`, `price`, `quantity`, `type`, `photo` FROM `product` WHERE 1
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM product";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                                <tr>
                                <td> " . $row['pid'] . "</td>
                                    <td> <img src='" . $row['photo'] . "' style='width:50px;height:50px' /></td>
                                 <td> " . $row['type'] . "</td>
                                 <td> " . $row['name'] . "</td>
                                 <td> " . $row['desciption'] . "</td>
                                 <td> " . $row['price'] . "</td>
                                 <td> " . $row['quantity'] . "</td>
                                 <td>
                                 <a href='editproduct.php?id=" . $row['pid'] . "&name=" . $row['name'] . "&type=" . $row['type'] . "&desciption=" . $row['desciption'] . "&price=" . $row['price'] . "&quantity=" . $row['quantity'] . "'><button><span class='glyphicon glyphicon-edit' style='color: black;'></span></button></a>
                                 <a href='deleteproduct.php?id=" . $row['pid'] . "'><button><span class='glyphicon glyphicon-trash' style='color: black;'></span></button></a>
                                 </td>
                            
                                
                                </tr> ";
                            }
                        } else {
                            echo "No Records Found";
                        }
                        $conn->close();
                        ?>
                     </tbody>
                     
                     <script>
                        $(document).ready(function(){
                          $("#myInput").on("keyup", function() {
                         var value = $(this).val().toLowerCase();
                         $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                     });
                   });
                });
</script>
                </table>
                
            </div>
            
            
        </div>
    </div>


</body>

</html>