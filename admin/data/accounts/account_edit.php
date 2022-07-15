<?php 
include('../../../conn.php');
$userName = isset($_POST['userName']) ? $_POST['userName'] : "";
$status = isset($_POST['status']) ? $_POST['status'] : "";
$level = isset($_POST['level']) ? $_POST['level'] : 1;

$sql  = "UPDATE users SET user_lv = '".$level."', user_status = '".$status."',userdate = getdate() WHERE username = '".$userName."'";
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