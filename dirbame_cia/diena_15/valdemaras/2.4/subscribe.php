<?php
// print_r($_GET);

if ( array_key_exists('ElPastas', $_GET) ){
    $x = $_GET['ElPastas'];
    if ( empty($x) ){
        echo "elektroninio pasto adresas neivestas";
    } else {
        $x = $_GET['ElPastas'];
        echo "Jusu email:" . $x .  "<hr />";
    }
} else {
    echo "stalciaus tolkiu pavadinimu 'ElPastas' nera";
}

 ?>
