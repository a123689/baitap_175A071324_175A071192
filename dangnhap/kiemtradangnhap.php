<?php
 session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";

$conn = myConnect();
$taikhoan = $_POST["username"];
$matkhau = $_POST["pass"];

$qr = "SELECT * FROM users WHERE taikhoan = '$taikhoan'";

$user = mysqli_query($conn,$qr);
 if(mysqli_num_rows($user) == 1){
     $row =  mysqli_fetch_array($user, MYSQLI_ASSOC);

     if(password_verify($matkhau,$row['matkhau'])){
       $_SESSION["iduser"] = $row['iduser'];
       $_SESSION["taikhoan"] = $row['taikhoan'];
       $_SESSION["matkhau"] = $row['matkhau'];
       $_SESSION["hoten"] = $row['hoten'];
       echo "thanhcong";
     }else{

        echo "Tài khoản hoặc mật khẩu không chính xác";
     }

 }else {
     echo "Tài khoản hoặc mật khẩu không chính xác";
 }

mysqli_close($conn);
 ?>
