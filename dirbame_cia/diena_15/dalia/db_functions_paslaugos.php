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

    function createPaslauga( $paslauga, $trukme, $masazistas, $kaina) {
        $paslaugaUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $paslauga );
        $trukmeUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $trukme );
        $masazistasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $masazistas );
        $kainaUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $kaina );

        $manoSQL = "INSERT INTO  paslaugos
                        VALUES( null, '$paslaugaUzkoduota', '$trukmeUzkoduota', '$masazistasUzkoduotas', '$kainaUzkoduota' ) ";
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

    function    updatePaslauga($nr,$paslauga, $trukme, $masazistas, $kaina) {
        $nrUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $nr );
        $paslaugaUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $paslauga );
        $trukmeUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $trukme );
        $masazistasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $masazistas );
        $kainaUzkoduota = mysqli_real_escape_string (getPrisijungtimas(), $kaina );

        $manoSQL = "UPDATE paslaugos SET
                                        paslauga = '$paslaugaUzkoduota',
                                        trukme = '$trukmeUzkoduota',
                                        masazistas_nr = '$masazistasUzkoduotas',
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

$paslaugosOBJ = getPaslaugos(4  );  // paimk 4 pirma paslaugas
print_r( $paslaugosOBJ ); // test

// ar radome paslaugu DB-je?
if (mysqli_num_rows($paslaugosOBJ) > 0) {
    $vienaPaslArray = mysqli_fetch_assoc($paslaugosOBJ);     // mysqli_fetch_assoc - paima viena eilue is OBJ ir pavercia i array
    while ($vienaPaslArray == true) {

        echo "<h2>". $vienaPaslArray['paslauga'] ."</h2>";
        $vienaPaslArray = mysqli_fetch_assoc($paslaugosOBJ);     // mysqli_fetch_assoc - paima viena (SEKANCIA) eilue is OBJ ir pavercia i array
    }
} else {
    echo "PASLAUGU NERADOME <br />";
}
?>
