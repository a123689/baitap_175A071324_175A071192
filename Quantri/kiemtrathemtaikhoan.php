<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$hoten = $_POST["hoten"];
$taikhoan = $_POST["taikhoan"];
$matkhau = $_POST["matkhau"];
$diachi = $_POST["diachi"];
$email = $_POST["email"];
$dienthoai = $_POST["dienthoai"];
$quyentruycap = $_POST["quyentruycap"];
settype($quyentruycap, "int");

$hashed_password = password_hash($matkhau,PASSWORD_DEFAULT);
$tk = themTaikhoan($hoten,$taikhoan,$hashed_password,$diachi,$dienthoai,$email,$quyentruycap);
if($tk){
  echo "true";
}else {
  echo "false";
}


 ?>
