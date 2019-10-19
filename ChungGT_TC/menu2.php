<script>
        $(document).ready(function () {
            $(".hBlock1").slideUp("");
            $(".triangle").click(function () {
                $(".hBlock1 ").slideToggle("");
            });
        });
    </script>
    <div class="slide">
        <div class="triangle">
            <a id="showCollapse"><i class="fa fa-bars c-blue-a5"></i></a>
        </div>
        <div class="container hBlock1">
            <div class="menu2 container">
                <div class="row">
                    <div class="col-lg-9 row">
                      <?php
                      $danhmuc = getDanhmuc();
                      while($row_danhmuc = mysqli_fetch_array($danhmuc,MYSQLI_ASSOC) ){
	                    $iddanhmuc = $row_danhmuc['iddanhmuc'];
                      ?>
                        <div class="col-lg-4">
                            <ul class="subnav">
                                <li><a href="" class="mHead"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
                                <?php
                                $theloai = getTheloaibydanhmuc($iddanhmuc);
                                while($row_theloai = mysqli_fetch_array($theloai,MYSQLI_ASSOC) ){
                              
                                ?>
                                <li><a href=""><i class="fa fa-angle-double-right"></i><?php echo $row_theloai['tentheloai']?></a></li>


                            </ul>
                            <?php
                          }
                          ?>
                        </div>
                        <?php
                      }
                      ?>

                    </div>
                    <div class="col-lg-3">
                        <ul class="subnav btn">
                            <li><a href="#" class="btn btn-outline-info dropdown-item" role="button">
                                    <i class="fab fa-facebook-square"></i> Facebook</a></li>
                            <li><a href="#" class="btn btn-outline-info dropdown-item" role="button">
                                    <i class="fab fa-google-plus-square"></i> Google Plus</a></li>
                            <li><a href="#" class="btn btn-outline-info dropdown-item" role="button">
                                    <i class="fab fa-youtube"></i>Youtube</a></li>
                            <li> <a href="#" class="btn btn-outline-info dropdown-item" role="button">
                                    <i class="fa fa-envelope"></i>
                                    E-mail</a></li>
                            <li><a href="#" class="btn btn-outline-info dropdown-item" role="button">
                                    <i class="fab fa-weixin"></i>zalo</a>
                            </li>
                            <li> <a href="#" class="btn btn-outline-info dropdown-item" role="button">
                                    <i class="fa fa-mortar-board"></i>E-office</a></li>
                            <li><a href="#" class="btn btn-outline-info dropdown-item" role="button">
                                    <i class="fa fa-users"></i> Tuyển dụng</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- hết phần menu2 -->
