<?php
  session_start();
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
    <table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
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


          <p>&nbsp;</p>
        <p>&nbsp;</p></td>
      </tr>
    </table>

<script type="text/javascript">
$(document).ready(function(){


});
</script>
    </body>
</html>
<?php
}else {
  header("location:http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/dangnhap/formdangnhap.php");
}
 ?>
