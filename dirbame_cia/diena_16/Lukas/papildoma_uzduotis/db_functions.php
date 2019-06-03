<?php

    require_once('nustatymai.php');
    // include_once('nustatymai.php');
    // include('nustatymai.php');

    //PRISIJUNTIMAS
    $prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );

    // kad lietuviskos ir ru veiktu
    mysqli_set_charset($prisijungimas, 'utf8mb4');

    // ! - AR FALSE?
    if( !$prisijungimas )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
    }
    function getPrisijungtimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
    getPrisijungtimas();

/*
    $nr - id duomenu bazeje (gydytojo)
    return - array
*/
    function getDoctor( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM doctors  WHERE id='$nr'   ";
        // $rezultatai - mysql'o objektas
        $rezultataiOBJ = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        return $rezultataiArray;
    }
    function getDoctorPatientsNames($x) {
        $manoSQL = "SELECT patients.name, patients.lname
        FROM patients join doctors
        ON   doctors.id = patients.doctor_id
        WHERE patients.doctor_id = $x";
        $rezultataiOBJ = mysqli_query(getPrisijungtimas(),  $manoSQL);
        return $rezultataiOBJ;
    }    // $gydytojas2 = getDoctor( 2 );
    // print_r($gydytojas2); // test
    // $gydytojas3 = getDoctor( 3 );
    // print_r($gydytojas3); // test
    // $gydytojas1 = getDoctor( 1 );
    // $gydytojas4 = getDoctor( 4 );


    // ----------------DELETE trinti--------------------
    // $nr - numeris arba id, gydytojo, kuri istrinsime
    function deleteDoctor( $nr ) {
        $mano_sql_tekstas = "DELETE FROM doctors
                                    WHERE id='$nr'
                                    LIMIT 1
                            ";
        mysqli_query(   getDBPrisiungimas()  , $mano_sql_tekstas);
    }
    // deleteDoctor( 7 );

    //
    function createDoctor($vardas, $pavarde){
        $vardas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $vardas );
        $pavarde_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $pavarde );

        $mano_sql_tekstas = "INSERT INTO doctors
                                    VALUES('', '$vardas_apdorotas', '$pavarde_apdorotas' );
                            ";
        $arPavyko = mysqli_query(   getDBPrisiungimas() , $mano_sql_tekstas);

        if ( !$arPavyko ) {
             // '(! )' JEIGU skliaustuose FALSE?
             echo "EROROR: nepavyko uzregistruoti gydytojo." . mysqli_error( getDBPrisiungimas() );
        } else {
            // echo "pavyko sukurti";
        }
    }
    // createDoctor('Faustas', 'Gete');

    function updateDoctor($nr, $vardas, $pavarde) {
        $vardas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $vardas );
        $pavarde_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $pavarde );

        $mano_sql_tekstas = " UPDATE doctors SET
                                name = '$vardas_apdorotas',
                                lname = '$pavarde_apdorotas'
                                WHERE id='$nr'
                                LIMIT 1;
                            ";
        $arPavyko = mysqli_query(   getDBPrisiungimas() , $mano_sql_tekstas);

        if ( !$arPavyko ) {
             // '(! )' JEIGU skliaustuose FALSE?
             echo "EROROR: nepavyko uzregistruoti gydytojo." . mysqli_error( getDBPrisiungimas() );
        } else {
            // echo "pavyko sukurti";
        }
    }
    // updateDoctor(3, 'Ona', 'Harkauskeine');


    function getDoctors($kiekis = 99999) {
        $mano_sql_tekstas = "SELECT * FROM doctors
                                      ORDER BY name DESC
                                      LIMIT $kiekis
                            ";
        // LIMIT 5 - limit skaiciai rasomi ne kabutese
        // ORDER BY - surikiuoja pabal stulpeli 'name'

        // $rezultatai - mysql objektas
        $rezultatai = mysqli_query( getDBPrisiungimas() , $mano_sql_tekstas);

        // tikrunu ar gryzo duomenu
        if ( $rezultatai ) {
             return $rezultatai; //  mysql objektas
        } else {
            return NULL; //
        }

    }

    // testuojam ar veikia
    // $gydytojai = getDoctors(   ); // skaicius - kiek gydytoju paimsime

    // $vienas_gydytojas = mysqli_fetch_assoc($gydytojai); // mysqli_fetch_assoc - paima sekanti gydytoja is mysql objekto IR sudajo jo stulpelius i ARRAY

    // tikrinu ar turiu gydytojo duomenis
    // while ( $vienas_gydytojas ) {
    //     echo " <h2>"  . $vienas_gydytojas['name'] . $vienas_gydytojas['lname'] . "</h2>";
    //
    //     // kad to pacio gydytojo neisvestu - vel ir vel - imam sekanti
    //     $vienas_gydytojas = mysqli_fetch_assoc($gydytojai); // mysqli_fetch_assoc - paima sekanti gydytoja is mysql objekto IR sudajo jo stulpelius i ARRAY
    // }


 ?>
