<?php
include_once('db_functions.php');
$prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
mysqli_set_charset($prisijungimas, 'utf8mb4');
if (!empty($_FILES["fileToUpload"]["name"])) {
upload();
$img_name = $_FILES["fileToUpload"]["name"];
$manoSQLimg = "UPDATE apie SET nuotrauka = '$img_name'";
$rezultataiIMG = mysqli_query($prisijungimas,  $manoSQLimg);
}
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    mysqli_set_charset($prisijungimas, 'utf8mb4');
    $pavadinimas = $_POST['pavadinimas'];
    $aprasymas = $_POST['aprasymas'];
    $manoSQL = "UPDATE apie SET pavadinimas = '$pavadinimas', aprasymas = '$aprasymas'";
    $rezultatai = mysqli_query($prisijungimas,  $manoSQL);
    echo "<script type='text/javascript'>history.go(-2)</script>";

?>
