<?php

    include("db_functions.php");
    // print_r($_GET); // Tikrinu kas yra get masyve, kad zinociau kaip is url iskrapstyti ka reikia.
    $id = $_GET['id'];
    $gydytojas = getDoctor($id);
    // print_r($gydytojas); // Tikrinam kokie duomenis yra gydytoju
    echo "<h1> Gydytoja: " . $gydytojas['name'] . "<br />Pavardė: " . $gydytojas['lname'];
?>
