<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
$email = $_POST["email"];

$check = "true";
$tk = geTaikhoan();
while ($row = mysqli_fetch_array($tk,MYSQLI_ASSOC)) {
 if($row['email'] == $email){
   $check = "false";
   break;
 }
}

echo $check;
 ?>
