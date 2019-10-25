<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$hoten = $_POST["hoten"];
$diachi = $_POST["diachi"];
$email = $_POST["email"];
$dienthoai = $_POST["dienthoai"];
$quyentruycap = $_POST["quyentruycap"];
$iduser  =  $_POST["iduser"];
settype($quyentruycap, "int");
$tk = null;


if(isset($_POST["matkhau"])){
  $matkhau = $_POST["matkhau"];
  $hashed_password = password_hash($matkhau,PASSWORD_DEFAULT);
  $tk = suaTaikhoanComatkhau($iduser,$hoten,$hashed_password,$diachi,$dienthoai,$email,$quyentruycap);
}else {
  $tk = suaTaikhoanKhongmatkhau($iduser,$hoten,$diachi,$dienthoai,$email,$quyentruycap);
}

if($tk){
  echo "true";
}else {
  echo "false";
}


 ?>
