<?php

    require_once('nustatymai.php');
    // include_once('nustatymai.php');
    // include('nustatymai.php');

    //PRISIJUNTIMAS
    $prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );

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

    // $gydytojas2 = getDoctor( 2 );
    // print_r($gydytojas2); // test

    // $gydytojas3 = getDoctor( 3 );
    // print_r($gydytojas3); // test
    // $gydytojas1 = getDoctor( 1 );
    // $gydytojas4 = getDoctor( 4 );

    // 5. createDoctor($vardas, $pavarde)
function createDoctor( $vardas, $pavarde) {
    $vardasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $vardas );
    $pavardeUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $pavarde );

    $manoSQL = "INSERT INTO  doctors
                    VALUES( null, '$vardasUzkoduotas', '$pavardeUzkoduotas') ";
    $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko sukurti gydytojo. SQL klaida:" . mysqli_error(getPrisijungtimas());
    } else {
        // echo "Gydytojas uzregistruotas!";
    }
}
// createDoctor("Gedas", "Karlova");
// createDoctor("Karolis", "Kukutis");
// createDoctor("Lina", "Lietuvaite");
    // 6. deleteDoctor($nr)
function deleteDoctor($nr) {
    $manoSQL = "DELETE FROM doctors WHERE id=$nr LIMIT 1";

    $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko istrinti gydytojo. SQL klaida:" . mysqli_error(getPrisijungtimas());
    } else {
        // echo "Gydytojas uzregistruotas!";
    }
}
deleteDoctor(8);
    // 7. updateDoctor($nr, $vardas, $pavarde)
function    updateDoctor($nr, $vardas, $pavarde) {
    $nrUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $nr );
    $vardasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $vardas );
    $pavardeUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $pavarde );


    $manoSQL = "UPDATE doctors SET
                                    name = '$vardasUzkoduotas',
                                    lname = '$pavardeUzkoduotas'
                                WHERE id = '$nrUzkoduotas'
                                LIMIT 1
              ";
    $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungtimas());
    } else {
        // echo "Gydytojas uzregistruotas!";
    }
}
updateDoctor(6, "Jonas", "Jonaitis");

    // 8. getDoctors($kiekGydytoju=99999)

 ?>
