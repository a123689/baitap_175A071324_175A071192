<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$tieude = $_POST["tieude"];
$hinhanh = $_POST["hinhanh"];
$tk = themSlide($tieude,$hinhanh);
if($tk){
  echo "true";
}else {
  echo "false";
}

 ?>
