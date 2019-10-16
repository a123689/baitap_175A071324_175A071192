<?php
 ob_start();
 session_start();
 require "../lib/db_connect.php";
 require "../lib/trangchu.php";
if(isset($_SESSION["iduser"])){
 ?>
 <?php
  if($_SESSION["loaitaikhoan"] == 0){
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
                <td colspan="6">DANH SÁCH TÀI KHOẢN</td>
              </tr>
              <tr>
                <td>Mã tài khoản</td>
                <td>Họ tên</td>
                <td>Tài khoản</td>
                <td>Mật khẩu</td>
                <td>Địa chỉ</td>
                <td>Điện thoại</td>
                <td>Email</td>
                <td>Ngày đăng ký</td>
                <td>Quyền truy cập</td>
                <td>Loại tài khoản</td>

                <td><a href="themtaikhoan.php">Thêm</a></td>
              </tr>
          <?php
			  $taikhoan= getTaikhoan();
			  while( $row_taikhoan = mysqli_fetch_array($taikhoan,MYSQLI_ASSOC) ){

          ob_start();// cho tất cả html thành 1 biến
		  ?>

              <tr>
                <td>{idtaikhoan}</td>
                <td>{hoten}</td>
                <td>{taikhoan}</td>
                <td>{matkhau}</td>
                <td>{diachi}</td>
                <td>{dienthoai}</td>
                <td>{email}</td>
                <td>{ngaydangky}</td>
                <td>{quyentruycap}</td>
                <td>{loaitaikhoan}</td>

                <td><a href="suataikhoan.php?idtaikhoan={idtaikhoan}">Sửa</a>- <a onclick="return confirm('Bạn có chắc là muốn xóa không ?')" href="xoataikhoan.php?idtaikhoan={idtaikhoan}">Xóa</a></td>
              </tr>

              <?php
					$s = ob_get_clean();
					$s = str_replace("{idtaikhoan}", $row_taikhoan["iduser"], $s); // thay thế
					$s = str_replace("{hoten}", $row_taikhoan["hoten"], $s);
					$s = str_replace("{taikhoan}", $row_taikhoan["taikhoan"], $s);
          $s = str_replace("{matkhau}", $row_taikhoan["matkhau"], $s);
          $s = str_replace("{diachi}", $row_taikhoan["diachi"], $s);
          $s = str_replace("{dienthoai}", $row_taikhoan["dienthoai"], $s);
          $s = str_replace("{email}", $row_taikhoan["email"], $s);
          $s = str_replace("{ngaydangky}", $row_taikhoan["ngaydangky"], $s);
          $s = str_replace("{loaitaikhoan}", $row_taikhoan["loaitaikhoan"], $s);
          $s = str_replace("{quyentruycap}", $row_taikhoan["iddanhmuc"], $s);

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
