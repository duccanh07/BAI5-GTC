<div id='danhsach'>
<?php


require_once '../header.php';


?>
<h1>Trang danh sách sản phẩm</h1>
<table >
  <tr>
    <?php

while ($row = $result->fetch_assoc()) {
  echo '<tr>' . '<td>' . $row['id'] . "</td>" . '<td>' . $row['ten'] . "</td>" . '<td>' . $row['gia'] . "</td>";
  echo '<td> <a href="../controller/SanPhamController.php?action=chitiet&id=' . $row['id'] . '">Xem</a> ||  </td>';
  echo '<td> <button onclick="deleteProduct('.$row['id'].')" >Xoa</button> </td>';
  echo '</tr>';
}
?>
  </tr>
</table>

<script>
// const btn=getElementById('btn');
function deleteProduct(id){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Typical action to be performed when the document is ready:
      document.getElementById("danhsach").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","../controller/SanPhamController.php?action=xoa&id="+id, true);
  xhttp.send();
}
</script>
<?php
require_once '../footer.php';

?>
</div>