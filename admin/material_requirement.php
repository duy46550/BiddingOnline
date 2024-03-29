<?php 
    include('../conn_erp.php');
    include('../conn.php');
    $sql = "select * from Material_Requirement";
    $rs = odbc_exec($conn_bid,$sql);
    $result = array();
    while(@$row = odbc_fetch_array($rs)){
        array_push($result,$row);
    }
    //var_dump($result);
?>

<head>
    <script src="datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <link href="datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <script src="js/func_mr.js"></script>
</head>
<div class="row d-flex">
    <div class="mr-auto p-2"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addMaterialModal" onclick="addMaterialClear()"> <i class="fas fa-plus-circle"></i> Thêm Mới </button></div>
    <div class="p-2">
        <form class="form-inline" id="dt-form" method="post" action="#">
            <div class="form-group mx-sm-2 mb-1">
                <label style="font-weight: 600;font-size: 15px; margin-right: 5px;">Loại Vật Tư:</label>
                <select class="form-control" id="staticStatus" >
                    <option></option>
                    <?php
                    $sql  =  "select * from CLLBZL where ywsm <> ''";
                    $rs = odbc_exec($conn_erp, $sql);
                    while (odbc_fetch_row($rs)) {
                        echo "<option value=" . odbc_result($rs, 'cllb') . ">" . odbc_result($rs, 'cllb') . "-" . odbc_result($rs, 'ywsm') . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group mx-sm-2 mb-1">
                <label style="font-weight: 600;font-size: 15px; margin-right: 5px;">Tình Trạng:</label>
                <select class="form-control" id="staticStatus">
                    <option>Tất Cả</option>
                    <option>Đã Duyệt</option>
                    <option>Đang Chờ</option>
                    <option>Đã Đóng</option>
                </select>
            </div>
            <div class="form-group mx-sm-2 mb-1">
                <label style="font-weight: 600;font-size: 15px; margin-right: 5px;">Năm:</label>
                <input type="text" id="yearQ" value="<?php echo date("Y"); ?>" style="width: 100px;" class="form-control validate">
            </div>
            <button type="submit" class="btn btn-primary mb-1 btn-tk">Tìm Kiếm</button>
        </form>
    </div>
</div>
<div class="table-responsive" style="max-height: 700px; margin-top:5px;max-width: 100%;">
    <table class="table align-middle mb-0 bg-white table-striped table-bordered">
        <thead class="bg-light">
            <tr>
                <th class="middles120">Mã Vật Tư</th>
                <th class="middles120">Tên Vật Tư</th>
                <th class="middles120">Loại Vật Tư</th>
                <th class="middles80">Đơn Vị</th>
                <th class="middles120">Quy cách</th>
                <th class="middles80">Năm</th>
                <th class="middles120">Tình Trạng</th>
                <th class="middles100">Thông Tin</th>
                <th style="min-width:200px;">Hành Động</th>
                <th style="min-width:200px;">Xác Nhận</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $item){ ?>
                

            <?php }?>
            <tr>
                <td>1</td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            Vật Tư 1
                        </div>
                    </div>
                </td>
                <td>
                    loại 1
                </td>
                <td>Thùng</td>
                <td>
                    10 Hộp/ Thùng
                </td>
                <td>2022</td>
                <td>
                    <span class="badge badge-success rounded-pill d-inline">Đã Duyệt</span>
                </td>
                <td>
                    <!-- <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target=".showImage">
                        Hình Ảnh
                    </button> -->
                    <a href="index.php?r=lr" class="btn btn-link btn-ds" role="button" style="font-size: 15px;">Danh Sách Báo Giá</a>
                </td>
                <td>
                    <?php $i = 0;
                    if ($i == 1) { ?>
                        <button type="button" disabled class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                            <i class="fas fa-edit"></i> Chỉnh sửa
                        </button>
                        <button type="button" disabled class="btn btn-danger btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                            <i class="fas fa-minus"></i> Xóa
                        </button>
                    <?php } ?>
                </td>
                <td>
                    <!-- <button type="button" class="btn btn-primary btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                            <i class="fas fa-check-circle"></i> Duyệt
                        </button> -->
                    <button type="button" class="btn btn-danger btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-times-circle"></i> Hủy bỏ
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            Vật Tư 2
                        </div>
                    </div>
                </td>
                <td>
                    loại 1
                </td>
                <td>Thùng</td>
                <td>
                    15 Hộp/ Thùng
                </td>
                <td>2022</td>
                <td>
                    <!-- <span class="badge badge-danger rounded-pill d-inline">Bác Bỏ</span> -->
                    <span class="badge badge-warning rounded-pill d-inline">Đang Chờ</span>
                </td>
                <td>
                    <!-- <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target=".showImage">
                        Hình Ảnh
                    </button> -->
                    <a href="index.php?r=lr" class="btn btn-link btn-ds" role="button" style="font-size: 15px;">Danh Sách Báo Giá</a>
                </td>
                <td>
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-minus"></i> Xóa
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-check-circle"></i> Duyệt
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-times-circle"></i> Hủy bỏ
                    </button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            Vật Tư 3
                        </div>
                    </div>
                </td>
                <td>loại 1</td>
                <td>Thùng</td>
                <td>20 Hộp/ Thùng</td>
                <td>2022</td>
                <td>
                    <span class="badge badge-warning rounded-pill d-inline">Đang Chờ</span>
                </td>
                <td>
                    <!-- <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target=".showImage">
                        Hình Ảnh
                    </button> -->
                    <a href="index.php?r=lr" class="btn btn-link btn-ds" role="button" style="font-size: 15px;">Danh Sách Báo Giá</a>
                </td>
                <td>
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-minus"></i> Xóa
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-check-circle"></i> Duyệt
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-times-circle"></i> Hủy bỏ
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!--Show Image -->
<!-- <div class="modal fade showImage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top: 50px;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Hình Ảnh Vật Tư</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner card">
                        <div class="carousel-item active">
                            <img src="../img/material-img/material-1-1.jpg" style="width:700px; height: 550px;" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/material-img/material-1-2.jpg" style="width:700px; height: 550px;" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/material-img/material-1-3.jpg" style="width:700px; height: 550px;" alt="">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal add material-->
