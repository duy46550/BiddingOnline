<?php
include('../../../conn.php');
session_start();
$userName = isset($_POST['userName']) ? $_POST['userName'] : "";
$newpass  = isset($_POST['newpass']) ? $_POST['newpass'] : "";
$cfmpass = isset($_POST['cfmpass']) ? $_POST['cfmpass'] : "";
if ($newpass != $cfmpass) {
    echo "<div class='alert alert-warning' role='alert'>
            Xác nhận mật khẩu không chính xác
        </div>";
    return;
}
$options = [
    'cost' => 11,
];
//hash password with bcrypt
$password = password_hash($newpass, PASSWORD_BCRYPT, $options);

$update_user = '';
if (@$_SESSION['username'] != '') {
    $update_user = @$_SESSION['username'];
}
$sql = "UPDATE users set password = '" . $password . "',update_user = '".$update_user."',update_date = getdate() where username = '" . $userName . "'";
$rs = odbc_exec($conn_bid, $sql);
if (odbc_num_rows($rs) > 0) {
    echo "<div class='alert alert-success' role='alert'>
            Cập Nhật Thành Công
        </div>";
}else{
    echo "<div class='alert alert-danger' role='alert'>
            Cập Nhật Không Thành Công
        </div>";
}
