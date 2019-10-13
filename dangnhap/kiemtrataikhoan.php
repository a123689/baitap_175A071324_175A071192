<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$taikhoan = $_POST["username"];

$check = "true";
$tk = geTaikhoan();
while ($row = mysqli_fetch_array($tk,MYSQLI_ASSOC)) {
 if($row['taikhoan'] == $taikhoan){
   $check = "false";
   break;
 }
}

echo $check;
 ?>
