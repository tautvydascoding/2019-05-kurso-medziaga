<?php
// ideda nauja gydytoja i sarasa
// include('db_functions.php');
//
// createDoctor('Juozas','Juozaitis');



include('db_functions.php');
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);

 ?>



 <h2>sukuriau gydytoja</h2>
