<div class="row d-flex">
    <div class="mr-auto p-2"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPreviewForm"> <i class="fas fa-plus-circle"></i> Thêm Mới </button></div>
    <div class="p-2">
        <form class="form-inline" id="dt-form" method="post" action="#">
            <div class="form-group mx-sm-2 mb-1">
                <label style="font-weight: 600;font-size: 15px; margin-right: 5px;">Loại Vật Tư:</label>
                <select class="form-control" id="staticStatus">
                    <option>Tất Cả</option>
                    <option>Giấy</option>
                    <option>Da</option>
                    <option>Vải</option>
                    <option>Máy Móc</option>
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
            <button type="submit" class="btn btn-primary mb-1 btn-tk">Tìm Kiếm</button>
        </form>
    </div>
</div>
<div class="table-responsive" style="max-height: 700px; margin-top:5px;">
    <table class="table align-middle mb-0 bg-white table-striped">
        <thead class="bg-light">
            <tr>
                <th class="middles">Mã Vật Tư</th>
                <th class="middles">Tên Vật Tư</th>
                <th class="middles">Loại Vật Tư</th>
                <th class="middles">Quy cách</th>
                <th class="middles">Đơn Vị</th>
                <th class="middles">Năm</th>
                <th class="middles">Tình Trạng</th>
                <th class="middles">Thông Tin</th>
                <th class="middles">Hành Động</th>
                <th class="middles">Xác Nhận</th>
            </tr>
        </thead>
        <tbody>
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
                <td>
                    10 Hộp/ Thùng
                </td>
                <td>Thùng</td>
                <td>2022</td>
                <td>
                    <span class="badge badge-success rounded-pill d-inline">Đã Duyệt</span>
                </td>
                <td>
                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        Hình Ảnh
                    </button>
                    <a href="index.php?r=lr" class="btn btn-link btn-ds" role="button" style="font-size: 15px;">DS Báo Giá</a>
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
                <td>
                    15 Hộp/ Thùng
                </td>
                <td>Thùng</td>
                <td>2022</td>
                <td>
                    <!-- <span class="badge badge-danger rounded-pill d-inline">Bác Bỏ</span> -->
                    <span class="badge badge-warning rounded-pill d-inline">Đang Chờ</span>
                </td>
                <td>
                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        Hình Ảnh
                    </button>
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
                <td>20 Hộp/ Thùng</td>
                <td>Thùng</td>
                <td>2022</td>
                <td>
                    <span class="badge badge-warning rounded-pill d-inline">Đang Chờ</span>
                </td>
                <td>
                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        Hình Ảnh
                    </button>
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
