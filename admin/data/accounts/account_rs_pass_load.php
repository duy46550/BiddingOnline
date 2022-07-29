<input type="text" hidden id="userNameRP" class="form-control validate" value="<?php echo $_POST['userName'] ?>">
<form>
    <div class="md-form mb-4">
        <b><Label>Mật Khẩu Mới</Label></b>
        <input type="password" id="newpass" required="true" class="form-control validate" placeholder="Mật Khẩu Mới" autocomplete="off">
    </div>
    <div class="md-form mb-4">
        <b><Label>Xác Nhận Mật Khẩu</Label></b>
        <input type="password" id="cfmpass" required="true" class="form-control validate" placeholder="Xác Nhận Mật Khẩu" autocomplete="off">
    </div>
</form>