<?php
ob_start();
session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";

?>
<?php
 if($_SESSION["loaitaikhoan"] == 0 || $_SESSION["loaitaikhoan"] == 2 ){
?>
<?php
 $idtheloai = $_GET["idtheloai"]; settype($idtheloai,"int");
 $iddanhmuc = $_GET["iddanhmuc"]; settype($iddanhmuc,"int");
 if($_SESSION["iddanhmuc"] == iddanhmuc || $_SESSION["iddanhmuc"] = 0){
   $conn = myConnect();
     $qr = "DELETE FROM theloai WHERE idtheloai  = '$idtheloai'";
     $user = mysqli_query($conn,$qr);

   header("location:listtheloai.php");
 }

 ?>
<?php } ?>
