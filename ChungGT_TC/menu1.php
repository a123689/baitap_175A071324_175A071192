
 <div id="menu">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container">
         <a class="navbar-brand" href="#"><img src="http://ntt.edu.vn/web/frontend/images/logo_ntt.png" alt=""></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
             aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
           <?php
               $danhmuc = getBondanhmuc();
               while ($row = mysqli_fetch_array($danhmuc,MYSQLI_ASSOC)) {

               ?>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="<?php echo $row['icon']?>"
                                style="color: #35699b; font-size: 18px; padding: 0px 4px;"></i><?php echo $row['tendanhmuc']?> </a>
                    </li>

                </ul>
                <?php
              }
                 ?>
         </div>
     </div>
 </nav>
</div>
