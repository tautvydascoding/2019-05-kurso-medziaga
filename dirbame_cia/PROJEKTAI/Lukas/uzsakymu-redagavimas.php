<?php
include_once('db_functions.php');

    $nr = $_GET['id'];
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    mysqli_set_charset($prisijungimas, 'utf8mb4');
    $prek_id  = $_POST['prek_id'];
    $prekes_pavadinimas = $_POST['prekes_pavadinimas'];
    $klien_vardas = $_POST['klien_vardas'];
    $klien_pavarde = $_POST['klien_pavarde'];
    $uzsakymo_laikas = $_POST['uzsakymo_laikas'];
    $manoSQL = "UPDATE uzsakymai SET prekes_pavadinimas = '$prekes_pavadinimas', klien_vardas = '$klien_vardas', klien_pavarde = '$klien_pavarde', uzsakymo_laikas = '$uzsakymo_laikas' WHERE OrderID = $nr";
    $rezultatai = mysqli_query($prisijungimas,  $manoSQL);
    echo "<script type='text/javascript'>history.go(-2)</script>";

?>
