<?php
ob_start();
session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";
if(isset($_SESSION["iduser"])){

?>

<?php
 if( $_SESSION["loaitaikhoan"] == 2 ){
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
            <td colspan="2">THÊM THỂ LOẠI</td>
          </tr>
          <tr>
            <td>Tên thể loại</td>
            <td><label for="tentheloai"></label>
            <input type="text" name="tentheloai" id="tentheloai" /></td>
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
        var tentheloai = $('#tentheloai').val();

        var regextentheloai = /^[a-zA-Z][A-z|0-9|\W|\s]{4,49}/;

        if(!regextentheloai.test(tentheloai)){
          alert('Tên thể loại phải từ 5 đến 50 ký tự và bắt đầu bằng chữ');
        }else {
          $.post("kiemtrathemtheloai.php",{tentheloai:$('#tentheloai').val(),iddanhmuc:"<? echo $_SESSION["iddanhmuc"]?>"},function(data){
             if(data == "true"){
               alert('Thêm thành công');
               let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/Quantri/listtheloai.php';
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
}else if($_SESSION["loaitaikhoan"] == 0){

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
             <td colspan="2">THÊM THỂ LOẠI</td>
           </tr>
           <tr>
                 <td>Danh mục</td>
                 <td><label for="iddanhmuc"></label>
                   <select name="iddanhmuc" id="iddanhmuc">
                   <?php

                    $danhmuc = getDanhmuc();
                     while($row_danhmuc = mysqli_fetch_array($danhmuc,MYSQLI_ASSOC)){


           ?>
                   <option value="<?php echo $row_danhmuc['iddanhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                   <?php
           }
           ?>

                 </select></td>
               </tr>
           <tr>
             <td>Tên thể loại</td>
             <td><label for="tentheloai"></label>
             <input type="text" name="tentheloai" id="tentheloai" /></td>
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
         var tentheloai = $('#tentheloai').val();

         var regextentheloai = /^[a-zA-Z][A-z|0-9|\W|\s]{4,49}/;

         if(!regextentheloai.test(tentheloai)){
           alert('Tên thể loại phải từ 5 đến 50 ký tự và bắt đầu bằng chữ');
         }else {
           $.post("kiemtrathemtheloai.php",{tentheloai:$('#tentheloai').val(),iddanhmuc:$('#iddanhmuc').val()},function(data){
              if(data == "true"){
                alert('Thêm thành công');
                let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/Quantri/listtheloai.php';
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
