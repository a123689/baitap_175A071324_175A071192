<?php
ob_start();
session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";

?>

<?php
 if(isset($_SESSION["iduser"]) && $_SESSION["loaitaikhoan"] == 0){
?>
<?php
 $idtaikhoan = $_GET["idtaikhoan"]; settype($idtaikhoan,"int");
 $conn = myConnect();
 if($idtaikhoan != 10){
   $qr = "DELETE FROM users WHERE iduser  = '$idtaikhoan'";

   $user = mysqli_query($conn,$qr);

 }
 header("location:listtaikhoan.php");
 ?>
<?php }
 ?>
