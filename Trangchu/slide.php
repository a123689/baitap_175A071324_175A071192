
<div class="container">
<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" style="transition: 0.4">
    <div class="carousel-inner">
      <?php
      $slide = getSlide();
    while ($row = mysqli_fetch_array($slide,MYSQLI_ASSOC)) {


       ?>

        <div class="carousel-item active">
            <img class="d-block w-100"
                src="<?php echo $row['hinhanh'] ?>"
                alt="">
            <div class="image-title">
                <h1><?php echo $row['tieude'] ?></h1>
            </div>
        </div>
        
        <?php
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
