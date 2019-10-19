<?php
ob_start();
session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";
if(isset($_SESSION["iduser"])){

?>
<?php
 if($_SESSION["loaitaikhoan"] == 2 ){
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
        <form enctype="multipart/form-data" id="formthemtintuc" name="formthemtintuc" method="post" action="" >
          <table width="500" border="1" cellspacing="0" cellpadding="0">
            <tr>
            <td colspan="2">THÊM TIN TỨC</td>
          </tr>
          <tr>
                <td>Thể loại</td>
                <td><label for="idtheloai"></label>
                  <select name="idtheloai" id="idtheloai">
                  <?php

                   $theloai = getTheloaibydanhmuc($_SESSION["iddanhmuc"]);
                    while($row_theloai = mysqli_fetch_array($theloai,MYSQLI_ASSOC)){


          ?>
                  <option value="<?php echo $row_theloai['idtheloai'] ?>"><?php echo $row_theloai['tentheloai'] ?></option>
                  <?php
          }
          ?>

                </select></td>
              </tr>
          <tr>
                <td>Tiêu đề</td>
                <td><label for="TieuDe"></label>
                <input type="text" name="TieuDe" id="TieuDe" /></td>
              </tr>
              <tr>
                <td>Tóm tắt</td>
                <td><label for="TomTat"></label>
                <textarea name="TomTat" id="TomTat" cols="45" rows="5"></textarea></td>
              </tr>
              <tr>
                <td>Hình ảnh</td>
                <td><label for="TomTat"></label>
                  <center>Chọn hình ảnh để tải lên:
          <br><input id="file" type="file" name="sortpic" required="">

      </center>
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
        var hinhanh =  $("#file").val();
        var tieude =  $("#TieuDe").val();
        var tomtat= $("#TomTat").val();
        var regextieude = /^[A-z|0-9|\W|\s]{10,100}/;
        var regextomtat = /^[A-z|0-9|\W|\s]{10,210}/;
        var regexhinhanh = /^[A-z|0-9|\W|\s]{1,150}/;
        if(tieude == ""){
          alert("Tiêu đề không được để trống");
        }else if (hinhanh == "") {
          alert("Bạn chưa chọn hình ảnh");
        }else if(tomtat == ""){
          alert("Tóm tắt không được để trống");
        }else {
          if(!regextieude.test(tieude)){
           alert("Tiêu đề phải từ 10 đến 100 ký tự");
         }else if(!regextomtat.test(tomtat)){
           alert("Tóm tắt phải từ 10 đến 210 ký tự");
         }else if(!regexhinhanh.test(hinhanh)){
           alert("Hình ảnh phải từ 1 đến 150 ký tự");
         }else {
           var file_data = $('#file').prop('files')[0];
           //lấy ra kiểu file
           var type = file_data.type;
           //Xét kiểu file được upload
           var match = ["image/gif", "image/png", "image/jpg","image/jpeg"];
           //kiểm tra kiểu file
           if (type == match[0] || type == match[1] || type == match[2]|| type == match[3]) {
               //khởi tạo đối tượng form data
               var form_data = new FormData();
               //thêm files vào trong form data
               form_data.append('file', file_data);
               //sử dụng ajax post
               $.ajax({
                   url: 'upload.php', // gửi đến file upload.php
                   dataType: 'text',
                   cache: false,
                   contentType: false,
                   processData: false,
                   data: form_data,
                   type: 'post',
                   success: function (res) {
                     if(res == false){
                       alert("lỗi");
                     }else {
                       $.post("kiemtrathemtintuc.php",{tieude:$('#TieuDe').val(),tomtat:$('#TomTat').val(),hinhanh:res,idtheloai:$('#idtheloai').val()},function(data){
                          if(data == "true"){
                            alert('Thêm thành công');
                            let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/Quantri/listtintuc.php';
                           $('#formthemtintuc').prop('action',url);
                           $('#formthemtintuc').submit()
                          }else {
                            alert('Thêm thất bại');
                          }

                       });
                     }
                   }
               });
           } else {
               alert("Chỉ được upload file ảnh");
           }
           return false;
         }
        }


      });

  });


  </script>
  </body>

