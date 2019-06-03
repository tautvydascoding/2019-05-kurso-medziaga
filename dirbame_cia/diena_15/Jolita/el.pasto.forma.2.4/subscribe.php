<?php
    // test ar kazka zmoens ivede i forma
    // print_r($_GET);


    // PVZ
    // ar masyve egzistuoja stalcius pavadinimu "tekstas"
    if ( array_key_exists('pastas', $_GET) ){
        $x = $_GET['pastas'];
        // AR "x" turi kokia nors reiksme
        if ( empty($x) ) {
            echo "x neturi reiksmes <hr />";
        } else {
            echo "stalcius 'pastas' egzistuoja:" . $x .  "<hr />";
        }
    } else {
        echo "stalciaus tolkiu pavadinimu 'tekstas' nera";
    }

    $y;


 ?>
