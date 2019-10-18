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
 $idtintuc = $_GET["idtin"]; settype($idtintuc,"int");
 $iddanhmuc = $_GET["iddanhmuc"]; settype($iddanhmuc,"int");
 $hinhanh = $_GET['hinhanh'];


 if($_SESSION["iddanhmuc"] == $iddanhmuc || $_SESSION["iddanhmuc"] = 0){
   $conn = myConnect();
   unlink("Hinhanh/".$hinhanh);
     $qr = "DELETE FROM tintuc WHERE idtin = '$idtintuc'";
     $user = mysqli_query($conn,$qr);

   header("location:listtintuc.php");
 }

 ?>
<?php } ?>
