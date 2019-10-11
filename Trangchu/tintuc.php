<div class="col-md-9">
                    <h4>Tin tức
                        <p></p>
                    </h4>
                    <div class="row">
                      <?php
                      $tintuc = getTinmoinhat();
                      while ($row = mysqli_fetch_array($tintuc,MYSQLI_ASSOC)) {
                       ?>
                        <div class="col-md-4">
                            <img src="<?php echo $row['hinhanh'] ?>" class="card-img-top" alt=""
                                style="max-width: 269px; height: 150px;">
                            <div class="card-body">
                                <a href="#" class="card-link"><?php echo $row['tieude'] ?></a>
                                <p class="card-text"><?php echo $row['tomtat'] ?>]</p>
                            </div>
                            <ul class="list-unstyled" style="float: right;">
                                <li>
                                    <a class="c-blue-a5 font-weight-bold" href="">
                                        <i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                                </li>
                            </ul>
                        </div>
                        <?php
                      }
                         ?>
                    </div>
                </div>
