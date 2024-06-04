<?php
    require("functions.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <!-- Use only one version of Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
            </div>
            <span class="navbar-text" style="color: white"><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span>
            <span class="navbar-text" style="color: white"><strong>Email: <?php echo $_SESSION['email'];?></strong></span>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Profile </a>
                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="view_profile.php">View Profile</a></li>
                    <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
                    <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
              </li>
            </ul>
        </div>
    </nav><br>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-center">
              <li class="nav-item">
                <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="booksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Books </a>
                <ul class="dropdown-menu" aria-labelledby="booksDropdown">
                    <li><a class="dropdown-item" href="add_book.php">Add New Book</a></li>
                    <li><a class="dropdown-item" href="manage_book.php">Manage Books</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category </a>
                <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                    <li><a class="dropdown-item" href="add_cat.php">Add New Category</a></li>
                    <li><a class="dropdown-item" href="manage_cat.php">Manage Category</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="authorsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Authors</a>
                <ul class="dropdown-menu" aria-labelledby="authorsDropdown">
                    <li><a class="dropdown-item" href="add_author.php">Add New Author</a></li>
                    <li><a class="dropdown-item" href="manage_author.php">Manage Author</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="issue_book.php">Issue Book</a>
              </li>
            </ul>
        </div>
    </nav><br>
    <div class="row">
        <div class="col-md-3" style="margin: 0px ">
            <div class="card bg-light" style=" width: 300px ">
                <div class="card-header">Registered User</div>
                <div class="card-body">
                    <p class="card-text">No. total Users: <?php echo get_user_count();?></p>
                    <a class="btn btn-danger" href="Regusers.php" target="_blank">View Registered Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin: 0px">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Total Book</div>
                <div class="card-body">
                    <p class="card-text">No of books available: <?php echo get_book_count();?></p>
                    <a class="btn btn-success" href="Regbooks.php" target="_blank">View All Books</a>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin: 0px">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Book Categories</div>
                <div class="card-body">
                    <p class="card-text">No of Book's Categories: <?php echo get_category_count();?></p>
                    <a class="btn btn-warning" href="Regcat.php" target="_blank">View Categories</a>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin: 0px">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">No. of Authors</div>
                <div class="card-body">
                    <p class="card-text">No of Authors: <?php echo get_author_count();?></p>
                    <a class="btn btn-primary" href="Regauthor.php" target="_blank">View Authors</a>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-md-3" style="margin: 0px">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Book Issued</div>
                <div class="card-body">
                    <p class="card-text">No of book issued: <?php echo get_issue_book_count();?></p>
                    <a class="btn btn-success" href="view_issued_book.php" target="_blank">View Issued Books</a>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </div>
    <!-- Include only Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
