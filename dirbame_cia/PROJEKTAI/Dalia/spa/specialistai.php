<?php
include("header.php");
require_once('db_functions_masazistai.php');
?>

</header>
<h2 class='title1'>Mūsų specialistai</h2>
<section class='paslauguSarasas'>

<?php

$specialistOBJ = getSpecialists(99);  // paimk 4 pirma paslaugas
//print_r( $specialistOBJ ); // test

// ar radome paslaugu DB-je?
if (mysqli_num_rows($specialistOBJ) > 0) {
    $vienasSpeclArray = mysqli_fetch_assoc($specialistOBJ);     // mysqli_fetch_assoc - paima viena eilue is OBJ ir pavercia i array
// while ciklas suveiks tiek kartu kiek yra paslaugu
    echo "<ol>";


    while ($vienasSpeclArray == true) {
  // kopija:   echo "<li>". $vienasSpeclArray['vardas'] ."</li>";



        echo "<li class='list'>". $vienasSpeclArray['vardas'] ." ". $vienasSpeclArray['pavarde']. "</li>";
        $vienasSpeclArray = mysqli_fetch_assoc($specialistOBJ);     // mysqli_fetch_assoc - paima viena (SEKANCIA) eilue is OBJ ir pavercia i array
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
