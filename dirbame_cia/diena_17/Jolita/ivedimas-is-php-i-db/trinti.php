<?php
if ($_SESSION["Prisijunges"] === true && $_SESSION["vartotojas"] = 'admin' || $_SESSION["vartotojas"] = 'moderator') {
    include ('db_functions.php');
    session_start();
        //print_r( $_GET );

    deleteDoctor($_GET['nr']);

}

 ?>
