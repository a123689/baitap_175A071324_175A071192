<?php
ob_start();
session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";
if(isset($_SESSION["iduser"])){

?>
<?php
 if($_SESSION["loaitaikhoan"] == 2){
?>
<?php
 $idtheloai= $_GET["idtheloai"]; settype($idtheloai,"int");
 $rowchitiet = chitiettheloai($idtheloai);
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
      <td id="hang2"><?php require "menu.php"; ?></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p>
        <form id="formthemdanhmuc" name="formthemdanhmuc" method="post" action="">
          <table width="500" border="1" cellspacing="0" cellpadding="0">
            <tr>
            <td colspan="2">SỬA THỂ LOẠI</td>
          </tr>
          <tr>
            <td>Tên thể loại</td>
            <td><label for="suatentheloai"></label>
            <input type="text" value="<?php echo $rowchitiet['tentheloai'] ?>" name="suatentheloai" id="suatentheloai" /></td>
          </tr>


          <tr>
            <td>&nbsp;</td>
            <td><input  type="button" name="btnSua" id="btnSua" value="Sửa" /></td>
          </tr>

          </table>
        </form>
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
<script type="text/javascript">
  $(document).ready(function(){
      $("#btnSua").click(function(){
        var tendanhmuc = $('#suatentheloai').val();

        var regextendanhmuc = /^[a-zA-Z][A-z|0-9|\W|\s]{4,49}/;

        if(!regextendanhmuc.test(tendanhmuc)){
          alert('Tên danh mục phải từ 5 đến 50 ký tự và bắt đầu bằng ký tự');
        }else {
          $.post("kiemtrasuatheloai.php",{tentheloai:$('#suatentheloai').val(),idtheloai:"<?php echo $rowchitiet['idtheloai'];?>"},function(data){
             if(data == "true"){
               alert('Sửa thành công');
               let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/Quantri/listtheloai.php';
              $('#formthemdanhmuc').prop('action',url);
              $('#formthemdanhmuc').submit()
             }else {
               alert('Sửa thất bại');
             }
             
          });
        }

      });
  });

  </script>
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
