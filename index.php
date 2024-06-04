<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
      <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    #main_content{
        background: rgba(245, 245, 245, 0.9);
        padding: 50px;
    }
    #side_bar{
        background: rgba(245, 245, 245, 0.9);
        padding: 50px;
    }
    .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: #333;
    color: white;
}

.logo a{
    font-size: 1.5rem;
    font-weight: bold;
    color: white;
    text-decoration: none;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 1.5rem;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 1rem;
}

.nav-links a:hover {
    color: #ff6347;
}

@media (max-width: 768px) {
    .nav-links {
        display: none;
    }

    .navbar {
        justify-content: space-between;
    }
}
    .nav{
        float: left;
    }

    .column {
        float: left;
        width: 50%;
        padding: 10px;
         /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
    body{
      background: rgba(245, 245, 245, 0.4);
      background-image: url("https://img.freepik.com/free-photo/abundant-collection-antique-books-wooden-shelves-generated-by-ai_188544-29660.jpg?size=626&amp;ext=jpg&amp;ga=GA1.1.1546980028.1704240000&amp;semt=sph");
     }
</style>
<body>

<nav class="navbar">
        <div class="logo"> <a href="index.php">Library Management System</a></div>
        <ul class="nav-links">
            <li><a href="index.php">User Login</a></li>
            <li><a href="admin_login.php">Admin Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
    </nav>
    
    
    <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h5>Today's Quote</h5>
    <h6>“There is more treasure in books than in all the pirate's loot on Treasure Island"</h6>
    <p>~ Walt Disney</p>
    <h5>Library Timing</h5>
    <ul>
        <li>Opening: 9:00 AM</li>
        <li>Closing: 12:00 PM</li>
    </ul>
    <h5>What We provide ?</h5>
    <ul>
        <li>AC Rooms</li>
        <li>Free Wi-fi</li>
        <li>Learning Environment</li>
        <li>Discussion Room</li>
        <li>Free Electricity</li>
    </ul>
  </div>
  <div class="column" style="background-color:#bbb;">
    <center><h3>User Login Form</h3></center>
    <form action="" method="post">
        <div class="form-group">
            <label for="email">Email ID:</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login</button> |
        <a href="signup.php"> Signup now !!</a>    
    </form>
    <?php 
        if(isset($_POST['login'])){
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,"lms");
            $query = "select * from users where email = '$_POST[email]'";
            $query_run = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($query_run)) {
                if($row['email'] == $_POST['email']){
                    if($row['password'] == $_POST['password']){
                        $_SESSION['name'] =  $row['name'];
                        $_SESSION['email'] =  $row['email'];
                        $_SESSION['id'] =  $row['id'];
                        header("Location: user_dashboard.php");
                    }
                    else{
                        ?>
                        <br><br><center><span class="alert-danger">Wrong Password !!</span></center>
                        <?php
                    }
                }
            }
        }
    ?>
  </div>
</div>


    <div class="row">
        <div class="col-md-4" id="side_bar">
            
        </div>
        <div class="col-md-8" id="main_content">
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
