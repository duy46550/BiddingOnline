<?php 
    include('../../../conn.php');
    session_start();
    $genreid = $_POST["genreid"] ? $_POST["genreid"] : "";
    $materialid = $_POST["materialid"] ? $_POST["materialid"] : "";
    $materialname = $_POST["materialname"] ? $_POST["materialname"] : "";
    $dt = $_POST["dt"] ? $_POST["dt"] : "";
    $unit = $_POST["unit"] ? $_POST["unit"] : "";
    $specification = $_POST["specification"] ? $_POST["specification"] : "";
    
    if($genreid == ""){
        echo "<div class='alert alert-warning' role='alert'>
                Loại Vật Tư Không Được Để Trống
            </div>";
            return;
    }
    if($materialid == ""){
        echo "<div class='alert alert-warning' role='alert'>
                Mã Vật Tư Không Được Để Trống
            </div>";
            return;
    }
    if($materialname == ""){
        echo "<div class='alert alert-warning' role='alert'>
                Tên Vật Tư Không Được Để Trống
            </div>";
            return;
    }
    if($unit == ""){
        echo "<div class='alert alert-warning' role='alert'>
                Đơn Vị Tính Không Được Để Trống
            </div>";
            return;
    }
    if($specification == ""){
        echo "<div class='alert alert-warning' role='alert'>
               Quy Cách Không Được Để Trống
            </div>";
            return;
    }
    $sql = "select * from Material_Requirement where material_id = '".$materialid."' and requirement_year = '".$dt."'";
    $rs = odbc_exec($conn_bid,$sql);
    
    if(odbc_num_rows($rs)>0){
        echo "<div class='alert alert-warning' role='alert'>
                Yêu Cầu Vật Tư Đã Tồn Tại!
            </div>";
            return;
    }

    $sql = "INSERT INTO Material_Requirement VALUES ('".$materialid."','".$dt."',N'".$materialname."','".$genreid."','".$unit."','".$specification."','1', '".@$_SESSION['username']."' ,getdate())";
    $rs = odbc_exec($conn_bid,$sql);
    if(odbc_num_rows($rs)>0){
       echo "<script> alert('Thêm Thành Công'); location.reload(); </script>";
    }else{
        echo "<script> alert('Thêm Không Thành Công'); location.reload(); </script>";
    }

?>