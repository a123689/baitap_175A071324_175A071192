<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$tendanhmuc = $_POST["tendanhmuc"];
$icon = $_POST["icon"];
$iddanhmuc = $_POST["iddanhmuc"];

$tk = suaDanhmuc($tendanhmuc,$icon,$iddanhmuc);
if($tk){
  echo "true";
}else {
  echo "false";
}



 ?>
