<?php

    require_once('nustatymai.php');
    // include_once('nustatymai.php');
    // include('nustatymai.php');

    //PRISIJUNGIMAS
    $prisijungimas =  mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME );

    if( $prisijungimas ) {
        echo "Prisijungete sekmingai! <br />";
    } else {
        echo "ERROR: prisijungti prie DB nepavyko !!!" . mysqli_connect_error();
    }



 ?>
