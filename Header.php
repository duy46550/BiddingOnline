<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidding</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome JS -->
    <script src="font/solid.js"></script>
    <script src="font/fontawesome.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/func.js"></script>
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
        <nav class="navbar navbar-expand-lg  headernavbar" style="background-color: white;">
            <!-- <a class="nav-brand font-bold" href="index.php" style="font-size: 18px;">Trang Chủ &nbsp;&nbsp;</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" style="color: white;"></i>
            </button>
            <div class="collapse navbar-collapse user-login-color" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="font-size: 15px; color:black;"><?php echo $lang_header_home; ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li><a class="nav-link" href="#" style="font-size: 15px; color:black;"><?php echo $lang_header_contact; ?> </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 15px; color:black;"> <?php echo $lang_header_language; ?></a>
                        <div class="dropdown-menu dropdown-cate">
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
                <?php if (@$_SESSION['username'] == '') { ?>
                    <div class="user-login-color  user-login">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" data-toggle="modal" data-target="#modalLoginForm" style="font-size: 15px; color:black;"><?php echo $lang_header_sign; ?></a>
                            </li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="user-login-color user-account">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 15px; color:black;"><i class="fas fa-user"></i>&nbsp; <?php echo $lang_header_account; ?></a>
                                <div class="dropdown-menu">
                                    <?php if (@$_SESSION["user_genre"] != "Guest") { ?>
                                        <a class="dropdown-item" style="line-height: 35px;text-align: left; font-size: 15px;" href="./admin/index.php"><i class="fas fa-user-edit"></i> <?php echo $lang_header_account_dashboard; ?></a>
                                    <?php } ?>
                                    <a class="dropdown-item" style="line-height: 35px;text-align: left; font-size: 15px;" href="#"><i class="fas fa-sync-alt"></i> <?php echo $lang_header_account_resetpassword; ?></a>
                                    <a class="dropdown-item" style="line-height: 35px;text-align: left; font-size: 15px;" href="./logout.php"><i class="fas fa-power-off"></i> <?php echo $lang_header_account_logout; ?></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </nav>
    </header>

    <!-- Sign In  -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 5%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold"><?php echo $lang_header_sign; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div id="result-login"></div>
                    <form>
                        <div class="md-form mb-4">
                            <b><Label><?php echo $lang_header_sign_email; ?></Label></b>
                            <i class="fas fa-envelope"></i>
                            <input type="text" id="email" required="true" class="form-control validate" placeholder="Email">
                        </div>
                        <div class="md-form mb-4">
                            <b><Label><?php echo $lang_header_sign_pass; ?></Label></b>
                            <i class="fas fa-lock"></i>
                            <input type="password" id="pass" required="true" class="form-control validate" placeholder="<?php echo $lang_header_sign_pass; ?>" autocomplete="off">
                        </div>
                    </form>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" onclick="signIn()"><?php echo $lang_header_sign; ?></button>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section"><?php echo $lang_header_sign_footer; ?> <a href="#" class="text-info" data-dismiss="modal" data-toggle="modal" data-target="#modalRegisterForm"> <?php echo $_lang_header_signup; ?></a>.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold"><?php echo $_lang_header_signup_title; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="result"></div>
                    <form>
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_company; ?></Label></b>
                            <i class="fas fa-building"></i>
                            <input type="text" id="company_name" required="true" class="form-control" placeholder="<?php echo $_lang_header_signup_company; ?>">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_phone; ?></Label></b>
                            <i class="fas fa-phone-square"></i>
                            <input type="text" id="company_phone" required="true" class="form-control" placeholder="<?php echo $_lang_header_signup_phone; ?>">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_address; ?></Label></b>
                            <i class="fas fa-map-marker-alt"></i>
                            <input type="text" id="company_address" required="true" class="form-control" placeholder="<?php echo $_lang_header_signup_address; ?>">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_taxcode; ?></Label></b>
                            <i class="fas fa-info-circle"></i>
                            <input type="text" id="company_taxcode" required="true" class="form-control" placeholder="<?php echo $_lang_header_signup_taxcode; ?>">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label>Email</Label></b>
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="company_email" required="true" class="form-control validate" placeholder="Email">
                        </div>
                        <div class="md-form mb-3">
                            <b><Label><?php echo $_lang_header_signup_pass; ?></Label></b>
                            <i class="fas fa-lock"></i>
                            <input type="password" id="company_password" required="true" class="form-control validate" placeholder="<?php echo $_lang_header_signup_pass; ?>" autocomplete="off">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" onclick="signUp()"><?php echo $_lang_header_signup_footer; ?></button><!-- data-toggle="modal" data-target="#notification" -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Notification-->
    <div class="modal fade" id="notification" tabindex="-1" role="dialog" style="font-size: 18px;margin-top: 10px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-family: sans-serif;"><b>Thông Báo</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="result-notification"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>