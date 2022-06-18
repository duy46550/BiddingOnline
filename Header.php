<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidding</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<?php
session_start();
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'vn';
}
if ($_SESSION['lang'] == 'vn') {
    include('./language/vn.php');
} elseif ($_SESSION['lang'] == 'en') {
    include('./language/en.php');
}
?>

<body>
    <header class="header_area">
        <nav class="navbar navbar-expand-lg navbar-light bg-light headernavbar">
            <a class="nav-brand font-bold" href="index.php" style="font-size: 25px;color:black;">LAC TY II &nbsp;&nbsp;</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.php" style="font-size: 15px;"><?php echo $lang_header_home; ?> <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 15px;"> <?php echo $lang_header_category; ?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="material.php?category=1" style="font-size: 15px;"><?php echo $lang_header_category_paper; ?></a>
                            <a class="dropdown-item" href="material.php?category=2" style="font-size: 15px;"><?php echo $lang_header_category_fabric; ?></a>
                            <a class="dropdown-item" href="material.php?category=3" style="font-size: 15px;"><?php echo $lang_header_category_leather; ?></a>
                            <a class="dropdown-item" href="material.php?category=4" style="font-size: 15px;"><?php echo $lang_header_category_machine; ?></a>
                        </div>
                    </li>
                    <li><a class="nav-link" href="#" style="font-size: 15px;"><?php echo $lang_header_contact; ?> </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 15px;"> <?php echo $lang_header_language; ?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?lang=en" style="font-size: 15px;"><?php echo $lang_header_language_e;
                                                                                                        if ($_SESSION['lang'] == 'en') {
                                                                                                            echo "<i class='fas fa-check'></i>";
                                                                                                        } ?></a>
                            <a class="dropdown-item" href="index.php?lang=vn" style="font-size: 15px;"><?php echo $lang_header_language_v;
                                                                                                        if ($_SESSION['lang'] == 'vn') {
                                                                                                            echo "<i class='fas fa-check'></i>";
                                                                                                        } ?></a>
                        </div>
                    </li>
                </ul>
                <!-- <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="<?php echo $lang_header_search; ?>" autocomplete="off">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div> -->
                <div class="user-login-color  user-login">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#modalLoginForm" style="font-size: 15px;"><?php echo $lang_header_sign; ?></a>
                        </li>
                    </ul>
                </div>
                <div class="user-login-color user-account">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 15px;"><i class="fas fa-user"></i>&nbsp; <?php echo $lang_header_account; ?></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" style="line-height: 35px;text-align: left; font-size: 15px;" href="./admin/index.php"><i class="fas fa-user-edit"></i> <?php echo $lang_header_account_dashboard; ?></a>
                                <a class="dropdown-item" style="line-height: 35px;text-align: left; font-size: 15px;" href="#"><i class="fas fa-sync-alt"></i> <?php echo $lang_header_account_resetpassword; ?></a>
                                <a class="dropdown-item" style="line-height: 35px;text-align: left; font-size: 15px;" href="#"><i class="fas fa-power-off"></i> <?php echo $lang_header_account_logout; ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Sign In  -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 10%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold"><?php echo $lang_header_sign; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="index.php" method="post">
                    <div class="modal-body mx-3">
                        <!-- <div class="alert alert-danger" role="alert">
                            <strong>Username</strong> or <strong>password</strong> incorrect!
                        </div> -->
                        <div class="md-form mb-4">
                            <b><Label>Email</Label></b>
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="defaultForm-email" required="true" class="form-control validate" placeholder="Email">
                        </div>
                        <div class="md-form mb-4">
                            <b><Label><?php echo $lang_header_sign_pass; ?></Label></b>
                            <i class="fas fa-lock"></i>
                            <input type="password" id="defaultForm-pass" required="true" class="form-control validate" placeholder="<?php echo $lang_header_sign_pass; ?>">
                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary"><?php echo $lang_header_sign; ?></button>
                        </div>
                    </div>
                </form>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section"><?php echo $lang_header_sign_footer; ?> <a href="#a" class="text-info" data-dismiss="modal" data-toggle="modal" data-target="#modalRegisterForm"> <?php echo $_lang_header_signup; ?></a>.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 5%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold"><?php echo $_lang_header_signup_title; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="index.php" method="post">
                    <div class="modal-body">
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_company; ?></Label></b>
                            <i class="fas fa-building"></i>
                            <input type="text" required="true" class="form-control" placeholder="<?php echo $_lang_header_signup_company; ?>">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_phone; ?></Label></b>
                            <i class="fas fa-phone-square"></i>
                            <input type="text" required="true" class="form-control" placeholder="<?php echo $_lang_header_signup_phone; ?>">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_address; ?></Label></b>
                            <i class="fas fa-map-marked-alt"></i>
                            <input type="text" required="true" class="form-control" placeholder="<?php echo $_lang_header_signup_address; ?>">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_taxcode; ?></Label></b>
                            <i class="fas fa-info-circle"></i>
                            <input type="text" required="true" class="form-control" placeholder="<?php echo $_lang_header_signup_taxcode; ?>">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label>Email</Label></b>
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="defaultForm-email" required="true" class="form-control validate" placeholder="Email">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_pass; ?></Label></b>
                            <i class="fas fa-lock"></i>
                            <input type="password" id="defaultForm-pass" required="true" class="form-control validate" placeholder="<?php echo $_lang_header_signup_pass; ?>">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary"><?php echo $_lang_header_signup_footer; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>