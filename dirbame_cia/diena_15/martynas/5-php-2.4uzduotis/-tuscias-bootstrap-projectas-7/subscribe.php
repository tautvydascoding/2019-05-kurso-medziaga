<?php

 // print_r($_GET);

// print_r( $GLOBALS);



if ( array_key_exists('elpastas', $_GET) ){
    $x = $_GET['elpastas'];



    echo "stalcius 'elpastas' egzistuoja:" . $x .  "<hr />";
} else {
    echo "stalciaus tolkiu pavadinimu 'tekstas' nera";
}
 ?>
