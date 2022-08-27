<?php 
include('../../../conn.php');
session_start();
$userName = isset($_POST['userName']) ? $_POST['userName'] : "";
$status = isset($_POST['status']) ? $_POST['status'] : "";
$level = isset($_POST['level']) ? $_POST['level'] : 1;
$update_user = '';
if (@$_SESSION["username"] != '') {
    $update_user = @$_SESSION['username'];
}
$sql  = "UPDATE users SET user_lv = '".$level."', user_status = '".$status."',update_user = '".$update_user."' , update_date = getdate() WHERE username = '".$userName."'";

$rs = odbc_exec($conn_bid,$sql);
if (odbc_num_rows($rs) > 0) {
    echo "<div class='alert alert-success' role='alert'>
            Chỉnh sửa thành công
        </div>";
}else{
    echo "<div class='alert alert-danger' role='alert'>
            Chỉnh sửa không thành công
        </div>";
}

?>