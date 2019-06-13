<?php
include_once('db_functions.php');
$prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
mysqli_set_charset($prisijungimas, 'utf8mb4');
$nr = $_GET['id'];
if (!empty($_FILES["fileToUpload"]["name"])) {
upload();
$img_name = $_FILES["fileToUpload"]["name"];
$manoSQLimg = "UPDATE mergaiciu_prekes SET img_name = '$img_name' WHERE id = $nr";
$rezultataiIMG = mysqli_query($prisijungimas,  $manoSQLimg);
}
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    mysqli_set_charset($prisijungimas, 'utf8mb4');
    $pavadinimas = $_POST['pavadinimas'];
    $t_aprasymas = $_POST['t_aprasymas'];
    $aprasymas = $_POST['aprasymas'];
    $kaina = $_POST['kaina'];
    $manoSQL = "UPDATE mergaiciu_prekes SET pavadinimas = '$pavadinimas', trumpas_aprasymas = '$t_aprasymas', aprasymas = '$aprasymas', kaina = '$kaina' WHERE id = $nr";
    $rezultatai = mysqli_query($prisijungimas,  $manoSQL);
    echo "<script type='text/javascript'>history.go(-2)</script>";

?>
