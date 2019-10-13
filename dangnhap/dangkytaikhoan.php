
<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$hoten = $_POST["hoten"];
$taikhoan = $_POST["taikhoan"];
$matkhau = $_POST["matkhau"];
$diachi = $_POST["diachi"];
$dienthoai = $_POST["dienthoai"];
$email = $_POST["email"];

$hashed_password = password_hash($matkhau,PASSWORD_DEFAULT);

$tk = dangkytaikhoan($hoten,$taikhoan,$hashed_password,$diachi,$dienthoai,$email);
if($tk){
  echo "true";
}else {
  echo "false";
}


 ?>
