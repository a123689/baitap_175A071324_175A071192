
<div class="container">
<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" style="transition: 0.4">
    <div class="carousel-inner">
      <?php
          $danhmuc = danhsachslide();
          $i=0;
          while ($row = mysqli_fetch_array($danhmuc,MYSQLI_ASSOC)) {
  echo '<div class="carousel-item  ';
          if ($i == 0) {
          echo 'active  ';

          }
          echo '"><img class="d-block w-100" src="../Quantri/Hinhanh/'.$row['hinhanh'].'"  alt="" height="450" width="450">';
         echo '<div class="image-title">';
         echo '<h1>'.$row['tieude'].'</h1>';
         echo '</div>';

        echo '</div>';
        $i++;
 }
 ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div><!-- hết phần slide -->
