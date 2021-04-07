<?php


  require_once '../Views/header.php';


?>

<h1>Them san pham</h1>
<form action="../controller/SanPhamController.php?action=update" method="POST">
        <input type="text" name='ten' placeholder="Nhap ten"><br/>
        <input type="text" name='gia' placeholder="Nhap gia"><br/>
        <input type="submit" name='submit' value="Sửa"><br/>
  </form>

<?php
  require_once '../Views/footer.php';

?>