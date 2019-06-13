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
    function getSpecialst( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM masazistai  WHERE id='$nr'   ";
        // $rezultatai - mysql'o objektas
        $rezultataiOBJ = mysqli_query(getPrisijungtimas(),  $manoSQL);
        // print_r (    $rezultataiOBJ );  // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     //
        // print_r(    $rezultataiArray );  // test
        $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     //
        print_r(    $rezultataiArray );  // test
        return $rezultataiArray;
    }

    function createSpecialist( $vardas, $pavarde, $tel) {
        $vardasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $vardas );
        $pavardeUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $pavarde );
        $telUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $tel );

        $manoSQL = "INSERT INTO  masazistai
                        VALUES( null, '$vardasUzkoduotas', '$pavardeUzkoduota', '$telUzkoduotas' ) ";
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); //
        //print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko sukurti specialisto. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {
             echo "Specialistas sukurtas!";
        }
    }

    //createSpecialist("Jonas", "Jonaitis", "123456789");

    function deleteSpecialist($nr) {
        $manoSQL = "DELETE FROM masazistai WHERE id=$nr LIMIT 1";

        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko istrinti specialoisto. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {

        }
    }
      deleteSpecialist(3); // test

    function    updateSpecialist($nr, $vardas, $pavarde, $tel) {
        $nrUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $nr );
        $vardasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $vardas );
        $pavardeUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $pavarde );
        $telUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $tel );

        $manoSQL = "UPDATE masazistai SET
                                        vardas = '$vardasUzkoduotas',
                                        pavarde = '$pavardeUzkoduota',
                                        tel = '$telUzkoduotas'
                                    WHERE id = '$nrUzkoduotas'
                                    LIMIT 1
                  ";
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); //
        //print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {
             echo "Specialistas uzregistruotas!";
        }
    }
    //test
    //updateSpecialist(2, "Jurga", "Brazauskaite", "23333");

    // 8. getPaslaugos($kiekPaslaugu=99999)
function getSpecialists($kiekSpecialistu = 99999) {
    $manoSQL = "SELECT * FROM masazistai LIMIT  $kiekSpecialistu  ";
    $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
    //print_r(    $rezultataiOBJ );  // test

    if ( !$rezultatai) {
        echo "ERROR: Neradome specialistu. SQL klaida:" . mysqli_error(getPrisijungtimas());
        return null;
    } else {

        return $rezultatai; // graziname MYSQL OBJEKTA
    }
}


?>
