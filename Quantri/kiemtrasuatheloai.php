<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$tentheloai = $_POST["tentheloai"];
$idtheloai = $_POST["idtheloai"];

$tk = suaTheloai($tentheloai,$idtheloai);
if($tk){
  echo "true";
}else {
  echo "false";
}



 ?>
