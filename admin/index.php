<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome JS -->
    <script src="font/solid.js" ></script>
    <script src="font/fontawesome.js"></script>
</head>
<?php
session_start();
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'vn';
}
if ($_SESSION['lang'] == 'vn') {
    include('../language/vn.php');
} elseif ($_SESSION['lang'] == 'en') {
    include('../language/en.php');
}
@$r = @$_REQUEST['r'];
?>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 style="text-align: center; font-weight: 700;"><a href="index.php">LAC TY II</a></h3>
            </div>
            <ul class="list-unstyled components">
                <p style="font-weight: 500;">Bảng Điều Khiển</p>
                <li <?php if (@$r == 'mr' or @$r == "") {echo "class='active'";} ?>  >
                    <a href="index.php?r=mr">Yêu Cầu Vật Tư</a>
                </li>
                <li <?php if (@$r == 'lr') {echo "class='active'";} ?>>
                    <a href="index.php?r=lr">Danh Sách Báo Giá</a>
                </li>
                <li>
                    <a href="index.php?r=ac">Quản Lý Tài Khoản</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../index.php" class="article"><i class="fas fa-caret-left"></i> Trở lại trang chủ</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars"></i>
                        <span>Bảng Điều Khiển</span>
                    </button>
                    <button class="btn btn-light d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-angle-down"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link account-user" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 15px;"> <?php echo $lang_header_language; ?></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php?lang=en" style="font-size: 15px;"><?php echo $lang_header_language_e;
                                                                                                                if ($_SESSION['lang'] == 'en') {
                                                                                                                    echo "<i class='fas fa-check'></i>";
                                                                                                                } ?></a>
                                    <a class="dropdown-item" href="index.php?lang=vn" style="font-size: 15px;"><?php echo $lang_header_language_v;
                                                                                                                if ($_SESSION['lang'] == 'vn') {
                                                                                                                    echo "<i class='fas fa-check'></i>";
                                                                                                                } ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link account-user" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 15px;"><i class="fas fa-user"></i>&nbsp; Tài Khoản</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" style="line-height: 35px;text-align: left; font-size: 15px;" href="../index.php"><i class="fas fa-home"></i> Trang Chủ</a>
                                    <a class="dropdown-item" style="line-height: 35px;text-align: left; font-size: 15px;" href="#"><i class="fas fa-sync-alt"></i> Đổi Mật Khẩu</a>
                                    <a class="dropdown-item" style="line-height: 35px;text-align: left; font-size: 15px;" href="#"> <i class="fas fa-power-off"></i> Đăng Xuất</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <?php
            
            if (@$r == 'mr' or @$r == "") {
                include('material_requirement.php');
            }elseif(@$r == 'lr'){
                include('list_bidding.php');
            }elseif(@$r== 'ac'){
                include('account.php');
            }
            ?>
        </div>
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>