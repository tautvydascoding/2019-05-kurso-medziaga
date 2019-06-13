<!-- Karuselės pradžia -->
<?php
include_once('db_functions.php');
$karusele1 = getKarusele(1);
$karusele2 = getKarusele(2);
$karusele3 = getKarusele(3);
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 aukstis-400" src="img/<?php echo $karusele1['nuotrauka'];  ?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
          <h3><strong><?php echo $karusele1['tekstash3'];  ?></strong></h3>
          <h4><strong><?php echo $karusele1['tekstash4'];  ?></strong></h4>
            <a href = 'berniukams.php'><button class="btn-slider"><strong>Pirk Dabar!</strong></button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 aukstis-400" src="img/<?php echo $karusele2['nuotrauka'];  ?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          <h3><?php echo $karusele2['tekstash3'];  ?></h3>
          <h4><?php echo $karusele2['tekstash4'];  ?></h4>
          <a href = 'berniukams.php'><button class="btn-slider"><strong>Pirk Dabar!</strong></button></a>
      </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100 aukstis-400" src="img/<?php echo $karusele3['nuotrauka'];  ?>" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h3><?php echo $karusele3['tekstash3'];  ?></h3>
            <h4><?php echo $karusele3['tekstash4'];  ?></h4>
            <a href = 'mergaitems.php'><button class="btn-slider"><strong>Pirk Dabar!</strong></button></a>
        </div>
    </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Ankstesnė</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Sekanti</span>
</a>
</div>
<!-- Karuselės pabaiga  -->
<!-- <Reklaminių skilčių pradžia -->
<br>
<br>
<h2 class="text-center">Naujausios prekės ir nuolaidos</h2>
<div class="container">
<div class="row">
    <div class="col-md-4 mb-4 d-flex align-items-stretch aukstis-600 pt-5">
            <div class="card card-image" style="background-image: url(img/nuolaida.jpg);">
                <div class="text-white text-center d-flex align-items-center py-5 px-4">
                    <div>
                        <h6><span class="fa-stack fa-lg"><i class="fa fa-certificate fa-stack-2x"></i></span><strong>Nuolaida vaikiškoms prekėms!</strong></h6>
                        <h3 class="card-title py-3 font-weight-bold"><strong>Nuolaidos iki 50%!</strong></h3>
                        <p class="pb-5 text-justify"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                        Odit sed qui, dolorum!</strong></p>
                        <a href = "mergaitems.php" class="btn-card btn-rounded"><i class="fas fa-cut"></i>Peržiūrėti pasiūlymus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 aukstis-600">
            <div class="row">
                <div class="col-md-12 aukstis-300 pt-5">
                            <div class="card card-image" style="background-image: url(img/nuolaida.jpg);">
                                <div class="text-white text-center d-flex align-items-center py-5 px-3">
                                    <h6><span class="fa-stack fa-lg"><i class="fa fa-certificate fa-stack-2x"></i></span><strong>Populiariausios prekės MERGAITĖMS</strong></h6>
                                    <h3 class="card-title py-3 font-weight-bold"><strong>Nuolaidos iki 50%!</strong></h3>
                                    <a href = "mergaitems.php" class="btn-card btn-rounded"><i class="fas fa-cut"></i>Peržiūrėti pasiūlymus</a>

                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 aukstis-300 pt-5">
                        <div class="card card-image" style="background-image: url(img/nuolaida.jpg);">
                            <div class="text-white text-center d-flex align-items-center py-5 px-3">
                                <h6><span class="fa-stack fa-lg"><i class="fa fa-certificate fa-stack-2x"></i></span><strong>Populiariausios prekės BERNIUKAMS</strong></h6>
                                <h3 class="card-title py-3 font-weight-bold"><strong>Nuolaidos iki 50%!</strong></h3>
                                <a href = "berniukams.php" class="btn-card btn-rounded"><i class="fas fa-cut"></i>Peržiūrėti pasiūlymus</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <Reklaminių skilčių pabaiga -->
<!-- Kuponu pradzia -->

<div class="container-fluid">
    <div class="row">
        <div class="col-3 aukstis-100 d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-3">
                    <button class="couponBox border0 ml-2"><i class="fa fa-truck white" aria-hidden="true"></i></button>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-12">
                            <strong>NEMOKAMAS SIUNTIMAS</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            Lorem ipsum dolor sit amet, consectetur
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 aukstis-100 d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-3">
                    <button class="couponBox border0 ml-2"><i class="fa fa-headphones white" aria-hidden="true"></i></button>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-12">
                            <strong>24/7 pagalba</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            Lorem ipsum dolor sit amet, consectetur
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 aukstis-100 d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-3">
                    <button class="couponBox border0 ml-2"><i class="fa fa-shopping-bag white" aria-hidden="true"></i></button>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-12">
                            <strong>GRĄŽINIMO GARANTIJA</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            Lorem ipsum dolor sit amet, consectetur
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 aukstis-100 d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-3">
                    <button class="couponBox border0 ml-2"><i class="fa fa-gift white" aria-hidden="true"></i></button>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-12">
                            <strong>NUOLAIDŲ SISTEMA</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            Lorem ipsum dolor sit amet, consectetur
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
