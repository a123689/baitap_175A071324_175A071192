<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$idtin = $_POST["idtin"];
$tieude = $_POST["tieude"];
$tomtat = $_POST["tomtat"];
$idtheloai = $_POST["idtheloai"];
$tk = null;

if(isset($_POST["hinhanh"]) && isset($_POST["hinhcu"])){
   $hinhcu = $_POST["hinhcu"];
   unlink("Hinhanh/".$hinhcu);
   $hinhanh = $_POST["hinhanh"];
   $tk = suaTintucCohinhanh($idtin,$tieude,$tomtat,$hinhanh,$idtheloai);
}else {
   $tk = suaTintucKhongcohinhanh($idtin,$tieude,$tomtat,$idtheloai);
}

if($tk){
  echo "true";
}else {
  echo "false";
}


 ?>
