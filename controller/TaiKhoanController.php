<?php

session_start();
require_once '../db.connect.php';

$method=$_GET['action'];
if(!isset($method)){
    die ();
}

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
            $_SESSION['taikhoan'] = ten
        }else{
            
        }
    }
     $connection = close();
}

?>