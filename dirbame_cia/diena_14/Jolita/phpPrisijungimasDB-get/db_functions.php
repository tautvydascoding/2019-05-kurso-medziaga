<?php
require_once('config.php');
//include_once('config.php');
//include('config.php');

$prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);

if (!$prisijungimas) {
    echo "error".mysqli_connect_error();
}
function getPrisijungimas()
{
    global $prisijungimas;
    return $prisijungimas;
}
getPrisijungimas(); //si funkcija grazins kai reikes prisijungimus prie db

function getDoctor($nr) {
$manoSQL = "SELECT * FROM doctors WHERE id='$nr'"; //sql deti kabutes
$rezultataiOBJEKTAS = mysqli_query(getPrisijungimas(), $manoSQL);
$rezultataiMASYVAS = mysqli_fetch_assoc($rezultataiOBJEKTAS);
return $rezultataiMASYVAS;
}



 ?>
