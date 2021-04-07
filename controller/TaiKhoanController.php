<?php
require_once '../db.connect.php';
require_once '../Models/SanPhamModel.php';
$method=$_GET['action'];
switch ($method) {
  case 'dangnhap':
    # code...
    DangNhap();
    break;

   
  default:
    break;
}

function DangNhap(){
    global $connection;
    $username = $_POST['ten'];
    $password = $_POST['matkhau'];
    $sql= "SELECT * FROM nguoidung WHERE ten= ?  AND matkhau = ?";
    $stmt = $connection ->prepare($sql);
    $stmt ->bind_param("ss", $ten, $matkhau);

    if($stmt -> execute()){
        $result = $stmt -> get_result();
        if($result ->num_rows > 0){
            $_SESSION['taikhoan'] =
        }else{}
    }
     $connection = close();
}

?>