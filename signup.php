<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body{
        background-image: url(images/background.jpg);
    }
    .container{
        margin-top: 10%;
    }
    .column{
        padding: 20px;
        text-align: start;
        background-color: rgba(79, 6, 250, 0.5);
        color: aliceblue;
    }
    .column h5{
      color: red;
    }

    
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Library Management System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">User Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/indexad.php">Admin Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Signup</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    <div class="container text-center">
        <div class="row ">
          <div class="col">
                <div class="column" >
                    <h5><b>Today's Quote</b></h5>
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
                
          </div>
          <div class="col" style="background-color: black; color: aliceblue; text-align: start; border-radius: 15px; padding: 20px;">
            <div class="col-md-8" id="main_content">
              <center><h3><u>User Registration Form</u></h3></center>
              <form action="register.php" method="post">
                  <div class="form-group">
                      <label for="name">Full Name:</label>
                      <input type="text" name="name" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email ID:</label>
                      <input type="text" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" name="password" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="mobile">Mobile:</label>
                      <input type="text" name="mobile" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="address">Address:</label>
                      <textarea name="address" class="form-control" required></textarea> 
                  </div>
                  <button type="submit" class="btn btn-primary">Register</button>    
              </form>
          </div>
               
              </div>
          </div>
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>