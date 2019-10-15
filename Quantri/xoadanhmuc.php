<?php
ob_start();
session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";
if(!isset($_SESSION["iduser"])){
}
?>

<?php
 $iddanhmuc = $_GET["iddanhmuc"]; settype($iddanhmuc,"int");
 $conn = myConnect();

 $qr = "DELETE FROM danhmuc WHERE iddanhmuc  = '$iddanhmuc'";

 $user = mysqli_query($conn,$qr);
 header("location:listdanhmuc.php");
 ?>
