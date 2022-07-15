<?php 
include('../../../conn.php');
$userName = isset($_POST['userName']) ? $_POST['userName'] : "";

$sql  = "DELETE FROM users WHERE username = '".$userName."'";
$rs = odbc_exec($conn_bid,$sql);
if (odbc_num_rows($rs) > 0) {
    echo "Xóa thành công";
}else{
    echo "Xóa không thành công";
}

?>