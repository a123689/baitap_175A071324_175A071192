<?php
  function getDanhmuc(){
  $conn = myConnect();
  $qr = "
          select *
          from danhmuc

  ";
  $result = mysqli_query($conn, $qr);
   mysqli_close($conn);
  return $result;
  }


 function getTheloaiid($iddanhmuc){
  $conn = myConnect();
  $qr = " select * from theloai where idtheloai = '$iddanhmuc' ";
  $result = mysqli_query($conn,$qr);
  return $result;
 }

  function getSlide(){
  $conn = myConnect();
  $qr = "
        select *
        from slide

  ";
  $result = mysqli_query($conn, $qr);
   mysqli_close($conn);
  return $result;
 }

 function getTinmoinhat(){
 $conn = myConnect();
 $qr = "SELECT * FROM `tintuc` where idtheloai != '28' && idtheloai != '29' ORDER by idtin DESC LIMIT 0,3";
 $result = mysqli_query($conn, $qr);
 mysqli_close($conn);
 return $result;
 }

 function getTinmoinhat_moitruonghoctap(){
 $conn = myConnect();
 $qr = "SELECT * FROM `tintuc` where idtheloai = '29' ORDER by idtin DESC LIMIT 0,1";
 $result = mysqli_query($conn, $qr);
 mysqli_close($conn);
 return $result;
 }

 function getTinmoinhat_hoptacquocte(){
 $conn = myConnect();
 $qr = "SELECT * FROM `tintuc` where idtheloai = '28' ORDER by idtin DESC LIMIT 0,1";
 $result = mysqli_query($conn, $qr);
  mysqli_close($conn);
 return $result;
 }

 function getThanhvien(){
 $conn = myConnect();
 $qr = "SELECT * FROM `thanhvien`";
 $result = mysqli_query($conn, $qr);
  mysqli_close($conn);
 return $result;
 }

 function geTaikhoan(){
 $conn = myConnect();
 $qr = "SELECT * FROM `users`";
 $result = mysqli_query($conn, $qr);
  mysqli_close($conn);
 return $result;
 }

 function dangkytaikhoan($hoten,$taikhoan,$matkhau,$diachi,$dienthoai,$email){
 $conn = myConnect();
 $qr = "INSERT INTO `users`(`iduser`, `hoten`, `taikhoan`, `matkhau`, `diachi`, `dienthoai`, `email`, `ngaydangky`, `loaitaikhoan`) VALUES (NULL,'$hoten','$taikhoan','$matkhau','$diachi','$dienthoai','$email',NOW(),'0')";
 $result = mysqli_query($conn, $qr);
  mysqli_close($conn);
 return $result;
 }

 ?>
