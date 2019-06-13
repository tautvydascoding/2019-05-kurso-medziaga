<?php
include("header.php");
require_once('db_functions_kontaktai.php');
?>

</header>
<h2 class='title1'>Kontaktai</h2>
<section class='paslauguSarasas'>

<?php

$contactOBJ = getContacts(99);  // paimk 4 pirma paslaugas
//print_r( $contactOBJ ); // test

// ar radome paslaugu DB-je?
if (mysqli_num_rows($contactOBJ) > 0) {
    $vienasContArray = mysqli_fetch_assoc($contactOBJ);     // mysqli_fetch_assoc - paima viena eilue is OBJ ir pavercia i array
// while ciklas suveiks tiek kartu kiek yra paslaugu
    echo "<ol>";


    while ($vienasContArray == true) {
  // kopija:   echo "<li>". $vienasContArray['pav'] ."</li>";



        echo "<li class='list'>". $vienasContArray['pav'] ." ". $vienasContArray['kodas']." ". $vienasContArray['miestas']." ". $vienasContArray['gatve']." ". $vienasContArray['tel']. "</li>";
        $vienasContArray = mysqli_fetch_assoc($contactOBJ);     // mysqli_fetch_assoc - paima viena (SEKANCIA) eilue is OBJ ir pavercia i array
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
