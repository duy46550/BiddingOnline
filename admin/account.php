<head>
    <script src="js/func_account.js"></script>
</head>
<?php
include('../conn.php');
if (isset($_POST['userNameQ'])) {
    $userName = $_POST['userNameQ'];
    $sql = "SELECT * FROM users where username like '" . $userName . "%' AND user_genre = 'Admin'";
    $rs = odbc_exec($conn_bid, $sql);
    $result = array();
    while (@$row = odbc_fetch_array($rs)) {
        array_push($result, $row);
    }
}
?>
<div class="row d-flex">
    <div class="mr-auto p-2"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAccountModal" onclick="addAccountClear()"> <i class="fas fa-plus-circle"></i> Thêm Mới </button></div>
    <div class="p-2">
        <form class="form-inline" id="dt-form" method="post" action="#">
            <div class="form-group mx-sm-2 mb-1 btn-tk">
                <input type="material_code" name="userNameQ" id="userNameQ" required="true" class="form-control" style="width: 150px;" placeholder="Tên Đăng Nhập" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary mb-1 btn-tk">Tìm Kiếm</button>
        </form>
    </div>
</div>
<div class="table-responsive" style="max-height: 700px; margin-top:5px;">
    <table class="table align-middle mb-0 bg-white table-striped">
        <thead class="bg-light">
            <tr>
                <th class="middles150">Tên Đăng Nhập</th>
                <th class="middles150">Loại Tài Khoản</th>
                <th class="middles100">Cấp Độ</th>
                <th class="middles120">Tình Trạng</th>
                <th class="middles120">Thời Gian Cập Nhật</th>
                <th class="middles120">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (isset($_POST['userNameQ'])) {
                if (count($result) == 0) {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                            Tên Đăng Nhập Không Tồn Tại
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>";
                } else {
                    foreach ($result as $item) { ?>
                        <tr>
                            <td><?php echo $item['username']; ?></td>
                            <td><?php echo $item['user_genre']; ?></td>
                            <td><?php echo $item['user_lv']; ?></td>
                            <td>
                                <?php if ($item['user_status'] == 1) { ?>
                                    <span class="badge badge-success rounded-pill d-inline"> Hoạt Động</span>
                                <?php } else { ?>
                                    <span class="badge badge-danger rounded-pill d-inline"> Khóa</span>
                                <?php } ?>
                            </td>
                            <td><?php echo $item['userdate']; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#editAccountModal" onclick="Edit(<?php echo $item['username']; ?>,<?php echo $item['user_lv']; ?>,<?php echo $item['user_status']; ?>)">
                                    <i class="fas fa-edit"></i> Chỉnh sửa
                                </button>
                                <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#editPassword" onclick="ResetPassword(<?php echo $item['username']; ?>)">
                                    <i class="fas fa-sync-alt"></i> Đổi Mật Khẩu
                                </button>
                                <button type="button" class="btn btn-danger btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" onclick="Delete(<?php echo $item['username']; ?>)">
                                    <i class="fas fa-minus"></i> Xóa
                                </button>
                            </td>
                        </tr>
            <?php   }
                }
            } ?>

        </tbody>
    </table>
</div>

<!-- Modal add account-->
<div class="modal fade" id="addAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 18px;margin-top: 50px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Thêm Tài Khoản</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="result"></div>
                <div class="md-form mb-4">
                    <b><Label>Tên Đăng Nhập</Label></b>
                    <input type="text" id="userName" required="true" class="form-control validate" placeholder="Tên Đăng Nhập">
                </div>
                <div class="md-form mb-4">
                    <b><Label><?php echo $lang_header_sign_pass; ?></Label></b>
                    <input type="password" id="password" required="true" class="form-control validate" placeholder="<?php echo $lang_header_sign_pass; ?>">
                </div>
                <div class="form-group mb-4">
                    <b><Label>Cấp Độ</Label></b>
                    <select class="form-control" id="level">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy Bỏ</button>
                <button type="button" class="btn btn-primary" onclick="addAccount()">Lưu</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit account-->
<div class="modal fade" id="editAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 18px;margin-top: 50px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Chỉnh Sửa Tài Khoản</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="resultEdit"></div>
                <div class="md-form mb-4">
                    <b><Label>Tên Đăng Nhập</Label></b>
                    <input type="text" required="true" id="userNameE" readonly class="form-control validate">
                    <input type="text" hidden id="userNameE1" class="form-control validate">
                </div>
                <div class="form-group mb-4">
                    <b><Label>Cấp Độ</Label></b>
                    <select class="form-control" id="lvE">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <b><Label>Tình Trạng</Label></b>
                    <select class="form-control" id="statusE">
                        <option value="1">Hoạt Động</option>
                        <option value="0">Khóa</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="Edit_Save()">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal reset password-->
<div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 18px;margin-top: 50px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Chỉnh Sửa Tài Khoản</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="resultRs"></div>
                <input type="text" hidden id="userNameRP" class="form-control validate">
                <div class="md-form mb-4">
                    <b><Label>Mật Khẩu Mới</Label></b>
                    <input type="password" id="newpass" required="true" class="form-control validate" placeholder="Mật Khẩu Mới">
                </div>
                <div class="md-form mb-4">
                    <b><Label>Xác Nhận Mật Khẩu</Label></b>
                    <input type="password" id="cfmpass" required="true" class="form-control validate" placeholder="Xác Nhận Mật Khẩu">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy Bỏ</button>
                <button type="button" class="btn btn-primary" onclick="ResetPassword_Save()">Lưu</button>
            </div>
        </div>
    </div>
</div>
