<?php

require_once('nustatymai.php');
$prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );
//a kad MYSQL nesugadintu LT kalbos saugomos DB-je
mysqli_set_charset(getPrisijungtimas(), 'utf8mb4');
if( !$prisijungimas )   {
    echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
}
function getPrisijungtimas() {
    global $prisijungimas;
    return $prisijungimas;
}
getPrisijungtimas();

/*
    $nr - id duomenu bazeje (paslaugos)
    return - array
*/
    function getService( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM paslaugos  WHERE id='$nr'   ";
        // $rezultatai - mysql'o objektas
        $rezultataiOBJ = mysqli_query(getPrisijungtimas(),  $manoSQL); //print_r (    $rezultataiOBJ );  // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        return $rezultataiArray;
    }

    function createPaslauga( $paslauga, $trukme, $kaina) {
        $paslaugaUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $paslauga );
        $trukmeUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $trukme );
        $kainaUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $kaina );

        $manoSQL = "INSERT INTO  paslaugos
                        VALUES( null, '$paslaugaUzkoduota', '$trukmeUzkoduota', '$kainaUzkoduota' ) ";
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko sukurti paslaugos. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {
             echo "Paslauga sukurta!";
        }
    }

    //createPaslauga("Masažas", "60", "1", "90");

    function deletePaslauga($nr) {
        $manoSQL = "DELETE FROM paslaugos WHERE id=$nr LIMIT 1";

        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko istrinti paslaugos. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {

        }
    }
      //deletePaslauga(1); // test

    function    updatePaslauga($nr,$paslauga, $trukme, $kaina) {
        $nrUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $nr );
        $paslaugaUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $paslauga );
        $trukmeUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $trukme );
        $kainaUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $kaina );

        $manoSQL = "UPDATE paslaugos SET
                                        paslauga = '$paslaugaUzkoduota',
                                        trukme = '$trukmeUzkoduota',
                                        kaina = '$kainaUzkoduota'
                                    WHERE id = '$nrUzkoduotas'
                                    LIMIT 1
                  ";
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {
             echo "Paslauga uzregistruota!";
        }
    }
    // test
    //updatePaslauga(9, "Dar masazas", "39", "2", "67");

    // 8. getPaslaugos($kiekPaslaugu=99999)
function getPaslaugos($kiekPaslaugu = 99999) {
    $manoSQL = "SELECT * FROM paslaugos LIMIT  $kiekPaslaugu  ";
    $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
    //print_r(    $rezultataiOBJ );  // test

    if ( !$rezultatai) {
        echo "ERROR: Neradome paslaugu. SQL klaida:" . mysqli_error(getPrisijungtimas());
        return null;
    } else {

        return $rezultatai; // graziname MYSQL OBJEKTA
    }
}


?>
