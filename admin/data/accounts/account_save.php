<?php
//include($_SERVER['DOCUMENT_ROOT'] . '/conn.php');
include('../../../conn.php');
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
    'cost' => 10,
];
//hash password with bcrypt
$password = password_hash($password, PASSWORD_BCRYPT, $options) . "\n";

$sql = "INSERT INTO users VALUES('".$userName."','".$password."','".$level."','Admin','1',getdate())";
$rs = odbc_exec($conn_bid, $sql);
if (odbc_num_rows($rs) > 0) {
    echo "<div class='alert alert-success' role='alert'>
            Thêm thành công
        </div>";
}else{
    echo "<div class='alert alert-danger' role='alert'>
            Thêm không thành công
        </div>";
}

// if (odbc_num_rows($rs) > 0) {
//     echo "<script>
//     alert('Thêm Thành Công!');
//     window.open('index.php?r=ac','_self')
//     </script>";
// }else{
//     echo "<script>
//     alert('Thêm Không Thành Công!');
//     window.open('index.php?r=ac','_self')
//     </script>";
// }
    // if (password_verify('123', $hash)) {
    //     echo "<div class='alert alert-warning' role='alert'>
    //             Password is valid!
    //         </div>";
    // } else {
    //     echo "<div class='alert alert-warning' role='alert'>
    //             Invalid password.
    //         </div>";
    // }
    
    //echo "<script>window.open('index.php?r=ac','_self')</script>";
    // echo "<div class='alert alert-success' role='alert'>
    //             Thêm Thành Công
    //         </div>";
?>