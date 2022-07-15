<?php 
include('../../conn.php');
$userNameQ = isset($_POST['userNameQ']) ? $_POST['userNameQ'] : "";
if ($userNameQ == "") {
    echo "<div class='alert alert-warning' role='alert'>
                Tên Đăng Nhập Không Được Để Trống
            </div>";
    return;
}
$sql = "SELECT * FROM users where username = '$userNameQ'";
$rs = odbc_exec($conn_bid, $sql);
if (odbc_num_rows($rs) <= 0) {
    echo "<div class='alert alert-warning' role='alert'>
        Tài Khoản Không Tồn Tại
    </div>";
    return;
}


?>