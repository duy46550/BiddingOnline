<div class="row d-flex">
    <div class="mr-auto p-2"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAccountModal"> <i class="fas fa-plus-circle"></i> Thêm Mới </button></div>
    <div class="p-2">
        <form class="form-inline" id="dt-form" method="post" action="#">
            <div class="form-group mx-sm-2 mb-1">
                <label style="font-weight: 600;font-size: 15px; margin-right: 5px;">Tình Trạng:</label>
                <select class="form-control" id="staticStatus">
                    <option>Tất Cả</option>
                    <option>Hoạt Động</option>
                    <option>Khóa</option>
                </select>
            </div>
            <div class="form-group mx-sm-2 mb-1 btn-tk">
                <input type="material_code" required="true" class="form-control" id="input1" style="width: 150px;" placeholder="Tên Đăng Nhập">
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
                <th class="middles120">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>62022</td>
                <td>Admin</td>
                <td>0</td>
                <td>
                    <span class="badge badge-success rounded-pill d-inline">Hoạt Động</span>
                </td>
                <td>
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#editAccountModal">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </button>
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#resetPassword">
                        <i class="fas fa-sync-alt"></i> Đổi Mật Khẩu
                    </button>
                </td>
            </tr>
            <tr>
                <td>99999</td>
                <td>Admin</td>
                <td>2</td>
                <td>
                    <span class="badge badge-danger rounded-pill d-inline">Khóa</span>
                </td>
                <td>
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#editAccountModal">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </button>
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#resetPassword">
                        <i class="fas fa-sync-alt"></i> Đổi Mật Khẩu
                    </button>
                </td>
            </tr>
            <tr>
                <td>52022</td>
                <td>Admin</td>
                <td>2</td>
                <td>
                    <span class="badge badge-success rounded-pill d-inline">Hoạt Động</span>
                </td>
                <td>
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#editAccountModal">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </button>
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#resetPassword">
                        <i class="fas fa-sync-alt"></i> Đổi Mật Khẩu
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal add account-->
<div class="modal fade" id="addAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 18px;margin-top: 50px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Thêm Mới Tài Khoản</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="md-form mb-4">
                    <b><Label>Tên Đăng Nhập</Label></b>
                    <input type="text" required="true" class="form-control validate" placeholder="Tên Đăng Nhập">
                </div>
                <div class="md-form mb-4">
                    <b><Label><?php echo $lang_header_sign_pass; ?></Label></b>
                    <input type="password" id="defaultForm-pass" required="true" class="form-control validate" placeholder="<?php echo $lang_header_sign_pass; ?>">
                </div>
                <div class="form-group mb-4">
                    <b><Label>Cấp Độ</Label></b>
                    <select class="form-control" id="staticStatus">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy Bỏ</button>
                <button type="button" class="btn btn-primary">Lưu</button>
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
                <div class="md-form mb-4">
                    <b><Label>Tên Đăng Nhập</Label></b>
                    <input type="text" required="true" readonly class="form-control validate" value="99999" placeholder="Tên Đăng Nhập">
                </div>
                <div class="form-group mb-4">
                    <b><Label>Cấp Độ</Label></b>
                    <select class="form-control" id="staticStatus">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <b><Label>Tình Trạng</Label></b>
                    <select class="form-control" id="staticStatus">
                        <option>Hoạt Động</option>
                        <option>Khóa</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy Bỏ</button>
                <button type="button" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal reset password-->
<div class="modal fade" id="resetPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 18px;margin-top: 50px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Chỉnh Sửa Mật Khẩu</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="md-form mb-4">
                    <b><Label>Mật Khẩu Mới</Label></b>
                    <input type="password" id="defaultForm-pass" required="true" class="form-control validate" placeholder="Mật Khẩu Mới">
                </div>
                <div class="md-form mb-4">
                    <b><Label>Xác Nhận Mật Khẩu</Label></b>
                    <input type="password" id="defaultForm-pass" required="true" class="form-control validate" placeholder="Xác Nhận Mật Khẩu">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy Bỏ</button>
                <button type="button" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </div>
</div>