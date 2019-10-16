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
      <td id="hang2"><?php require "menu.php"; ?></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p>
        <form id="formthemdanhmuc" name="formthemdanhmuc" method="post" action="">
          <table width="500" border="1" cellspacing="0" cellpadding="0">
            <tr>
            <td colspan="2">THÊM DANH MỤC</td>
          </tr>
          <tr>
            <td>Tên danh mục</td>
            <td><label for="themtendanhmuc"></label>
            <input type="text" name="themtendanhmuc" id="themtendanhmuc" /></td>
          </tr>

          <tr>
            <td>Icon</td>
            <td><label for="themicon"></label>
            <input type="text" name="themicon" id="themicon" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input  type="button" name="btnThem" id="btnThem" value="Thêm" /></td>
          </tr>

          </table>
        </form>
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
<script type="text/javascript">
  $(document).ready(function(){
      $("#btnThem").click(function(){
        var tendanhmuc = $('#themtendanhmuc').val();
        var icon = $('#themicon').val();

        var regexicon = /^[a-zA-Z][A-z|\-|\s]{4,49}/;
        var regextendanhmuc = /^[a-zA-Z][A-z|0-9|\W|\s]{4,49}/;

        if(!regextendanhmuc.test(tendanhmuc)){
          alert('Tên danh mục phải từ 5 đến 50 ký tự và bắt đầu bằng chữ');
        }else if (!regexicon.test(icon)) {
          alert('Icon phải từ 5 đến 50 ký tự, không dấu và bắt đầu bằng chữ');
        }else {
          $.post("kiemtrathemdanhmuc.php",{tendanhmuc:$('#themtendanhmuc').val(), icon:$('#themicon').val()},function(data){
             if(data == "true"){
               alert('Thêm thành công');
               let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/Quantri/listdanhmuc.php';
              $('#formthemdanhmuc').prop('action',url);
              $('#formthemdanhmuc').submit()
             }else {
               alert('Thêm thất bại');
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
