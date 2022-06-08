<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Left -->
            <nav class="classy-navbar">
                <a class="nav-brand" href="index.php"><img src="img/core-img/lhglogo.PNG" alt=""></a>
                <!-- Mobile Menu -->
                <div class="classy-navbar-toggler">
                    <a href="index.php">Home</a>
                    <a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
                    <div class="dropdown-menu" style="width: 100px;">
                        <a class="dropdown-item" href="Material.php?category=1">Category 1</a>
                        <a class="dropdown-item" href="Material.php?category=2">Category 2</a>
                        <a class="dropdown-item" href="Material.php?category=3">Category 3</a>
                    </div>
                    <a href="#">Contact</a>
                </div>
                <!-- Desktop Menu -->
                <div class="classy-menu">
                    <div class="classynav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="Material.php?category=1">Category 1</a>
                                    <a class="dropdown-item" href="Material.php?category=2">Category 2</a>
                                    <a class="dropdown-item" href="Material.php?category=3">Category 3</a>
                                </div>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Right -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search" autocomplete="off">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- SSO -->
                <div class="user-login-info user-login-color">
                    <a href="#" data-toggle="modal" data-target="#modalLoginForm">Sign In</a>
                </div>
                <div class="user-login-info">
                    <div class="dropdown show">
                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/core-img/user.svg" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-img" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" style="line-height: 50px;" href="#">Dashboard</a>
                            <a class="dropdown-item" style="line-height: 50px;" href="#">My Profile</a>
                            <a class="dropdown-item" style="line-height: 50px;" href="#">Reset Password</a>
                            <a class="dropdown-item" style="line-height: 50px;" href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Sign In  -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 10%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign In</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="index.php" method="post">
                    <div class="modal-body mx-3">
                        <div class="alert alert-danger" role="alert">
                            <strong>Username</strong> or <strong>password</strong> incorrect!
                        </div>
                        <div class="md-form mb-4">
                            <b><Label>Email</Label></b>
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="defaultForm-email" required="true" class="form-control validate" placeholder="Email">
                        </div>
                        <div class="md-form mb-4">
                            <b><Label>Password</Label></b>
                            <i class="fas fa-lock"></i>
                            <input type="password" id="defaultForm-pass" required="true" class="form-control validate" placeholder="Password">
                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">Sign In</button>
                        </div>
                    </div>
                </form>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section">Not a member yet? <a href="#a" class="text-info" data-dismiss="modal" data-toggle="modal" data-target="#modalRegisterForm"> Sign Up</a>.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 5%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign Up</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="index.php" method="post">
                    <div class="modal-body">
                        <div class="md-form mb-3">
                            <b><Label>Company Name</Label></b>
                            <i class="fas fa-building"></i>
                            <input type="text" required="true" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label>Phone Number</Label></b>
                            <i class="fas fa-phone-square"></i>
                            <input type="text" required="true" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label>Address</Label></b>
                            <i class="fas fa-map-marked-alt"></i>
                            <input type="text" required="true" class="form-control" placeholder="Address">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label>Tax Code</Label></b>
                            <i class="fas fa-info-circle"></i>
                            <input type="text" required="true" class="form-control" placeholder="Tax Code">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label>Email</Label></b>
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="defaultForm-email" required="true" class="form-control validate" placeholder="Email">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label>Password</Label></b>
                            <i class="fas fa-lock"></i>
                            <input type="password" id="defaultForm-pass" required="true" class="form-control validate" placeholder="Password">
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>