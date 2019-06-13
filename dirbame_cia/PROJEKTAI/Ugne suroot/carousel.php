
<?php require_once('db_functions.php') ?>

<div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade w-100" data-ride="carousel">
  <div class="carousel-inner" role="listbox">

    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider-img-1.jpg" data-src="holder.js/900x400?theme=social" alt="First slide">
    </div>
    <?php
        $allimages = getImages( 30 );
        $imgname = mysqli_fetch_assoc($allimages);


        while (  $imgname == true ) {
          echo "<div class='carousel-item '><img class='d-block w-100' src='img/" . $imgname['imgname'] . "' data-src='holder.js/900x400?theme=social'></div>";
          $imgname = mysqli_fetch_assoc($allimages);
        }
       ?>
  </div>


  <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- <?php
    for($i=1; $i<5; $i++){
      echo "<div class='carousel-item active'><img class='d-block w-100' src='img/" . getImg($i)['imgname'] . "' data-src='holder.js/900x400?theme=social'></div>";
    }
   ?> -->