</html>
<?php
}else if($_SESSION["loaitaikhoan"] == 0) {

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
         <form enctype="multipart/form-data" id="formthemtintuc" name="formthemtintuc" method="post" action="" >
           <table width="500" border="1" cellspacing="0" cellpadding="0">
             <tr>
             <td colspan="2">THÊM TIN TỨC</td>
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
                 <td>Thể loại</td>
                 <td><label for="idtheloai"></label>
                   <select name="idtheloai" id="idtheloai">
                   <?php

                    $theloai = getTheloaibydanhmuc($_SESSION["iddanhmuc"]);
                     while($row_theloai = mysqli_fetch_array($theloai,MYSQLI_ASSOC)){


           ?>
                   <option value="<?php echo $row_theloai['idtheloai'] ?>"><?php echo $row_theloai['tentheloai'] ?></option>
                   <?php
           }
           ?>

                 </select></td>
               </tr>
           <tr>
                 <td>Tiêu đề</td>
                 <td><label for="TieuDe"></label>
                 <input type="text" name="TieuDe" id="TieuDe" /></td>
               </tr>
               <tr>
                 <td>Tóm tắt</td>
                 <td><label for="TomTat"></label>
                 <textarea name="TomTat" id="TomTat" cols="45" rows="5"></textarea></td>
               </tr>
               <tr>
                 <td>Hình ảnh</td>
                 <td><label for="TomTat"></label>
                   <center>Chọn hình ảnh để tải lên:
           <br><input id="file" type="file" name="sortpic" required="">

       </center>
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
     var id = $("#iddanhmuc").val();
     $.get("loaitin.php",{iddanhmuc:id},function(data){
       $("#idtheloai").html(data);

     });
         $("#iddanhmuc").change (function(){
         var id = $(this).val();
          $.get("loaitin.php",{iddanhmuc:id},function(data){
            $("#idtheloai").html(data);

          });
       });
       $("#btnThem").click(function(){
         var hinhanh =  $("#file").val();
         var tieude =  $("#TieuDe").val();
         var tomtat= $("#TomTat").val();
         var regextieude = /^[A-z|0-9|\W|\s]{10,100}/;
         var regextomtat = /^[A-z|0-9|\W|\s]{10,210}/;
         var regexhinhanh = /^[A-z|0-9|\W|\s]{1,150}/;
         if(tieude == ""){
           alert("Tiêu đề không được để trống");
         }else if (hinhanh == "") {
           alert("Bạn chưa chọn hình ảnh");
         }else if(tomtat == ""){
           alert("Tóm tắt không được để trống");
         }else {
           if(!regextieude.test(tieude)){
            alert("Tiêu đề phải từ 10 đến 100 ký tự");
          }else if(!regextomtat.test(tomtat)){
            alert("Tóm tắt phải từ 10 đến 210 ký tự");
          }else if(!regexhinhanh.test(hinhanh)){
            alert("Hình ảnh phải từ 1 đến 150 ký tự");
          }else {
            var file_data = $('#file').prop('files')[0];
            //lấy ra kiểu file
            var type = file_data.type;
            //Xét kiểu file được upload
            var match = ["image/gif", "image/png", "image/jpg","image/jpeg"];
            //kiểm tra kiểu file
            if (type == match[0] || type == match[1] || type == match[2]|| type == match[3]) {
                //khởi tạo đối tượng form data
                var form_data = new FormData();
                //thêm files vào trong form data
                form_data.append('file', file_data);
                //sử dụng ajax post
                $.ajax({
                    url: 'upload.php', // gửi đến file upload.php
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function (res) {
                      if(res == false){
                        alert("lỗi");
                      }else {
                        $.post("kiemtrathemtintuc.php",{tieude:$('#TieuDe').val(),tomtat:$('#TomTat').val(),hinhanh:res,idtheloai:$('#idtheloai').val()},function(data){
                           if(data == "true"){
                             alert('Thêm thành công');
                             let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/Quantri/listtintuc.php';
                            $('#formthemtintuc').prop('action',url);
                            $('#formthemtintuc').submit()
                           }else {
                             alert('Thêm thất bại');
                           }

                        });
                      }
                    }
                });
            } else {
                alert("Chỉ được upload file ảnh");
            }
            return false;
          }
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
