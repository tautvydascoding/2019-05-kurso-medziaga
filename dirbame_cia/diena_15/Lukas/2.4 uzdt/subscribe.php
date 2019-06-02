<?php

// print_r($_POST);
if (!empty($_POST["pastas"])) {
    echo "Jusu elpastas yra: " . $_POST["pastas"];
} else {
        echo "Prasome iveskite savo el pasta.";
}
if ( array_key_exists('pastas', $_GET) ){
    $x = $_GET['pastas'];
    // AR "x" turi kokia nors reiksme
    if ( isset($x) ) {
        echo "y neturi reiksmes <hr />";
    } else {
    echo "stalcius 'tekstas' egzistuoja:" . $x .  "<hr />";
} else {
    echo "stalciaus tolkiu pavadinimu 'tekstas' nera";
}


$y;
// AR "y" turi kokia nors reiksme
if ( isset($y) ) {
    echo $y;
} else {
    echo "y neturi reiksmes <hr />";
}

?>
