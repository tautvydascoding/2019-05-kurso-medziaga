
<?php require_once('db_functions.php') ?>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner"><?php
      for($i=1; $i<5; $i++){
        echo "<div class='carousel-item'><img class='d-block w-50' src='img/" . getImg($i)['imgname'] . "'></div>";

      }
     ?>
   </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
