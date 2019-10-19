<?php
require "../lib/db_connect.php";
require "../lib/trangchu.php";
 ?>
 <?php
  $iddanhmuc = $_GET["iddanhmuc"]; settype($iddanhmuc,"int");
  $theloai = DanhSachTheLoaiTheoDanhMuc($iddanhmuc);
  while( $row_theloai = mysqli_fetch_array($theloai,MYSQLI_ASSOC)){
  ?>
 <option value="<?php echo $row_theloai["idtheloai"] ?>"><?php echo $row_theloai["tentheloai"] ?></option>
 <?php
}
  ?>
