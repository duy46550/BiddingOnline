<div class="d-flex">
    <div class="mr-auto p-2">
        <label for="" style="font-weight: 700;font-size: 18px;"> Vật Tư 1 </label>
    </div>
    <div class="p-2">
        <form class="form-inline" id="dt-form" method="post" action="#">
            <div class="form-group mx-sm-2 mb-1">
                <input type="material_code" class="form-control" id="input1" style="width: 150px;" required="true" placeholder="Mã Vật Tư">
            </div>
            <button type="submit" class="btn btn-primary mb-1">Tìm Kiếm</button>
        </form>
    </div>
</div>
<div class="table-responsive" style="max-height: 700px; margin-top:5px;">
    <table class="table align-middle mb-0 bg-white table-striped">
        <thead class="bg-light">
            <tr>
                <th class="middles">Tên Nhà Cung Ứng</th>
                <th class="middles80">Năm </th>
                <th class="middles80">Quý 1</th>
                <th class="middles80">Quý 2</th>
                <th class="middles80">Quý 3</th>
                <th class="middles80">Quý 4</th>
                <th class="middles120">Thông Tin </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Công Ty A</td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            2022
                        </div>
                    </div>
                </td>
                <td>
                    0
                </td>
                <td>
                    200000
                </td>
                <td>0</td>
                <td>0</td>
                <td>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#exampleModal">
                        Chi Tiết
                    </button>
                </td>
            </tr>
            <tr>
                <td>Công Ty B</td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            2022
                        </div>
                    </div>
                </td>
                <td>
                    0
                </td>
                <td>
                    400000
                </td>
                <td>0</td>
                <td>0</td>
                <td>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#exampleModal">
                        Chi Tiết
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 50px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title card-header" id="exampleModalLabel"><b> Thông Tin Công Ty </b></h5>
                <div class="card-body" style="font-size: 18px; font-family: sans-serif;">
                    <div class="card-title"> <b> Tên Công Ty:</b> Công Ty A</div>
                    <div class="card-title"> <b> Mã Số Thuế:</b> 0123456789</div>
                    <div class="card-title"> <b> Số Điện Thoại:</b> 0987654321</div>
                    <div class="card-title"> <b> Email:</b> cta@gmail.com</div>
                    <div class="card-title"> <b> Địa Chỉ:</b>abc...</div>
                </div>
            </div>
        </div>
    </div>
</div>