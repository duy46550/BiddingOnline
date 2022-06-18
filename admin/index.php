<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 style="text-align: center; font-weight: 700;">LAC TY II</h3>
            </div>
            <ul class="list-unstyled components">
                <p style="font-weight: 400;">Bảng Điều Khiển</p>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Yêu Cầu Vật Tư</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#"><i class="fas fa-list"></i> Danh sách Yêu Cầu</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-check-circle"></i> Phê Duyệt Yêu Cầu</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-plus-circle"></i> Thêm Mới</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-edit"></i> Chỉnh Sửa</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-minus"></i> Xóa</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Danh Sách Báo Giá</a>
                </li>
                <li>
                    <a href="#">Thông Tin Nhà Cung Ứng</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản Lý Tài Khoản</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#"><i class="fas fa-plus-circle"></i> Thêm Mới</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-edit"></i> Chỉnh Sửa</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-minus"></i> Xóa</a>
                        </li>
                    </ul>
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
                        <!-- <span>Dashboard</span> -->
                    </button>
                    <button class="btn btn-light d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-angle-down"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
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
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Mã Vật Tư</th>
                        <th>Tên Vật Tư</th>
                        <th>Quy cách</th>
                        <th>Đơn Vị</th>
                        <th>Tình Trạng</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Vật Tư 1</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">10 Hộp/ Thùng</p>
                        </td>
                        <td>Thùng</td>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline">Qua</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                Hình Ảnh
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Vật Tư 2</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">15 Hộp/ Thùng</p>
                        </td>
                        <td>Thùng</td>
                        <td>
                            <span class="badge badge-danger rounded-pill d-inline">Bác Bỏ</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                Hình Ảnh
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Vật Tư 3</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">20 Hộp/ Thùng</p>
                        </td>
                        <td>Thùng</td>
                        <td>
                            <span class="badge badge-warning rounded-pill d-inline">Đang Chờ</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                Hình Ảnh
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>