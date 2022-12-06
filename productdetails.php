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
                <li class="active"><a href="home.php">
                        <h2>Clocksy Watches</h2>
                    </a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php" style="margin-top: 30px;font-size: 20px;color: #0c4ad4;">Home</a></li>
                <li><a href="myorders.php" style="margin-top: 30px;font-size: 20px">My Orders</a></li>
                <li><a href="appointment.html" style="margin-top: 30px;font-size: 20px">Appointment</a></li>
                <li><a href="myprofile.php" style="margin-top: 30px;margin-right: 0px;font-size: 20px">Profile</a></li>
                <li><a href="logout.php" style="margin-top: 30px;margin-right: 100px;font-size: 20px;">Logout</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">

        <div class="row" style="margin-top:50px">

            <div class="col-md-3" >
                   <button type="button" class="btn btn-primary form-control"><a style="color:white" href="home.php?cat=Mens">All Products</a></button>
            </div>

         
          <div class="col-md-3" >
   <button type="button" class="btn btn-default form-control"><a href="homeproducts.php?cat=Mens">Mens</a></button>
  </div>
             <div class="col-md-3" >
                
            
                    <button type="button" class="btn btn-default form-control"><a href="homeproducts.php?cat=Womens">Womens</a></button>
                 </div>
             <div class="col-md-3" >
                
            
                    <button type="button" class="btn btn-default form-control"><a href="homeproducts.php?cat=Accessories">Accessories</a></button>
           </div>
          
        </div>


    </div>
    
    
     <div class="container">
        <div class="row">
           
        </div>
        
         <div class="row" style="margin-top:50px">
            
            
             <?php
                                        
                                         include 'config.php';
                           //SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
            
                            $id=$_GET['id'];
                            $sql = "SELECT * FROM product where pid='$id'";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              <div class="col-md-3"></div>
                               <div class="col-md-3">
                
                                
                                   <img src="' . $row["photo"] . '" class="img-thumbnail"  style="width:100%;height:200px"/>
                                    
                                    
                                   
                                </div>
                               <div class="col-md-3">
                               
                               <h2 style="text-align:left">
                                    
                                     <a style="text-align:left" href="productdetails.php?id='. $row['pid'] .'">' . $row["name"] . '</a>
                               
                                    </h2>
                                        <p>Description : '. $row['desciption'] .'</p>
                                            <p>Price : $'. $row['price'] .'</p>
                                    <p>Category : '. $row['type'] .'</p>
                                    <form action="AddCart.php">
                                          
                                            <label style="margin:10px">Select Quantity</label>
                                            <input type="number" class="form-control"  name="quantity" value="1" min="1" max="50" />
                                           <br/>
                                          <input type="hidden" name="photo" value="'.$row['photo'].'" />
                                            <input type="hidden" name="pid" value="'.$row['pid'].'" />
                                            <input type="hidden" name="name" value="'.$row['name'].'" />
                                            <input type="hidden" name="price" value="'.$row['price'].'" />
                                            <input type="hidden" name="desciption" value="'.$row['desciption'].'" />
                                            <input type="submit" value="Add to Cart" class="btn btn-success btn-sm btnAddAction" / >
                    
                    
                                            </form>
                               
                               
                               </div>
                                <div class="col-md-3"></div>
                                
                            
                                ';
                                }
                            } else {
                                echo "No Events Found";
                            }
                            $conn->close();
            
            
                                        
                                        ?>

  <script>
                                
                                function check()
                                {
                                    alert("Please Login to Continue Shopping");
                                }
                                
                                
                                </script>
    </div>
        </div>




</body>

</html>