<?php
 ob_start();
 session_start();
 require "../lib/db_connect.php";
 require "../lib/trangchu.php";
if(isset($_SESSION["iduser"])){
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
                <td colspan="6">DANH SÁCH SLIDE</td>
              </tr>
              <tr>
                <td>Mã slide</td>
                <td>Tiêu đề</td>
                <td>Hình ảnh</td>


                <td><a href="themslide.php">Thêm</a></td>
              </tr>
          <?php
			  $slide = danhsachslide();
			  while( $row_slide = mysqli_fetch_array($slide,MYSQLI_ASSOC) ){
          ob_start();// cho tất cả html thành 1 biến
		  ?>

              <tr>
                <td>{idslide}</td>
                <td>{tieude}</td>

                <td><img  src="Hinhanh/{hinhanh}" width="142" height="96" /></td>
                <td><a href="suaslide.php?idslide={idslide}&hinhanh={hinhanh}">Sửa</a>- <a id="xoa"onclick="return confirm('Bạn có chắc là muốn xóa không ?')" href="xoaslide.php?idslide={idslide}">Xóa</a></td>
              </tr>

              <?php
					$s = ob_get_clean();
					$s = str_replace("{idslide}", $row_slide["idslide"], $s); // thay thế
					$s = str_replace("{tieude}", $row_slide["tieude"], $s);
					$s = str_replace("{hinhanh}", $row_slide["hinhanh"], $s);
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
  header("location:http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/dangnhap/formdangnhap.php");
}
 ?>
