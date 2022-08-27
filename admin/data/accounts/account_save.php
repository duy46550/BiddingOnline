<?php
//include($_SERVER['DOCUMENT_ROOT'] . '/conn.php');
include('../../../conn.php');
session_start();
$userName = isset($_POST['userName']) ? $_POST['userName'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$level = isset($_POST['level']) ? $_POST['level'] : "1";
if ($userName == "") {
    echo "<div class='alert alert-warning' role='alert'>
                Tên Đăng Nhập Không Được Để Trống
            </div>";
    return;
}
if ($password == "") {
    echo "<div class='alert alert-warning' role='alert'>
                Mật Khẩu Không Được Để Trống
            </div>";
    return;
}
$sql = "SELECT * FROM users where username = '$userName'";
$rs = odbc_exec($conn_bid, $sql);
if (odbc_num_rows($rs) > 0) {
    echo "<div class='alert alert-warning' role='alert'>
        Tài Khoản Đã Tồn Tại
    </div>";
    return;
}

$options = [
    'cost' => 11,
];
//hash password with bcrypt
$password = password_hash($password, PASSWORD_BCRYPT, $options);
$update_user = '';
if (@$_SESSION['username'] != '') {
    $update_user = @$_SESSION['username'];
}
$sql = "INSERT INTO users VALUES('" . $userName . "','" . $password . "','" . $level . "','Admin','1','".$update_user."',getdate())";
$rs = odbc_exec($conn_bid, $sql);
if (odbc_num_rows($rs) > 0) {
    echo "<div class='alert alert-success' role='alert'>
            Thêm thành công
        </div>";
} else {
    echo "<div class='alert alert-danger' role='alert'>
            Thêm không thành công
        </div>";
}