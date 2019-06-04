<?php
    include("db_functions.php");
    echo "<h1>Visi gydytojai:</h1><br /><ul>";

    for ($i=1; $i < 6 ; $i++) {
        $gydytojas = getDoctor($i);
        echo "<li><h2><a href='gydytojas.php?id=" . $i . "'>" . $gydytojas['name'] . " " . $gydytojas['lname'] . "</h2></li>";
    }
    echo "</ul>";
?>
