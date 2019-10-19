<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$idslide = $_POST["idslide"];
$tieude = $_POST["tieude"];
$tk = null;

if(isset($_POST["hinhanh"]) && isset($_POST["hinhcu"])){
   $hinhcu = $_POST["hinhcu"];
   unlink("Hinhanh/".$hinhcu);
   $hinhanh = $_POST["hinhanh"];
   $tk = suaSlideCoanh($idslide,$tieude,$hinhanh);
}else {
   $tk = suaSlideKhongcoanh($idslide,$tieude);
}

if($tk){
  echo "true";
}else {
  echo "false";
}


 ?>
