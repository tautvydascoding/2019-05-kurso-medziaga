<?php

    require_once('config.php'); // ismes dideli errora, visiskai sustabdo puslapi. Grieztesnis uz include.
    //include_once('config.php'); // viena karta ideda, jeigu dar karta desi kazkur kitur, pvz footeri.
    //include('config.php'); // nukopijuos faila ir ji ides


    // PRISIJUNGIMAS
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);

    // ! reiskia ar false? sitas if tikrina ar prisijungem sekmingai
    if ( !$prisijungimas ) {
        echo "ERROR <br />" . mysqli_connect_error();
    } 
    function getPrisijungimas() {
        global $prisijungimas; // php funkcijos yra uzdaros, todel reikia naudoti global kad paimt kintamaji
        return $prisijungimas;
    }
    function getDoctor($nr) {
        //$query
        $manoSQL = "SELECT * FROM doctors WHERE id = $nr";
        // $rezultatai - mysqlo objektas (VISI FAILAI DUOMENU BAZEI SAUGOMI KAIP OBJEKTAI)
        $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL); // irodom, kad turim prisijungima prie mysqli
        // print_r($rezultataiOBJ); // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ); // assoc - konvertuoja i asociatyvu masyva, array i paprasta masyva, row i masyva su skaiciais vietoj table names.
        //  ir dar galima naudot field.
        // print_r($rezultataiArray); // atvaizduoja rezultata i ekrana.
        return $rezultataiArray;
    }
 ?>
