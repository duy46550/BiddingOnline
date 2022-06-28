<div class="row d-flex">
    <div class="mr-auto p-2"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPreviewForm"> <i class="fas fa-plus-circle"></i> Thêm Mới </button></div>
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
                <th class="middles">Tên Đăng Nhập</th>
                <th class="middles">Loại Tài Khoản</th>
                <th class="middles">Cấp Độ</th>
                <th class="middles">Tình Trạng</th>
                <th class="middles">Hành Động</th>
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
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </button>
                </td>
            </tr>
            <tr>
                <td>42022</td>
                <td>Admin</td>
                <td>2</td>
                <td>
                    <span class="badge badge-danger rounded-pill d-inline">Khóa</span>
                </td>
                <td>
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-edit"></i> Chỉnh sửa
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
                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>