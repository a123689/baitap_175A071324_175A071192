<div class="col-sm-8">
                    <div class="row">
                    <div class="col-md-6">
                    <h4>Hợp tác quốc tế
                        <p></p>
                    </h4>
                    <?php
                    $hoptacquocte = getTinmoinhat_hoptacquocte();
                    $row_hoptacquocte = mysqli_fetch_array($hoptacquocte,MYSQLI_ASSOC);
                  
                     ?>
                    <img src="<?php echo $row_hoptacquocte['hinhanh'] ?>" class="card-img-top" alt="" style="max-width: 360px; height: 208px;">
                    <div class="card-body">
                        <a href="#" class="card-link"><?php echo $row_hoptacquocte['tieude'] ?></a>
                        <p class="card-text"><?php echo $row_hoptacquocte['tomtat'] ?></p>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <a class="c-blue-a5 font-weight-bold" href="">
                                <i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                        </li>
                    </ul>
                    </div>

                <div class="col-md-6">
                    <h4>Môi trường học tập
                        <p></p>
                    </h4>
                    <?php
                    $moitruonghoctap = getTinmoinhat_moitruonghoctap();
                    $row_moitruonghoctap = mysqli_fetch_array($moitruonghoctap,MYSQLI_ASSOC);

                     ?>
                    <img src="<?php echo $row_moitruonghoctap['hinhanh'] ?>" class="card-img-top" alt="" style="max-width: 360px; height: 208px;">
                    <div class="card-body">
                        <a href="#" class="card-link"><?php echo $row_moitruonghoctap['tieude'] ?></a>
                        <p class="card-text">
                            <?php echo $row_moitruonghoctap['tomtat'] ?>
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <a class="c-blue-a5 font-weight-bold" href="">
                                    <i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                            </li>
                        </ul>
                    </div>
                </div>
                    </div>
                </div>
