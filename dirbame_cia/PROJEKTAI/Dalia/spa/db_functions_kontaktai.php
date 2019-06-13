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
    function getContact( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM kontaktai  WHERE id='$nr'   ";
        // $rezultatai - mysql'o objektas
        $rezultataiOBJ = mysqli_query(getPrisijungtimas(),  $manoSQL);
        // print_r (    $rezultataiOBJ );  // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     //
        // print_r(    $rezultataiArray );  // test
        $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     //
        print_r(    $rezultataiArray );  // test
        return $rezultataiArray;
    }

    function createContact( $pav, $kodas, $miestas, $gatve, $tel) {
        $pavUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $pav );
        $kodasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $kodas );
        $miestasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $miestas );
        $gatveUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $gatve );
        $telUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $tel );

        $manoSQL = "INSERT INTO  kontaktai
                        VALUES( null, '$pavUzkoduotas', '$kodasUzkoduotas', '$miestasUzkoduotas', '$gatveUzkoduota', '$telUzkoduotas' ) ";
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); //
        //print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko sukurti kontakto. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {
             echo "Kontaktas sukurtas!";
        }
    }

    //createContact("kita UAB", "123456789", "Vilnius", "Seniavos pl. 8", 861431258);

    function deleteContact($nr) {
        $manoSQL = "DELETE FROM kontaktai WHERE id=$nr LIMIT 1";

        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko istrinti kontakto. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {

        }
    }
      //deleteContact(1); // test

    function    updateContact($nr, $pav, $kodas, $miestas, $gatve, $tel) {
        $nrUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $nr );
        $pavUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $pav );
        $kodasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $kodas );
        $miestasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $miestas );
        $gatveUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $gatve );
        $telUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $tel );

        $manoSQL = "UPDATE kontaktai SET
                                        pav = '$pavUzkoduotas',
                                        kodas = '$kodasUzkoduotas',
                                        miestas = '$miestasUzkoduotas',
                                        gatve = '$gatveUzkoduota',
                                        tel = '$telUzkoduotas'
                                    WHERE id = '$nrUzkoduotas'
                                    LIMIT 1
                  ";
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); //
        //print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {
             echo "Kontaktas uzregistruotas!";
        }
    }
    //test
    //updateContact(1, "Bitute spa", "13456", "Akmene", "Gelyciu 12", "87654345");

    // 8. getPaslaugos($kiekPaslaugu=99999)
function getContacts($kiekKontaktu = 99999) {
    $manoSQL = "SELECT * FROM kontaktai LIMIT  $kiekKontaktu  ";
    $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
    //print_r(    $rezultataiOBJ );  // test

    if ( !$rezultatai) {
        echo "ERROR: Neradome kontaktu. SQL klaida:" . mysqli_error(getPrisijungtimas());
        return null;
    } else {

        return $rezultatai; // graziname MYSQL OBJEKTA
    }
}


?>
