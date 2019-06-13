<?php
include_once('db_functions.php');
$prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
mysqli_set_charset($prisijungimas, 'utf8mb4');
$nr = $_GET['id'];
if (!empty($_FILES["fileToUpload"]["name"])) {
upload();
$img_name = $_FILES["fileToUpload"]["name"];
$manoSQLimg = "UPDATE karusele SET nuotrauka = '$img_name' WHERE id = $nr";
$rezultataiIMG = mysqli_query($prisijungimas,  $manoSQLimg);
}
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    mysqli_set_charset($prisijungimas, 'utf8mb4');
    $tekstash3 = $_POST['tekstash3'];
    $tekstash4 = $_POST['tekstash4'];
    $nuotrauka = $_POST['nuotrauka'];
    $manoSQL = "UPDATE karusele SET tekstash3 = '$tekstash3', tekstash4 = '$tekstash4' WHERE id = $nr";
    $rezultatai = mysqli_query($prisijungimas,  $manoSQL);
    echo "<script type='text/javascript'>history.go(-3)</script>";

?>
