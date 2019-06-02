<?php

require_once('config.php');
// include_once('config.php');
// include('config.php');


//prisijungimas
$prisijungimas = mysqli_connect(DB_HOST,MYSQL_USERNAME,MYSQL_PASSWORD,DB_NAME);
//kad lietuviskos ir rusiskos raides veiktu
mysqli_set_charset($prisijungimas,'utf8mb4');


//ar if veikia
if ($prisijungimas) {
    echo "Prisijungete prie DB! <br />";
} else {
    echo "ERRO: prie db nepavyko!!!".mysqli_connect_error();
}

function getprisijungimas(){
    global $prisijungimas;
    return $prisijungimas;
}

getprisijungimas();


//query
// $manoSQL = "SELECT * FROM doctors WHERE id=$nr";



function getDoctor($nr){
    $manoSQL = "SELECT * FROM doctors WHERE id=$nr";
    //$rezultatai-mysql'o objektas
    $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
    // print_r( $rezultatai );
    $rezultataiArray=mysqli_fetch_assoc($rezultataiOBJ);
    // print_r( $rezultataiArray );
    return $rezultataiArray;
}


//
// $gydytojas2 = getDoctor(2);
// print_r($gydytojas2);
// $gydytojas3 = getDoctor(3);
// print_r($gydytojas3);



// function getPatient($nr){
//     $manoSQL = "SELECT * FROM patients WHERE id=$nr";
//     //$rezultatai-mysql'o objektas
//     $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
//     // print_r( $rezultatai );
//     $rezultataiArray=mysqli_fetch_array($rezultataiOBJ);
//     print_r( $rezultataiArray );
//
//
// }
//
// $pacientas2 = getPatient(2);
// $pacientas4 = getPatient(4);



 ?>
