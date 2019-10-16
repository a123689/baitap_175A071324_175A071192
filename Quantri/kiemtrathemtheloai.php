<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$tentheloai = $_POST["tentheloai"];
$iddanhmuc = $_POST["iddanhmuc"];
$tk = themTheloai($tentheloai,$iddanhmuc);
if($tk){
  echo "true";
}else {
  echo "false";
}

 ?>
