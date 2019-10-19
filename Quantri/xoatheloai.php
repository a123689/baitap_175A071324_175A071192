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
 $conn = myConnect();
 $qr = "DELETE FROM theloai WHERE idtheloai  = '$idtheloai'";
 if($_SESSION["loaitaikhoan"] == 0){
    $user = mysqli_query($conn,$qr);
    mysqli_close($conn);
    header("location:listtheloai.php");
 }else {
   if($_SESSION["iddanhmuc"] == $iddanhmuc ){

       $user = mysqli_query($conn,$qr);
        mysqli_close($conn);
       header("location:listtheloai.php");
   }
 }


 ?>
<?php } ?>
