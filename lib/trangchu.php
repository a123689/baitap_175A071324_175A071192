<?php
  function getDanhmuc(){
  $conn = myConnect();
  $qr = "
          select *
          from danhmuc

  ";
  $result = mysqli_query($conn, $qr);
  return $result;
  }


 ?>
