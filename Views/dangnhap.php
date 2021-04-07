<?php
    require_once "../header.php";
?>
<form action="../controller/TaiKhoanController.php?action=dangnhap">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="ten">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="password" name="matkhau" class="form-control" ">
        </div>
    </div>
    <div class="mb-3 row">
    <button type="submit" class="btn btn-success" href="">Đăng nhập</button>
    </div>
</form>
<?php
    require_once "../footer.php";
?>s