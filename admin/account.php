<head>
    <script src="js/func_account.js"></script>
</head>
<?php
include('../conn.php');
$userName = "";
if (isset($_POST['userNameQ'])) {
    $userName = $_POST['userNameQ'];
    $sql = "SELECT * FROM users where username like '" . $userName . "%' AND user_genre = 'Admin'";
    $rs = odbc_exec($conn_bid, $sql);
}
?>
<div class="row d-flex">
    <div class="mr-auto p-2"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAccountModal" onclick="addAccountClear()"> <i class="fas fa-plus-circle"></i> Thêm Mới </button></div>
    <div class="p-2">
        <form class="form-inline" id="dt-form" method="post" action="#">
            <div class="form-group mx-sm-2 mb-1 btn-tk">
                <input type="material_code" name="userNameQ" id="userNameQ" value="<?php echo $userName; ?>" required="true" class="form-control" style="width: 150px;" placeholder="Tên Đăng Nhập" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary mb-1 btn-tk">Tìm Kiếm</button>
        </form>
    </div>
</div>

<div class="table-responsive tableFixHead" style="max-height: 700px; margin-top:5px;">
    <table id="example" class="table align-middle mb-0 bg-white table-striped table-bordered">
        <thead class="bg-light">
            <tr>
                <th class="middles150">Tên Đăng Nhập</th>
                <th class="middles150">Loại Tài Khoản</th>
                <th class="middles100">Cấp Độ</th>
                <th class="middles120">Tình Trạng</th>
                <th class="middles100">Người Cập Nhật</th>
                <th class="middles120">Thời Gian Cập Nhật</th>
                <th class="middles120">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['userNameQ'])) {

                while (odbc_fetch_row($rs)) {
                    $un = odbc_result($rs, 'username');
                    echo '<tr>';
                    echo '<td>' . odbc_result($rs, 'username') . '</td>';
                    echo '<td>' . odbc_result($rs, 'user_genre') . '</td>';
                    echo '<td>' . odbc_result($rs, 'user_lv') . '</td>';
                    if (odbc_result($rs, 'user_status') == "1") {
                        echo '<td><span class="badge badge-success rounded-pill d-inline"> Hoạt Động</span></td>';
                    } else {
                        echo '<td><span class="badge badge-danger rounded-pill d-inline"> Khóa</span></td>';
                    }
                    echo '<td>' .  odbc_result($rs, 'update_user') . '</td>';
                    echo '<td>' . date("Y-m-d H:i:s", strtotime(odbc_result($rs, 'update_date'))) . '</td>';
                    echo '<td>';
                    echo " <button type='button' id = 'edit_" . $un . "' class='btn btn-warning btn-rounded btn-sm fw-bold' data-mdb-ripple-color='dark' data-toggle='modal' data-target='#editAccountModal'> <i class='fas fa-edit'></i> Chỉnh sửa</button>";
                    echo " <button type='button' id = 'edit_pw_" . $un . "'  class='btn btn-warning btn-rounded btn-sm fw-bold' data-mdb-ripple-color='dark' data-toggle='modal' data-target='#editPassword'> <i class='fas fa-edit'></i>Đổi mật khẩu</button>";
                    echo " <button type='button' id = 'delete_" . $un . "' class='btn btn-danger btn-rounded btn-sm fw-bold' data-mdb-ripple-color='dark'> <i class='fas fa-minus'></i> Xóa</button>";
                    echo '</td>';
                    echo '<script>$(document).ready(function() {';
                    echo "$('#delete_" . $un . "').click(function() {
                                if (confirm('Are you sure, you want to delete?')) {
                                    $.ajax({
                                        url: 'data/accounts/account_del.php',
                                        type: 'post',
                                        dataType: 'text',
                                        data: {
                                            userName: '" . $un . "',
                                        },
                                        success: function (result) {
                                            alert(result);
                                            location.reload();
                                        }
                                    });
                                }
                            });";
                    echo "$('#edit_" . $un . "').click(function() {
                        console.log('edit btn');
                        $.ajax({
                            method: 'POST',
                            url: 'data/accounts/account_edit_load.php',
                            data: {
                                userName: '" . $un . "',
                                lv: ' " . odbc_result($rs, 'user_lv') . " ',
                                st: ' " . odbc_result($rs, 'user_status') . "',
                            },
                            success: function (result) {
                                $('#edit-modal-content').html(result);
                            }
                        });
                    });";
                    echo "$('#edit_pw_" . $un . "').click(function() {
                        $.ajax({
                            method: 'POST',
                            url: 'data/accounts/account_rs_pass_load.php',
                            data: {
                                userName: '" . $un . "',
                            },
                            success: function (result) {
                                $('#edit-pass-content').html(result);
                            }
                        });
                    });";
                    echo   '});</script>';
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
                <form>
                    <div class="md-form mb-4">
                        <b><Label>Tên Đăng Nhập</Label></b>
                        <input type="text" id="userName" required="true" class="form-control validate" placeholder="Tên Đăng Nhập">
                    </div>
                    <div class="md-form mb-4">
                        <b><Label><?php echo $lang_header_sign_pass; ?></Label></b>
                        <input type="password" id="password" required="true" class="form-control validate" placeholder="<?php echo $lang_header_sign_pass; ?>" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <b><Label>Cấp Độ</Label></b>
                        <select class="form-control" id="level">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="addAccount()" data-toggle="modal" data-target="#notification" data-dismiss="modal">Lưu</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Notification-->
<div class="modal fade" id="notification" tabindex="-1" role="dialog" style="font-size: 18px;margin-top: 10px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-family: sans-serif;"><b>Thông Báo</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="result"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
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
            <div class="modal-body" id="edit-modal-content">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="Edit_Save()" data-toggle="modal" data-target="#notification" data-dismiss="modal">Lưu</button>
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
            <div class="modal-body" id="edit-pass-content">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="ResetPassword_Save()" data-toggle="modal" data-target="#notification" data-dismiss="modal">Lưu</button>
            </div>
        </div>
    </div>
</div>