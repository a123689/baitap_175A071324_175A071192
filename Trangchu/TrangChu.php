<?php
 session_start();
require "../lib/db_connect.php";
require "../lib/trangchu.php";

 ?>

<!doctype html>
<html lang="en">

<head>
    <title>Trường Đại Học Nguyễn Tất Thành</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- owlcarousel -->
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="../CSS/TrangChu.css">
    <!-- font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
            <?php
            require"../ChungGT_TC/header.php";
             ?><!-- hết phần header -->
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

            <?php
                require"slide3.php";
            ?> <!-- hết phần media -->

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
    <hr>
             <?php
                require"../ChungGT_TC/footer.php";
            ?> <!-- hết phần footer -->

            <?php
                require"../ChungGT_TC/copyright.php";
            ?> <!-- hết phần copyright -->
            <?php
                require"../ChungGT_TC/tinnhan.php";
            ?> <!-- hết phần tinnhan -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   	<script src="..../dangnhap/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
