

<?php
require_once('header.php');
 ?>

<main class="row">

<?php
// print_r( $_GET);

include_once('db_functions.php');
$sk = ($_GET['id']);
$visosPrekes = getPreke($sk);
$vienaPreke = mysqli_fetch_assoc($visosPrekes);


  echo "<section class=col-md-6 col-xs-12>";
  echo "<img src='img/{$vienaPreke['pav']}'width='90%'>";
  echo "</section>";
  echo "<div class= col-md-6 col-xs-12 paddingtop>";
  echo "<h1  class= 'centruoti'> Nano Lex </h1>";
  echo "<h2 class='centruoti'>"  . $vienaPreke['pavadinimas'] ."</h2>";
  echo "<p align='left'>"  . $vienaPreke['aprasymas'] ."</p>";
  echo "<a href='https://ghm.lt/shop/lt/21_nanolex'> <button type='submit' class = 'btn btn-siusti' name='isigyti'>Įsigyti</button> </a>";
  echo "</div>";

// $vienaPreke = mysqli_fetch_assoc($visosPrekes);
 ?>
 <!-- <a href="www.ghm.lt"> <button type="submit" class = 'btn-primary' name="isigyti"></button> </a> -->
</main>













<?php
require_once('footer.php');
 ?>
