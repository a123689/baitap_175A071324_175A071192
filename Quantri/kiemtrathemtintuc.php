<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$tieude = $_POST["tieude"];
$tomtat = $_POST["tomtat"];
$hinhanh = $_POST["hinhanh"];
$idtheloai = $_POST["idtheloai"];
$tk = themTintuc($tieude,$tomtat,$hinhanh,$idtheloai);
if($tk){
  echo "true";
}else {
  echo "false";
}

 ?>
