<?php
 session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";
 ?>
<!doctype html>
<html lang="en">
<head>
    <title>Đại học Nguyễn Tất Thành</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="../CSS/TrangChu.css">
    <!-- link icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

            <?php
                //require"../ChungGT_TC/header.php";
             ?><!-- hết phần header -->
             <div id="header">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <div class="container">
                     <div class="row hBlock	">
                         <div class="leftheader">
                             <button class="navbar-toggler" type="button" data-toggle="collapse"
                                 data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                                 aria-label="Toggle navigation">
                                 <span class="navbar-toggler-icon"></span>
                             </button>
                             <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                 <ul class="navbar-nav mr-auto mt-2 mt-lg-0 header1">
                                     <li class="nav-item active ">
                                         <p class="text-uppercase">HOTLINE:</p>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">0902.298.300</a>
                                     </li>
                                     <li class="nav-item active">
                                         <p class="text-uppercase">-</p>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">0906.298.300</a>
                                     </li>
                                 </ul>
                                 <ul class="navbar-nav mr-auto mt-2 mt-lg-0 header2">
                                     <li class="nav-item active">
                                         <a class="nav-link" href="#">SINH VIÊN</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">GIẢNG VIÊN
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">ĐÀO TẠO QUỐC TẾ</a>
                                     </li>
                                     <?php
                                        if(!isset($_SESSION["iduser"])){
                                          require "lidangnhap.php";
                                         }else{
                                          require "lidangxuat.php";
                                              }
                                      ?>

                                 </ul>
                             </div>
                         </div>
                         <div class="rightheader d-flex ">
                             <div class="form d-flex">
                                 <input class="form-control btn-transparent border-0" placeholder="Tìm kiếm thông tin"
                                     name="keyword">
                                 <button class="btn btn-transparent btn-secondary border-0"><i class="fa fa-search"
                                         aria-hidden="true"></i></button>
                             </div>
                             <img src="http://ntt.edu.vn/web/frontend/images/ico-flagen.jpg" alt="" class="language">
                         </div>
                     </div>
                 </div>
             </nav>
            </div>
           <?php
                require"../ChungGT_TC/menu1.php";
            ?><!-- hết phần menu1 -->

            <?php
                require"../ChungGT_TC/menu2.php";
            ?> <!-- hết phần menu2 -->

            <?php
                require"slide.php";
            ?> <!-- hết phần slide -->

    <div class="container block1">
        <div class="row">

            <?php
                require"tintuc.php";
            ?> <!-- hết phần tintuc -->

            <?php
                require"media.php";
            ?> <!-- hết phần media -->

        </div>
    </div><!-- hết phần block1 -->

    <div class="container block1">
        <div class="row">

            <?php
                 require"block1left.php";
            ?> <!-- hblock1left -->

            <?php
                 require"block1right.php";
            ?> <!-- hết phần block1right -->

        </div>
    </div><!-- hết phần block2 -->


            <?php
                require"slide2.php";
            ?> <!-- hết phần slide2 -->

            <?php
                require"../ChungGT_TC/footer.php";
            ?> <!-- hết phần footer -->

            <?php
                require"../ChungGT_TC/copyright.php";
            ?> <!-- hết phần copyright -->


         <?php
                require"../ChungGT_TC/tinnhan.php";
            ?> <!-- hết phần copyright -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$(".col-sm-12.form2").hide();
  $("#hide").click(function(){
    $(".form2").hide();
  });
  $("#show").click(function(){
    $(".form2").show();
  });
});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>


</body>

</html>
