<?php
  function getBondanhmuc(){
  $conn = myConnect();
  $qr = "SELECT * FROM `danhmuc` LIMIT 0,4";
  $result = mysqli_query($conn, $qr);
   mysqli_close($conn);
  return $result;
  }

  function getDanhmuc(){
  $conn = myConnect();
  $qr = "SELECT * FROM `danhmuc`";
  $result = mysqli_query($conn, $qr);
   mysqli_close($conn);
  return $result;
  }
  function chitietdanhmuc($iddanhmuc){
    $conn = myConnect();
      $qr = "SELECT * FROM `danhmuc` WHERE iddanhmuc = '$iddanhmuc'";
    $result = mysqli_query($conn,$qr);
    mysqli_close($conn);
    return mysqli_fetch_array($result,MYSQLI_ASSOC);
  }

  function suaDanhmuc($tendanhmuc,$icon,$iddanhmuc)
 {
   $conn = myConnect();
   $qr = "UPDATE `danhmuc` SET `tendanhmuc`='$tendanhmuc',`icon`='$icon' WHERE `iddanhmuc`='$iddanhmuc'";
   $result = mysqli_query($conn,$qr);
   mysqli_close($conn);
   return $result;
 }

 function themDanhmuc($tendanhmuc,$icon){
   $conn = myConnect();
   $qr = "INSERT INTO `danhmuc`(`iddanhmuc`, `tendanhmuc`, `icon`) VALUES (NULL,'$tendanhmuc','$icon')";
   $result = mysqli_query($conn,$qr);
   mysqli_close($conn);
   return $result;
 }

 function getTheloaiid($iddanhmuc){
  $conn = myConnect();
  $qr = " select * from theloai where idtheloai = '$iddanhmuc' ";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
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


function getTaikhoan(){
$conn = myConnect();
$qr = "select u.iduser,u.hoten,u.taikhoan,u.matkhau,u.diachi,u.dienthoai,u.email,u.ngaydangky,u.loaitaikhoan,dm.tendanhmuc from users as u, danhmuc as dm where u.iddanhmuc = dm.iddanhmuc";
$result = mysqli_query($conn, $qr);
 mysqli_close($conn);
return $result;
}

function themTaikhoan($hoten,$taikhoan,$matkhau,$diachi,$dienthoai,$email,$quyentruycap){
$conn = myConnect();
$qr = "INSERT INTO `users`(`iduser`, `hoten`, `taikhoan`, `matkhau`, `diachi`, `dienthoai`, `email`, `ngaydangky`, `loaitaikhoan`,`iddanhmuc`) VALUES (NULL,'$hoten','$taikhoan','$matkhau','$diachi','$dienthoai','$email',NOW(),'2','$quyentruycap')";
$result = mysqli_query($conn, $qr);
 mysqli_close($conn);
return $result;
}

function getTheloai($iddanhmuc){
$conn = myConnect();
$qr = "SELECT * FROM `theloai` WHERE iddanhmuc = '$iddanhmuc'";
$result = mysqli_query($conn, $qr);
 mysqli_close($conn);
return $result;
}
 ?>