<div class="modal fade" id="addMaterialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 18px;margin-top: 20px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Thêm Yêu Cầu Vật Tư</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="result"></div>
                <div class="form-group mb-4">
                    <b><Label>Loại Vật Tư</Label></b>
                    <select class="form-control" id="genreid" onchange="showMaterial()">
                        <option value=""></option>
                        <?php
                        $sql  =  "select * from CLLBZL where ywsm <> ''";
                        $rs = odbc_exec($conn_erp, $sql);
                        while (odbc_fetch_row($rs)) {
                            echo "<option value=" . odbc_result($rs, 'cllb') . ">" . odbc_result($rs, 'cllb') . "-" . odbc_result($rs, 'ywsm') . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <b>
                        <Label>Mã Vật Tư</Label>
                        <span class="input-group-addon" id="loadmvt"></span>
                    </b>
                    <div id="select-material">

                    </div>

                </div>
                <div class="md-form mb-4">
                    <b><Label>Tên Vật Tư</Label></b>
                    <input type="text" required="true" id="material-name" class="form-control validate">
                </div>
                <div class="md-form mb-4">
                    <b><Label>Năm</Label></b>
                    <input type="text" id="dt" value="<?php echo date("Y"); ?>" class="form-control validate" readonly>
                </div>
                <div class="form-group mb-4">
                    <b><Label>Đơn vị tính</Label></b>
                    <input type="text" required="true" id="unit" class="form-control validate">
                </div>
                <div class="md-form mb-4">
                    <b><Label>Quy Cách</Label></b>
                    <input type="text" required="true" id="specification" class="form-control validate">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy Bỏ</button>
                <button type="button" class="btn btn-primary" onclick="addMaterialSave()">Lưu</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#dt").datepicker({
        format: "yyyy",
        startView: "years",
        minViewMode: "years",
    });
    //$('#test').DataTable();
    $("#yearQ").datepicker({
        format: "yyyy",
        startView: "years",
        minViewMode: "years",
    });
</script>