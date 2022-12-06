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
                <li><a href="index.php" style="margin-top: 30px;font-size: 20px;color: #0c4ad4;">Home</a></li>
                <li><a href="about.html" style="margin-top: 30px;font-size: 20px">About</a></li>
                <li><a href="contact.html" style="margin-top: 30px;font-size: 20px">Contact Us</a></li>
                <li><a href="signin.html" style="margin-top: 30px;margin-right: 0px;font-size: 20px">User</a></li>
                <li><a href="adminlogin.html" style="margin-top: 30px;margin-right: 100px;font-size: 20px;"></a></li>
            </ul>
        </div>
    </nav>


    <div class="container">

        <div class="row" style="margin-top:50px">

            <div class="col-md-4" >
                
                <div class="well" style="text-align:center;padding-top:50px;padding-bottom:50px">
                  <a href="indexproducts.php?cat=Mens"> <img src="https://staticimg.titan.co.in/Fastrack/Catalog/3184QM01_1.jpg?pView=pdp" style="width: 100px;height:100px;margin-top: 15px;" /><br/>
                   <h3> Men's Watches</h3></a>
                </div>
                
            </div>

          <div class="col-md-4" >
                
                <div class="well" style="text-align:center;padding-top:50px;padding-bottom:50px">
                  <a href="indexproducts.php?cat=Womens">   <img src="https://staticimg.titan.co.in/Fastrack/Catalog/3184QM02_1.jpg?pView=pdp" style="width: 100px;height:100px;margin-top: 15px;" /><br/>
                      <h3>  Women's Watches</h3></a>
                </div>
                
            </div>
             <div class="col-md-4" >
                
                <div class="well" style="text-align:center;padding-top:50px;padding-bottom:50px">
                  <a href="indexproducts.php?cat=Accessories">   <img src="https://cdn-images.farfetch-contents.com/17/24/95/41/17249541_35266092_300.jpg" style="width: 100px;height:100px;margin-top: 15px;" /><br/>
                   <h3>  Accessories</h3></a>
                </div>
                
            </div>
            
            <div class="col-md-12" style="text-align:center">
                
                 <button class="btn btn-info" onclick="check()">Shop Now</button>
            </div>
            
          
        </div>


    </div>
    
    
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <h3 style="text-align: center;margin: 30px;">Featured Products</h3>
                 
                
                
            </div>
            
            
        </div>
        
         <div class="row" style="margin-top:50px">
            
            
             <?php
                                        
                                         include 'config.php';
                           //SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
            
                         
                            $sql = "SELECT * FROM product";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-3">
                
                             
                                   <img src="' . $row["photo"] . '" class="img-thumbnail"  style="width:100%;height:200px"/>
                                    
                                    <h4 style="text-align:left">
                                    
                                     <a>' . $row["name"] . '</a>
                               
                                    </h4>
                                    <p>$'. $row['price'] .'</p>
                                    <p><button class="btn btn-primary" onclick="check()">Buy</button></p>
                                   
                                </div>
                              
                                
                            
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