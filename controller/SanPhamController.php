<?php
require_once '../db.connect.php';
require_once '../Models/SanPhamModel.php';
$method=$_GET['action'];
switch ($method) {
  case 'danhsach':
    # code...
    GetDanhSachs();
    break;
  case 'chitiet':
    //todo
    $id=$_GET['id'];
    GetChiTietSanPham($id);
    break;
  case 'xoa':
    $id=$_GET['id'];
    XoaSanPham($id);
    break;
    case 'update':
      $ten=$_POST['ten'];
      $gia=$_POST['gia'];
      $newProduct=new Product($ten,$gia);
      $id=$_GET['id'];
      updateSanPham($id,$newProduct);
      break;
    
  default:
    $ten=$_POST['ten'];
    $gia=$_POST['gia'];
    $newProduct=new Product($ten,$gia);
    ThemSanPham($newProduct);
    break;
}
  function GetDanhSachs(){
    //todo
    global $connection;
    $sql="SELECT * FROM sanpham";
    $result=$connection->query($sql);
    if($result->num_rows>0){
      require_once "../Views/danhsachsanpham.php";
    }
  };


  function GetChiTietSanPham($id){
    global $connection;
    $sql="SELECT * FROM sanpham Where id=$id";
    $result=$connection->query($sql);
    if($result->num_rows>0){
      require_once "../Views/chitietsanpham.php";
    }
  }

  function ThemSanPham($SanPham){
    global $connection;
      $sql="INSERT INTO sanpham (ten,gia) VALUES (?,?)";
      $result=$connection->prepare($sql);
      $result->bind_param("sd",$SanPham->ten,$SanPham->gia);
      if($result->execute()){
        GetDanhSachs();
      }else{
        echo 'That bai';
      }
      $connection->close();
  }
  function XoaSanPham($id){
    global $connection;
      $sql="DELETE FROM sanpham WHERE id=$id";
      $result=$connection->prepare($sql);
      if($result->execute()){
        GetDanhSachs();
      }else{
        echo 'That bai';
      }
      $connection->close();
  }
  function updateSanPham($id,$SanPham){
    global $connection;
      $sql = "UPDATE MyGuests SET ten=$SanPham->ten gia=$SanPham->gia WHERE id=$id";;
      $result=$connection->prepare($sql);
      if($result->execute()){
        GetDanhSachs();
      }else{
        echo 'That bai';
      }
      $connection->close();
  }
?>