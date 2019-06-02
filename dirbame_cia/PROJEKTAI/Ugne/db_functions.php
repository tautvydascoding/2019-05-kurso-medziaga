<?php

    require_once('config.php');

    //PRISIJUNTIMAS

    $loginDB = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);

    // ---------------------- tikrinam prisijungima
    if( !$loginDB )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
    }

    // ---------------------- prisijungimo kintamasis
    function getLoginDB() {
        global $loginDB;
        return $loginDB;
    }



    function getItem($nr) {
        $query = "SELECT * FROM items WHERE id='$nr' ";
        $rezult = mysqli_query(getLoginDB(),  $query);
        $resultArray = mysqli_fetch_assoc($rezult);
        return $resultArray;
    }

 ?>
