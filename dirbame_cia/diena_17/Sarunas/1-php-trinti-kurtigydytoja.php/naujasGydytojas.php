<?php



iinclude('db_functions.php');
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);

 ?>
  <h2> Sukuriau <?php echo $vard . $parv ?> </h2>

  <h2> Sukuriau <? $vard . $parv ?> </h2>
