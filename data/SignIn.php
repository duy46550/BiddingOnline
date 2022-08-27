<?php
include('../conn.php');
session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];
if ($email == "") {
    echo "<div class='alert alert-danger' role='alert'> Tên Đăng Nhập Không Được Bỏ Trống </div>";
    return;
} elseif ($pass == "") {
    echo "<div class='alert alert-danger' role='alert'> Mật Khẩu Không Được Bỏ Trống </div>";
    return;
} else {
    $checkmail = "SELECT * FROM users where username = '" . $email . "'";
    $rs = odbc_exec($conn_bid, $checkmail);
    if (odbc_num_rows($rs) <= 0) {
        echo "<div class='alert alert-danger' role='alert'> Tên Đăng Nhập Không Tồn Tại </div>";
        return;
    } else {
        if(odbc_result($rs, "user_status") == "0"){
            echo "<div class='alert alert-danger' role='alert'>Tài Khoản Đã Bị Khóa </div>";
            return;
        }
        $hash = odbc_result($rs, "password");
        if (password_verify($pass, $hash)) {
            $_SESSION["username"] = odbc_result($rs, "username");
            $_SESSION["user_lv"] = odbc_result($rs, "user_lv");
            $_SESSION["user_genre"] = odbc_result($rs, "user_genre");
            $_SESSION["user_status"] = odbc_result($rs, "user_status");
            // if($_SESSION["user_genre"] == "Guest"){
            //     echo "<script> $('#modalLoginForm').modal('hide'); $('#notification').modal('show'); </script> <div class='alert alert-success' role='alert'> Login Successfully</div> ";
            // }else{
            //     echo "<script> $('#modalLoginForm').modal('hide'); $('#notification').modal('show'); </script> <div class='alert alert-success' role='alert'> Login Successfully</div> ";
            // }
            echo "<script> $('#modalLoginForm').modal('hide'); location.reload(); </script>";
            
        } else {
            // echo "<div class='alert alert-danger' role='alert'>
            //             Invalid password.
            //      </div>";
            echo "<div class='alert alert-danger' role='alert'>
                        Mật Khẩu Không Chính Xác!
                 </div>";
        }
    }
}
