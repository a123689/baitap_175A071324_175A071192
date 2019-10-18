<?php
 ob_start();
 session_start();
 require "../lib/db_connect.php";
 require "../lib/trangchu.php";
if(isset($_SESSION["iduser"])){
 ?>
 <?php
  if($_SESSION["loaitaikhoan"] == 0 || $_SESSION["loaitaikhoan"] == 2 ){
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang quản trị</title>
        <link rel="stylesheet" type="text/css" href="layout.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
    <body>
    <table width="855" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td id="hangtieude">TRANG QUẢN TRỊ
           <div style="width: 50px; float: right">
            <h3><?php echo $_SESSION["hoten"] ?> </h3>
          </div>
        </td>
      </tr>
        <tr>
        <td id="hang2"><?php require "menu.php"; ?>
        </td>
      </tr>
      <tr>
        <td><p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
            <table width="500" border="1" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="6">DANH SÁCH TIN</td>
              </tr>
              <tr>
                <td>Mã tin</td>
                <td>Tin tức</td>
                <td>Danh mục</td>
                <td>Thể loại</td>
                <td><a href="themtintuc.php">Thêm</a></td>
              </tr>
          <?php
          $tintuc = null;
          if($_SESSION["iddanhmuc"] == 0){
            $tintuc = getAllTintuc();
          }else {

            $tintuc = getTintuc($_SESSION["iddanhmuc"]);
          }

			  while( $row_tintuc = mysqli_fetch_array($tintuc,MYSQLI_ASSOC) ){

          ob_start();// cho tất cả html thành 1 biến
		  ?>

              <tr>
                <td>{idtin}</td>
                <td><a href="#">{tieude}</a><br />
               <img style="float:left; margin-right:5px" src="{hinhanh}" width="142" height="96" />{tomtat}<br /></td>
               <td>{danhmuc}</td>
               <td>{theloai}</td>
                <td><a href="suatintuc.php?idtin={idtin}&hinhanh={hinhanh}">Sửa</a>- <a onclick="return confirm('Bạn có chắc là muốn xóa không ?')" href="xoatintuc.php?idtin={idtin}&iddanhmuc={iddanhmuc}&hinhanh={hinhanh}">Xóa</a></td>
              </tr>

              <?php
					$s = ob_get_clean();
          $s = str_replace("{idtin}", $row_tintuc["idtin"], $s);
          $s = str_replace("{danhmuc}", $row_tintuc["tendanhmuc"], $s);
					$s = str_replace("{theloai}", $row_tintuc["tentheloai"], $s); // thay thế
					$s = str_replace("{tieude}", $row_tintuc["tieude"], $s);
					$s = str_replace("{tomtat}", $row_tintuc["tomtat"], $s);
          $s = str_replace("{hinhanh}", $row_tintuc["hinhanh"], $s);
          $s = str_replace("{iddanhmuc}", $row_tintuc["iddanhmuc"], $s);
					echo $s;
			 }
			  ?>

            </table>
          </form>
          <p>&nbsp;</p>
        <p>&nbsp;</p></td>
      </tr>
    </table>


    </body>
</html>
<?php
}else {

  header('location:./quantri.php');

}
 ?>
<?php
}else {
  header("location:http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/dangnhap/formdangnhap.php");
}
 ?>
