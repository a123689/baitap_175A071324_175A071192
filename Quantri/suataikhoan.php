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
<?php
 $idtaikhoan = $_GET["idtaikhoan"]; settype($idtaikhoan,"int");
 $rowchitiet = chitiettaikhoan($idtaikhoan);
 echo $var = password_verify($rowchitiet['matkhau'], PASSWORD_DEFAULT)."\n";
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
        <form id="formthemtaikhoan" name="formthemtaikhoan" method="post" action="">
          <table width="500" border="1" cellspacing="0" cellpadding="0">
            <tr>
            <td colspan="2">SỬA TÀI KHOẢN</td>
          </tr>
          <tr>
            <td>Họ tên</td>
            <td><label for="hoten"></label>
            <input type="text" name="hoten" id="hoten" value="<?php echo $rowchitiet['hoten']?>" /></td>
          </tr>
          <tr>
            <td>Mật khẩu</td>
            <td><label for="matkhau"></label>
            <input type="password" name="matkhau" id="matkhau" value="<?php echo $rowchitiet['matkhau']?>"/></td>
          </tr>
          <tr>
            <td>Nhập lại mật khẩu</td>
            <td><label for="nhaplaimatkhau"></label>
            <input type="password" name="nhaplaimatkhau" id="nhaplaimatkhau" value="<?php echo $rowchitiet['matkhau']?>" /></td>
          </tr>
          <tr>
            <td>Địa chỉ</td>
            <td><label for="diachi"></label>
            <input type="text" name="diachi" id="diachi" value="<?php echo $rowchitiet['diachi']?>" /></td>
          </tr>
          <tr>
            <td>Điện thoại</td>
            <td><label for="dienthoai"></label>
            <input type="text" name="dienthoai" id="dienthoai" value="<?php echo $rowchitiet['dienthoai']?>" /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><label for="email"></label>
            <input type="text" name="email" id="email" value="<?php echo $rowchitiet['email']?>"/></td>
          </tr>
          <tr>
                <td>Quyền truy cập</td>
                <td><label for="iddanhmuc"></label>
                  <select name="iddanhmuc" id="iddanhmuc">
                  <?php
				           $danhmuc = getDanhmuc();
				            while($row_danhmuc = mysqli_fetch_array($danhmuc,MYSQLI_ASSOC) ){

				  ?>
                  <option value="<?php echo $row_danhmuc['iddanhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                  <?php
				  }
				  ?>

                </select></td>
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
alert("Đang bảo trì");
      // $("#btnSua").click(function(){
      //
      //   var hoten = $('#hoten').val();
      //   var matkhau = $('#matkhau').val();
      //   var diachi = $('#diachi').val();
      //   var dienthoai = $('#dienthoai').val();
      //   var email = $('#email').val();
      //   var nhaplaimatkhau = $('#nhaplaimatkhau').val();
      //   var regexhoten = /^[a-zA-Z][A-z|0-9|\W|\s]{4,49}/;
      //   var regexmatkhau = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
      //   var regexdiachi = /^[a-zA-Z][A-z|0-9|\W|\s]{9,99}/;
      //   var regexemail =  /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
      //   var regexdienthoai = /((09|03|07|08|05)+([0-9]{8})\b)/;
      //   var quyentruycap =  $('#iddanhmuc').val();
      //
      //
      //   if(hoten == "" || taikhoan == "" || matkhau == "" || diachi == "" || dienthoai == "" || email == ""){
      //       alert('Bạn phải nhập đầy đủ thông tin');
      //   }else {
      //     if(!regexhoten.test(hoten)){
      //       alert('Họ tên phải từ 5 đến 50 ký tự');
      //     }else if (!regexmatkhau.test(matkhau)) {
      //         alert('Mật khẩu phải ít nhất 8 ký tự, ít nhất một chữ cái viết hoa, môt chữ cái viết thường, một số, một ký tự đặc biệt');
      //     }else if (!regexdiachi.test(diachi)) {
      //       alert('Địa chỉ phải từ 10 đến 100 ký tự');
      //     }else if (!regexdienthoai.test(dienthoai)) {
      //       alert('Số điện thoại không hợp lệ');
      //     }else if (!regexemail.test(email)) {
      //       alert('Email không hợp lệ');
      //     }
      //     else {
      //       if(matkhau != nhaplaimatkhau){
      //         alert("Nhập lại mật khẩu không chính xác");
      //       }else {
      //         $.post("../dangnhap/kiemtrataikhoan.php",{username:$('#taikhoan').val()},function(data){
      //
      //           if(data == "false"){
      //             alert("Tài khoản đã tồn tại");
      //           }else {
      //             $.post("../dangnhap/kiemtraemail.php",{email:$('#email').val()},function(data){
      //
      //               if(data == "false"){
      //                 alert("Email đã được sử dụng");
      //               }else {
      //                 $.post("kiemtrathemtaikhoan.php",{hoten:$('#hoten').val(),taikhoan:$('#taikhoan').val(),
      //                 matkhau:$('#matkhau').val(),diachi:$('#diachi').val(),dienthoai:$('#dienthoai').val(),email:$('#email').val(),quyentruycap:$('#iddanhmuc').val()},function(data){
      //                    if(data == "true"){
      //                      alert('Thêm thành công');
      //                      let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/Quantri/listtaikhoan.php';
      //                     $('#formthemtaikhoan').prop('action',url);
      //                     $('#formthemtaikhoan').submit()
      //                    }else {
      //                      alert('Thêm thất bại');
      //                    }
      //
      //                 });
      //               }
      //               });
      //
      //           }
      //         });
      //       }
      //
      //
      //      }
      //   }
      //
      //
      //
      // });
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
