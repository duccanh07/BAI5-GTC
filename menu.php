<?php
    require_once("Helpers/LoginHelper.php")
?>
<ul>
    <?php
if (!$isLogin) {
    echo " <li>
            <a href='Views/DangNhap.php' class='btn btn-success'> ĐĂNG NHẬP</a>
        </li>";
} else {
    echo "<li>
            <a href='...' class='btn btn-danger'> ĐĂNG XUẤT</a>
        </li>
        <li>
            <a href='...' class='btn btn-success'> QUẢN LÝ TÀI KHOẢN</a>
        </li>";
}
   
    ?>
</ul>