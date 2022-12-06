<!DOCTYPE html>
<html lang="en">

<head>
     <title>Clocksy Watches</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
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
                <li><a href="myprofile.php" style="margin-top: 30px;margin-right: 0px;font-size: 20px">Profile</a></li>
                <li><a href="logout.php" style="margin-top: 30px;margin-right: 100px;font-size: 20px;">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
             <div class="col-md-4"></div>
            <div class="col-md-4">
                 <h2 style="text-align: center;">Book Appointment</h2>
                
             <?php
                           session_start();
                           include 'config.php';
                                
                                
                                $email=$_SESSION["email"];
                                $sql = "SELECT * FROM user where email='$email'";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                      
                                      
                                    echo "
                    
                                                <form method='GET' action='book.php'>
                                                
                                               
                                                    <div class='form-group'>
                                                        <label>First Name</label>
                                                        <input type='text' class='form-control' name='fname' value='" . $row["fname"] . "' readonly required>
                                                      
                                                    </div>
                                                    
                                                    <div class='form-group'>
                                                        <label>Last Name</label>
                                                        <input type='text' class='form-control' name='lname' value='" . $row["lname"] . "' readonly required>
                                                      
                                                    </div>

                                                     <div class='form-group'>
                                                        <label>Email</label>
                                                        <input type='text' class='form-control' name='email' value='" . $row["email"] . "' required readonly>
                                                      
                                                    </div>
                                                 
                                                     <div class='form-group'>
                                                        <label>Phone</label>
                                                        <input type='text' class='form-control' name='phone' value='" . $row["phone"] . "' readonly required>
                                                      
                                                    </div>
                                                    
                                                    <div class='form-group'>
                                                    <label for='dat' >Date</label>
                                                        <br/>
                                                    
                                            
                                            
                                            <div class='input-group date' id='datepicker1'>
                                                <input type='text' id='dat' name='dat' class='form-control' required />
                                                <span class='input-group-addon'>
                                                    <span class='glyphicon glyphicon-calendar'></span>
                                                </span>
                                            </div>
                                                      
                                                                                              
                                                    
                                                    </div>
                                                    
                                                     <div class='form-group'>
                                                      <label for='tim' >Time</label>
                                                        <br/>
                                                       
                                           
                                                        <select id='tim' name='tim'  class='form-control'>
                                                            <option>10AM</option>
                                                            <option>11AM</option>
                                                            <option>12PM</option>
                                                            <option>13PM</option>
                                                            <option>14PM</option>
                                                            <option>15PM</option>
                                                            <option>16PM</option>
                                                            <option>17PM</option>
                                                            <option>18PM</option>
                                                            <option>19PM</option>
                                                        </select>
                                                     </div>
                                                       
                                                    
                                                   
                                                     <div class='form-group'>
                                                        <label>Query</label>
                                                        <textarea class='form-control' name='query' id='query' required></textarea>
                                                      
                                                    </div>
                                                   
                                                    <button class='btn btn-primary form-control'>Update </button>
                                                </form>
                    
                    
                                    
                                    ";
                                  }
                                } else {
                                  echo "Something went wrong";
                                }
                                
                                mysqli_close($conn);
                            
                           
                           ?>
                           
                     <script type="text/javascript">
                                                    $(function () {
                                         var date = new Date();
                                         date.setDate(date.getDate());
                                         
                                                        $('#datepicker1').datepicker({
                                         startDate: date,
                                                        });
                                         $('#datepicker1').datepicker("setDate", new Date());
                                                    });
                                                 </script>                  
            </div>
            <div class="col-md-4"></div>
            
        </div>
    </div>



</body>

</html>