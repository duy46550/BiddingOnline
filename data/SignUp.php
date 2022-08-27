<?php 
include('../conn.php');
$comany_name  = $_POST['comany_name'] ? $_POST['comany_name'] : '';
$company_phone = $_POST['company_phone'] ? $_POST['company_phone'] : '';
$company_address = $_POST['company_address'] ? $_POST['company_address'] : '';
$company_taxcode = $_POST['company_taxcode'] ? $_POST['company_taxcode'] : '';
$company_email = $_POST['company_email'] ? $_POST['company_email'] : '';
$company_password = $_POST['company_password'] ? $_POST['company_password'] : '';

if($comany_name == ""){
    echo "<div class='alert alert-danger' role='alert'> Tên Công Ty Không Được Bỏ Trống </div>";
    return;
    //echo "<script>alert('Thanh cong');</script>";
}elseif($company_phone == ""){
    echo "<div class='alert alert-danger' role='alert'> Số Điện Thoại Công Ty Không Được Bỏ Trống </div>";
    return;
}elseif($company_address == ""){
    echo "<div class='alert alert-danger' role='alert'> Địa Chỉ Công Ty Không Được Bỏ Trống </div>";
    return;
}elseif($company_taxcode == ""){
    echo "<div class='alert alert-danger' role='alert'> Mã Số Thuế Công Ty Không Được Bỏ Trống </div>";
    return;
}elseif($company_email == ""){
    echo "<div class='alert alert-danger' role='alert'> Email Công Ty Không Được Bỏ Trống </div>";
    return;
}elseif($company_password == ""){
    echo "<div class='alert alert-danger' role='alert'> Mật Khẩu Không Được Bỏ Trống </div>";
    return;
}else{
    $checkmail = "SELECT * FROM company where company_email = '".$company_email."'";
    $rs = odbc_exec($conn_bid,$checkmail);
    if (odbc_num_rows($rs) > 0) {
        echo "<div class='alert alert-danger' role='alert'> Email Đã Tồn Tại </div>";
        return;
    }
    $chectaxcode = "SELECT * FROM company where company_taxcode = '".$company_taxcode."'";
    $rs = odbc_exec($conn_bid,$chectaxcode);
    if (odbc_num_rows($rs) > 0) {
        echo "<div class='alert alert-danger' role='alert'> Mã Số Thuế Đã Tồn Tại </div>";
        return;
    }
    $options = [
        'cost' => 11,
    ];
    //hash password with bcrypt
    $company_password = password_hash($company_password, PASSWORD_BCRYPT, $options);
    
    $insertUser = "INSERT INTO users VALUES('" . $company_email . "','" . $company_password . "','1','Guest','1','',getdate())";
    $rs = odbc_exec($conn_bid,  $insertUser);

    $insertCompany = "INSERT INTO company VALUES ('".$company_email."','".$comany_name."','".$company_phone."','".$company_address."','".$company_taxcode."',getdate())";
    $rs = odbc_exec($conn_bid,$insertCompany);
    if (odbc_num_rows($rs) > 0) {
        echo "<script> $('#modalRegisterForm').modal('hide'); $('#notification').modal('show'); </script> <div class='alert alert-success' role='alert'> Đăng Ký Thành Công </div>";
    }else{
        echo "<script> $('#modalRegisterForm').modal('hide'); $('#notification').modal('show'); </script> <div class='alert alert-danger' role='alert'> Đăng Ký Không Thành Công </div>";
    }
}


?>