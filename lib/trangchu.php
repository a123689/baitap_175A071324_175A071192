<?php
  function getBondanhmuc(){
  $conn = myConnect();
  $qr = "SELECT * FROM `danhmuc` LIMIT 0,5";
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

  function DanhSachTheLoai(){
  $conn = myConnect();
  $qr = "SELECT * FROM `theloai`";
  $result = mysqli_query($conn, $qr);
   mysqli_close($conn);
  return $result;
  }
  function DanhSachTheLoaiTheoDanhMuc($iddanhmuc){
  $conn = myConnect();
  $qr = "SELECT * FROM `theloai` where iddanhmuc = '$iddanhmuc'";
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

  function chitiettheloai($idtheloai){
    $conn = myConnect();
      $qr = "SELECT * FROM `theloai` WHERE idtheloai = '$idtheloai'";
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

function geTaikhoanbyid($idtaikhoan){
$conn = myConnect();
$qr = "SELECT * FROM `users`where iduser != '$idtaikhoan'";
$result = mysqli_query($conn, $qr);
 mysqli_close($conn);
return $result;
}
 function dangkytaikhoan($hoten,$taikhoan,$matkhau,$diachi,$dienthoai,$email){
 $conn = myConnect();
 $qr = "INSERT INTO `users`(`iduser`, `hoten`, `taikhoan`, `matkhau`, `diachi`, `dienthoai`, `email`, `ngaydangky`, `loaitaikhoan`) VALUES (NULL,'$hoten','$taikhoan','$matkhau','$diachi','$dienthoai','$email',NOW(),'1')";
 $result = mysqli_query($conn, $qr);
  mysqli_close($conn);
 return $result;
 }


function getTaikhoan(){
$conn = myConnect();
$qr = "select * from users ";
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
$qr = "SELECT tl.idtheloai,tl.tentheloai,dm.tendanhmuc,dm.iddanhmuc FROM theloai as tl, danhmuc as dm WHERE tl.iddanhmuc = dm.iddanhmuc and dm.iddanhmuc = '$iddanhmuc'";
$result = mysqli_query($conn, $qr);
 mysqli_close($conn);
return $result;
}

function suaTheloai($tentheloai,$idtheloai)
{
 $conn = myConnect();
 $qr = "UPDATE `theloai` SET `tentheloai`='$tentheloai' WHERE `idtheloai`='$idtheloai'";
 $result = mysqli_query($conn,$qr);
 mysqli_close($conn);
 return $result;
}

function suaTheloaibyAdmin($tentheloai,$idtheloai,$iddanhmuc)
{
 $conn = myConnect();
 $qr = "UPDATE `theloai` SET `tentheloai`='$tentheloai',`iddanhmuc` = '$iddanhmuc' WHERE `idtheloai`='$idtheloai'";
 $result = mysqli_query($conn,$qr);
 mysqli_close($conn);
 return $result;
}

function getAllTheloai(){
$conn = myConnect();
$qr = "SELECT tl.idtheloai,tl.tentheloai,dm.tendanhmuc,dm.iddanhmuc FROM theloai as tl, danhmuc as dm WHERE tl.iddanhmuc = dm.iddanhmuc";
$result = mysqli_query($conn, $qr);
 mysqli_close($conn);
return $result;
}

function getTintuc($iddanhmuc){
$conn = myConnect();
$qr = "SELECT t.idtin,t.tieude,t.tomtat,t.hinhanh,tl.tentheloai,dm.tendanhmuc,dm.iddanhmuc FROM tintuc as t, theloai as tl,danhmuc as dm WHERE t.idtheloai = tl.idtheloai and tl.iddanhmuc = dm.iddanhmuc and dm.iddanhmuc = '$iddanhmuc'";
$result = mysqli_query($conn, $qr);
 mysqli_close($conn);
return $result;
}

function getAllTintuc(){
$conn = myConnect();
$qr = "SELECT t.idtin,t.tieude,t.tomtat,t.hinhanh,tl.tentheloai,dm.tendanhmuc,dm.iddanhmuc FROM tintuc as t, theloai as tl,danhmuc as dm WHERE t.idtheloai = tl.idtheloai and tl.iddanhmuc = dm.iddanhmuc";
$result = mysqli_query($conn, $qr);
 mysqli_close($conn);
return $result;
}

function chitiettaikhoan($idtaikhoan){
  $conn = myConnect();
    $qr = "SELECT * FROM `users` WHERE iduser = '$idtaikhoan'";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return mysqli_fetch_array($result,MYSQLI_ASSOC);
}

function themTheloai($tentheloai,$iddanhmuc){
  $conn = myConnect();
  $qr = "INSERT INTO `theloai`(`idtheloai`,`tentheloai`,`iddanhmuc`) VALUES (NULL,'$tentheloai','$iddanhmuc')";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}

function themTintuc($tieude,$tomtat,$hinhanh,$idtheloai){
  $conn = myConnect();
  $qr = "INSERT INTO `tintuc`(`idtin`,`idtheloai`,`tieude`,`tomtat`,`hinhanh`) VALUES (NULL,'$idtheloai','$tieude','$tomtat','$hinhanh')";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}



function getTheloaibydanhmuc($iddanhmuc){
$conn = myConnect();
$qr = "SELECT * FROM `theloai` WHERE iddanhmuc = '$iddanhmuc'";
$result = mysqli_query($conn, $qr);
 mysqli_close($conn);
return $result;
}

function chitiettin($idtin){
  $conn = myConnect();
    $qr = "SELECT * FROM `tintuc` WHERE idtin = '$idtin'";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return mysqli_fetch_array($result,MYSQLI_ASSOC);
}
function chitiettinbydanhmuc($idtin){
  $conn = myConnect();
    $qr = "SELECT tt.idtin,tt.idtheloai,tt.tieude,tt.tomtat,tt.hinhanh,dm.iddanhmuc FROM tintuc as tt, theloai as tl, danhmuc as dm WHERE tt.idtheloai = tl.idtheloai and tl.iddanhmuc = dm.iddanhmuc and tt.idtin = '$idtin'";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return mysqli_fetch_array($result,MYSQLI_ASSOC);
}
function suaTintucCohinhanh($idtin,$tieude,$tomtat,$hinhanh,$idtheloai){
  $conn = myConnect();
  $qr = "UPDATE `tintuc` SET `idtheloai`='$idtheloai',`tieude`='$tieude',`tomtat`='$tomtat',`hinhanh`='$hinhanh' WHERE `idtin`='$idtin'";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}

function suaTintucKhongcohinhanh($idtin,$tieude,$tomtat,$idtheloai){
  $conn = myConnect();
  $qr = "UPDATE `tintuc` SET `idtheloai`='$idtheloai',`tieude`='$tieude',`tomtat`='$tomtat' WHERE `idtin`='$idtin'";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}

function danhsachslide(){
  $conn = myConnect();
  $qr = "SELECT * FROM slide";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}


function themSlide($tieude,$hinhanh){
  $conn = myConnect();
  $qr = "INSERT INTO `slide`(`idslide`,`tieude`,`hinhanh`) VALUES (NULL,'$tieude','$hinhanh')";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}

function chitietslide($idslide){
  $conn = myConnect();
  $qr = "SELECT * FROM slide WHERE idslide = '$idslide'";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return mysqli_fetch_array($result,MYSQLI_ASSOC);
}

function suaSlideCoanh($idslide,$tieude,$hinhanh){
  $conn = myConnect();
  $qr = "UPDATE `slide` SET `tieude`='$tieude',`hinhanh`='$hinhanh' WHERE `idslide`='$idslide'";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}

function suaSlideKhongcoanh($idslide,$tieude){
  $conn = myConnect();
  $qr = "UPDATE `slide` SET `tieude`='$tieude' WHERE `idslide`='$idslide'";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}

function suaTaikhoanKhongmatkhau($iduser,$hoten,$diachi,$dienthoai,$email,$quyentruycap){
  $conn = myConnect();
  $qr = "UPDATE `users` SET `hoten`='$hoten',`diachi`='$diachi',`dienthoai`='$dienthoai',`email`='$email',`iddanhmuc`='$quyentruycap' WHERE `iduser`= '$iduser' ";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}

function suaTaikhoanComatkhau($iduser,$hoten,$hashed_password,$diachi,$dienthoai,$email,$quyentruycap){
  $conn = myConnect();
  $qr = "UPDATE `users` SET `hoten`='$hoten',`matkhau`= '$hashed_password',`diachi`='$diachi',`dienthoai`='$dienthoai',`email`='$email',`iddanhmuc`='$quyentruycap' WHERE `iduser`= '$iduser' ";
  $result = mysqli_query($conn,$qr);
  mysqli_close($conn);
  return $result;
}
 ?>
