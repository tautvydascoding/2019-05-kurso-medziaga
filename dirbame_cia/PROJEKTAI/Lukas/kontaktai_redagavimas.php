<?php
include_once('db_functions.php');
$prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
mysqli_set_charset($prisijungimas, 'utf8mb4');
$gatve = $_POST['gatve'];
$namo_numeris = $_POST['namo_numeris'];
$pasto_kodas = $_POST['pasto_kodas'];
$miestas = $_POST['miestas'];
$mob_nr1 = $_POST['mob_nr1'];
$mob_nr2 = $_POST['mob_nr2'];
$pastas1 = $_POST['pastas1'];
$pastas2 = $_POST['pastas2'];
$manoSQL = "UPDATE kontaktai SET gatve = '$gatve', namo_numeris = '$namo_numeris', pasto_kodas = '$pasto_kodas', miestas = '$miestas', mob_nr1 = '$mob_nr1', mob_nr2 = '$mob_nr2', pastas1 = '$pastas1', pastas2 = '$pastas2'";
$rezultatai = mysqli_query($prisijungimas,  $manoSQL);
echo "<script type='text/javascript'>history.go(-2)</script>";

?>
