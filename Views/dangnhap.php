<?php

    require_once "../header.php";
?>
<form action="../controller/TaiKhoanController.php?action=dangnhap" method="post" class="container">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Tên đăng nhập</label>
        <div class="col-sm-10">
            <input type="text" class="form-control plaintext" name="ten">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Mật Khẩu</label>
        <div class="col-sm-10">
            <input type="password" name="matkhau" class="form-control">
        </div>
    </div>

    <button type="submit" class=" col-sm-5 btn btn-danger">Submit</button>

</form>
<?php
    require_once "../footer.php";
?>