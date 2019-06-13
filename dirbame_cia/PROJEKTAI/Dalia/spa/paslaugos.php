    <?php
include("header.php");
require_once('db_functions_paslaugos.php');
?>

</header>
<h2 class='title1'>Masažai ir ritualai</h2>
<section class= "paslauguSarasas">



<?php

$paslaugosOBJ = getPaslaugos(99);  // paimk 4 pirma paslaugas
//print_r( $paslaugosOBJ ); // test

// ar radome paslaugu DB-je?
if (mysqli_num_rows($paslaugosOBJ) > 0) {
    $vienaPaslArray = mysqli_fetch_assoc($paslaugosOBJ);     // mysqli_fetch_assoc - paima viena eilue is OBJ ir pavercia i array
// while ciklas suveiks tiek kartu kiek yra paslaugu
    echo "<ol class='ol'>";


    while ($vienaPaslArray == true) {
  // kopija:   echo "<li>". $vienaPaslArray['paslauga'] ."</li>";



        echo "<li class='list'><a class='paslaugosNuoroda' href='paslaugos/index.php'>". $vienaPaslArray['paslauga']." ".$vienaPaslArray['trukme']." ".$vienaPaslArray['kaina']."</a></li>";
        $vienaPaslArray = mysqli_fetch_assoc($paslaugosOBJ);     // mysqli_fetch_assoc - paima viena (SEKANCIA) eilue is OBJ ir pavercia i array
    }
    echo "</ol>";
}
    //else {
    //echo "PASLAUGU NERADOME <br />";
    //}
?>


</section>






  <!-- </div> -->


<?php
include("footer.php");
 ?>
</body>
