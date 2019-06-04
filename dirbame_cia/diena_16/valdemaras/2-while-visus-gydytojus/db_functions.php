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
    function getPrisijungimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
    getPrisijungimas();

/*
    $nr - id duomenu bazeje (gydytojo)
    return - array
*/
    function getDoctor( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM doctors  WHERE id='$nr'   ";
        // $rezultatai - mysql'o objektas
        $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        return $rezultataiArray;
    }

    // $gydytojas2 = getDoctor( 2 );
    // print_r($gydytojas2); // test
    // $gydytojas3 = getDoctor( 3 );
    // print_r($gydytojas3); // test
    // $gydytojas1 = getDoctor( 1 );
    // $gydytojas4 = getDoctor( 4 );

    //
    // 4. getDoctor($nr)
    // 5. createDoctor($vardas, $pavarde)
    function createDoctor($vardas, $pavarde) {
        $vardasUzkoduotas = mysqli_real_escape_string(getPrisijungimas(), $vardas );
        $pavardeUzkoduotas = mysqli_real_escape_string(getPrisijungimas(), $pavarde );

        $manoSQL = "INSERT INTO doctors
                        VALUES ( null, '$vardasUzkoduotas', '$pavardeUzkoduotas' )";
        $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
        if (!$rezultatai) {
            echo "ERROR: nepavyko sukurti gydytojo. SQL Klaida". mysqli_error(getPrisijungimas());
        } else {
            // echo "Gydytojas uzregistruotas";
        }
    }
    // createDoctor("Gedas", "Karlova");
    // createDoctor("Karolis", "Kukutis");
    // createDoctor("Lina", "Lietuvaite");


    // 6. deleteDoctor($nr)
function deleteDoctor($nr) {
    $manoSQL = "DELETE FROM doctors WHERE id=$nr LIMIT 1";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
    if (!$rezultatai) {
        echo "ERROR: nepavyko istrinti gydytojo. SQL Klaida". mysqli_error(getPrisijungimas());
    } else {
        // echo "Gydytojas uzregistruotas";
    }
}
// deleteDoctor(7);

// 7. updateDoctor($nr, $vardas, $pavarde)
function updateDoctor($nr, $vardas, $pavarde) {
    $nrUzkoduotas = mysqli_real_escape_string(getPrisijungimas(), $nr );
    $vardasUzkoduotas = mysqli_real_escape_string(getPrisijungimas(), $vardas );
    $pavardeUzkoduotas = mysqli_real_escape_string(getPrisijungimas(), $pavarde );

    $manoSQL = "UPDATE doctors SET
                                    name = '$vardasUzkoduotas',
                                    lname = '$pavardeUzkoduotas'
                                WHERE id = '$nrUzkoduotas'
                                LIMIT 1;
                ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
    if (!$rezultatai) {
        echo "ERROR: nepavyko pakeisti gydytojo duomenu. SQL Klaida". mysqli_error(getPrisijungimas());
    } else {
        // echo "Gydytojas uzregistruotas";
    }
}
// updateDoctor(11, "Gedas", "Gedauskas");

// 8. getDoctors($kiekGydytoju=99999)
function getDoctors($kiekGydytoju = 99999){
    $manoSQL = "SELECT * FROM doctors LIMIT $kiekGydytoju ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
    if (!$rezultatai) {
        echo "ERROR: nepavyko rast duomenu. SQL Klaida". mysqli_error(getPrisijungimas());
        return null;
    } else {
        return $rezultatai; //graziname MYSQL objekta
    }
}
// $gydytojaiOBJ = getDoctors(14);
// print_r($gydytojaiOBJ);
//
// // ar radome gydytoju DB-je
// if (mysqli_num_rows($gydytojaiOBJ) > 0) {
//     // mysqli_fetch_assoc - paiima viena eilute is DB ir pavercia i array
//     $vienasGydArray = mysqli_fetch_assoc($gydytojaiOBJ);
//     while ($vienasGydArray) {
//         echo "<h2>".  $vienasGydArray['name'] .' '. $vienasGydArray['lname']."</h2>";
//         $vienasGydArray = mysqli_fetch_assoc($gydytojaiOBJ);
//     }
// } else {
//     echo "Nei vieno GYDYTOJO . <br />";
// }
 ?>
