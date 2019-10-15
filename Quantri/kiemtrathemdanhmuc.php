<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$tendanhmuc = $_POST["tendanhmuc"];
$icon = $_POST["icon"];

$tk = themDanhmuc($tendanhmuc,$icon);
if($tk){
  echo "true";
}else {
  echo "false";
}


 ?>
