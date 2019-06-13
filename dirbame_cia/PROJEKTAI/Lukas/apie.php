<?php
include_once('header.php');
include_once('menu-juosta-apie.php');
include_once('db_functions.php');
$apie = getApie();
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 aukstis-400 mt-3 mb-3">
            <img class="apieNuotrauka" src="img/<?php echo $apie['nuotrauka'];?>" alt="apie">
        </div>
        <div class="col-md-6 aukstis-400 mt-3 mb-3 text-justify">
            <h2 class="text-center"><?php echo $apie['pavadinimas'];?></h2><br><br>
            <span>&emsp;<?php echo $apie['aprasymas'];?></span>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>
