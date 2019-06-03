<?php

require_once('config.php');

// PRISIJUNGIMAS
$prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
mysqli_set_charset($prisijungimas, 'utf8mb4');
if ($prisijungimas){
    // echo "Prisijungimas sekmingas! <br />";
} else {
    echo "ERROR" . mysqli_connect_error();
}

function getPrisijungimas(){
    global $prisijungimas;
    return $prisijungimas;
}

getPrisijungimas();

function getDoctor($nr){
// $query
$manoSQL = "SELECT * FROM doctors  WHERE id=$nr ";
// $rezultatai - mysql`o objektas
$rezultatai = mysqli_query(getPrisijungimas(), $manoSQL );// print_r( $rezultatai ); //test
$rezultataiArray = mysqli_fetch_assoc($rezultatai); // print_r( $rezultataiArray );
return $rezultataiArray;
}

// $gydytojas2 = getDoctor(2);
// print_r($gydytojas2);
// $gydytojas1 = getDoctor(1);
// print_r($gydytojas1);
// $gydytojas3 = getDoctor(3);
// print_r($gydytojas3);
// $gydytojas4 = getDoctor(4);
// print_r($gydytojas4);


 ?>
