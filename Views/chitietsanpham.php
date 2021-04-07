<?php


  require_once '../Views/header.php';


?>

<h1>Chi tiet san pham</h1>
<?php

$row=$result->fetch_assoc();
if($row){
  echo '<form action="../controller/SanPhamController.php?action=update&id='.$row['id'].'"method="POST">';
  echo   '<input type="text" name="ten" placeholder="Nhap ten" value='.$row['ten'].'><br/>';
  echo   '<input type="text" name="gia" placeholder="Nhap gia"  value='.$row['gia'].'><br/>';
  echo    '<input type="submit" name="submit" value="Sửa"><br/>';
  echo '</form>';
}

?>


<?php
  require_once '../Views/footer.php';

?>