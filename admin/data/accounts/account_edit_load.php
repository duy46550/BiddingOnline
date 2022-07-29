<div class="md-form mb-4">
    <b><Label>Tên Đăng Nhập</Label></b>
    <input type="text" required="true" id="userNameE" value="<?php echo $_POST['userName']; ?>" readonly class="form-control validate">
</div>
<div class="form-group mb-4">
    <b><Label>Cấp Độ</Label></b>
    <select class="form-control" id="lvE">
        <option value="1" <?php if( $_POST['lv'] =="1"){ echo "selected";} ?> >1</option>
        <option value="2" <?php if( $_POST['lv'] =="2"){ echo "selected";} ?>>2</option>
        <option value="3" <?php if( $_POST['lv'] =="3"){ echo "selected";} ?>>3</option>
    </select>
</div>
<div class="form-group mb-4">
    <b><Label>Tình Trạng</Label></b>
    <select class="form-control" id="statusE">
        <option value="1" >Hoạt Động</option>
        <option value="0" <?php if( $_POST['st'] =="0"){ echo "selected";} ?>>Khóa</option>
    </select>
</div>