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
    $nrUzkoduotas = mysqli_real_escape_string(getPrisijungtimas(), $nr);
    $manoSQL = "SELECT * FROM doctors  WHERE id='$nrUzkoduotas'   ";
    // $rezultatai - mysql'o objektas
    $rezultataiOBJ = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     // objekta pavercia masyvu
    // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
    return $rezultataiArray;
}
// 5. createDoctor($vardas, $pavarde)

function createDoctor($name, $lname) {
    $nameUzkoduotas = mysqli_real_escape_string(getPrisijungtimas(), $name);
    $lnameUzkoduotas = mysqli_real_escape_string(getPrisijungtimas(), $lname);

    $manoSQL = "INSERT INTO doctors
    VALUES (null, '$nameUzkoduotas', '$lnameUzkoduotas')";
    $rezult = mysqli_query(getPrisijungtimas(),  $manoSQL);
    if (!$rezult) {
        echo "ERROR: nepavyko sukurti gydytojo". mysqli_errors(getPrisijungtimas());
    }
}

//createDoctor ("Antanas", "Oho"); testavimas
// 6. deleteDoctor($nr)
function deleteDoctor($nr) {
    $nrUzkoduotas = mysqli_real_escape_string(getPrisijungtimas(), $nr);
    $manoSQL = "DELETE FROM doctors WHERE id=$nrUzkoduotas";
    $rezult = mysqli_query(getPrisijungtimas(),  $manoSQL);
    if (!$rezult) {
        echo "ERROR: nepavyko istrinti". mysqli_errors(getPrisijungtimas());
    }

}
//deleteDoctor(1); testavimas
// 7. updateDoctor($nr, $vardas, $pavarde)

function updateDoctor($nr, $name, $lname) {
    $nrUzkoduotas = mysqli_real_escape_string(getPrisijungtimas(), $nr);
    $nameUzkoduotas = mysqli_real_escape_string(getPrisijungtimas(), $name);
    $lnameUzkoduotas = mysqli_real_escape_string(getPrisijungtimas(), $lname);

    $manoSQL = "UPDATE doctors
                SET name = '$nameUzkoduotas',
                    lname = '$lnameUzkoduotas'
                WHERE id = '$nrUzkoduotas'
                LIMIT 1    ";

    $rezult = mysqli_query(getPrisijungtimas(),  $manoSQL);
    if (!$rezult) {
        echo "ERROR: nepavyko pakeisti gydytojo duomenu". mysqli_errors(getPrisijungtimas());
    }
}
//updateDoctor( 3, "Zita", "Liniene");

//getDoctors($kiekGydytoju=99999)
function getDoctors($kiekGydytoju = 99999 ) {
$manoSQL = "SELECT * FROM doctors LIMIT $kiekGydytoju";
$rezult = mysqli_query(getPrisijungtimas(),  $manoSQL);
if (!$rezult) {
    echo "ERROR: nepavyko pakeisti gydytojo duomenu". mysqli_errors(getPrisijungtimas());
} else {
    return $rezult; //graziname MSQL objekta masyva

}

}

?>
