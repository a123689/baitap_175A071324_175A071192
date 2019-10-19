<?php
ob_start();
session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";

?>
<?php
 if(isset($_SESSION["iduser"])){
?>
<?php
 $idslide = $_GET["idslide"]; settype($idslide,"int");
 $conn = myConnect();

 $qr = "DELETE FROM slide WHERE idslide  = '$idslide'";

 $user = mysqli_query($conn,$qr);
 header("location:listslide.php");
 ?>
<?php }
 ?>
