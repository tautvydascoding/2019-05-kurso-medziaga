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

    function getProduktas( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM aprasymaitrumpi  WHERE id='$nr'   ";
        // $rezultatai - mysql'o objektas
        $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        return $rezultataiArray;
    }


//     function getProduktai($kiekPrekiu = 99999){
//     $manoSQL = "SELECT * FROM aprasymaitrumpi LIMIT $kiekPrekiu ";
//     $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
//     if (!$rezultatai) {
//         echo "ERROR: nepavyko rast duomenu. SQL Klaida". mysqli_error(getPrisijungimas());
//         return null;
//     } else {
//         return $rezultatai; //graziname MYSQL objekta
//     }
// }
// Prekiu isvedimas is DB su trumpais aprasymais
function getProduktai($kiekPrekiu = 99999){
$manoSQL = "SELECT foto.pav, aprasymaitrumpi.pavadinimas, aprasymaitrumpi.aprasymas, aprasymaitrumpi.id
    FROM aprasymaitrumpi
    INNER JOIN foto
    ON  aprasymaitrumpi.id = foto.prekes_id
    LIMIT $kiekPrekiu ";
$rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
if (!$rezultatai) {
    echo "ERROR: nepavyko rast duomenu. SQL Klaida". mysqli_error(getPrisijungimas());
    return null;
} else {
    return $rezultatai; //graziname MYSQL objekta
}
}
// vienos prekes isvedimas is DB
function getPreke($sk){
$manoSQL = "SELECT foto.pav, aprasymaiGeri.pavadinimas, aprasymaiGeri.aprasymas, aprasymaiGeri.id
    FROM aprasymaiGeri
    INNER JOIN foto
    ON  aprasymaiGeri.id = foto.prekes_id
    WHERE id = '$sk'
     ";
$rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
if (!$rezultatai) {
    echo "ERROR: nepavyko rast duomenu. SQL Klaida". mysqli_error(getPrisijungimas());
    return null;
} else {
    return $rezultatai; //graziname MYSQL objekta
}
}
// visu prekiu isvedimas
function getPrekes($kiekPrekiu = 999){
$manoSQL = "SELECT foto.pav, aprasymaiGeri.pavadinimas, aprasymaiGeri.aprasymas, aprasymaiGeri.id
    FROM aprasymaiGeri
    INNER JOIN foto
    ON  aprasymaiGeri.id = foto.prekes_id
    LIMIT $kiekPrekiu
     ";
$rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
if (!$rezultatai) {
    echo "ERROR: nepavyko rast duomenu. SQL Klaida". mysqli_error(getPrisijungimas());
    return null;
} else {
    return $rezultatai; //graziname MYSQL objekta
}
}

// -------------------------ADMIN prekiu atvaizdavimas
function getvisosPrekes($kiekPrekiu = 999){
$manoSQL = "SELECT *
    FROM aprasymaiGeri
    -- WHERE id = $kiekPrekiu
    -- LIMIT $kiekPrekiu
     ";
$rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
// $rezultatai = mysqli_fetch_assoc($rezultatai);
if (!$rezultatai) {
    echo "ERROR: nepavyko rast duomenu. SQL Klaida". mysqli_error(getPrisijungimas());
    return null;
} else {
    return $rezultatai; //graziname MYSQL objekta
}
}
// ADMIN trumpi aprasymais
function getTrumpi($kiekPrekiu = 999){
$manoSQL = "SELECT *
    FROM aprasymaitrumpi
    -- WHERE id = $kiekPrekiu
    -- LIMIT $kiekPrekiu
     ";
$rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
if (!$rezultatai) {
    echo "ERROR: nepavyko rast duomenu. SQL Klaida". mysqli_error(getPrisijungimas());
    return null;
} else {
    return $rezultatai; //graziname MYSQL objekta
}
}

// Uzklausos issaugojimas DB
function createUzklausa( $vardas, $elPastas, $tema, $klausimas) {
    $vardasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $vardas );
    $elPastasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $elPastas );
    $temaUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $tema );
    $klausimasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $klausimas );

    $manoSQL = "INSERT INTO  uzklausos
                    VALUES( null, '$vardasUzkoduotas', '$elPastasUzkoduotas', '$temaUzkoduotas', '$klausimasUzkoduotas') ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko sukurti gydytojo. SQL klaida:" . mysqli_error(getPrisijungimas());
    } else {
        // echo "Gydytojas uzregistruotas!";
    }
}

// prekes sukurimas DB-eje
function createPreke( $pavadinimas, $aprasymas) {
    $pavadinimasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $pavadinimas );
    $aprasymasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $aprasymas );

    $manoSQL = "INSERT INTO  aprasymaiGeri
                    VALUES( null, '$pavadinimasUzkoduotas', '$aprasymasUzkoduotas') ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko sukurti prekes. SQL klaida:" . mysqli_error(getPrisijungimas());
    } else {

}
}
// prekes istrynimas //
function deletePreke($nr) {
    $manoSQL = "DELETE FROM aprasymaiGeri WHERE id=$nr LIMIT 1";

    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko istrinti. SQL klaida:" . mysqli_error(getPrisijungtimas());
    } else {
        // echo "Gydytojas uzregistruotas!";
    }
}
// prekes trumpo aprasymo istrynimas
function deleteTrumpi($nr) {
    $manoSQL = "DELETE FROM aprasymaitrumpi WHERE id=$nr LIMIT 1";

    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko istrinti. SQL klaida:" . mysqli_error(getPrisijungtimas());
    } else {
        // echo "Gydytojas uzregistruotas!";
    }
}

// prekes redagavimas
function    updatePreke($nr, $pavadinimas, $aprasymas) {
    $nrUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $nr );
    $pavadinimasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $pavadinimas );
    $aprasymasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $aprasymas );


    $manoSQL = "UPDATE aprasymaiGeri SET
                                    pavadinimas = '$pavadinimasUzkoduotas',
                                    aprasymas = '$aprasymasUzkoduotas'
                                WHERE id = '$nrUzkoduotas'
                                LIMIT 1
              ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungimas());
    } else {

    }
}

// trumpo aprasymo redagavimas
function    updateTrumpi($nr, $pavadinimas, $aprasymas) {
    $nrUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $nr );
    $pavadinimasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $pavadinimas );
    $aprasymasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $aprasymas );


    $manoSQL = "UPDATE aprasymaitrumpi SET
                                    pavadinimas = '$pavadinimasUzkoduotas',
                                    aprasymas = '$aprasymasUzkoduotas'
                                WHERE id = '$nrUzkoduotas'
                                LIMIT 1
              ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungimas());
    } else {

    }
}

function userCheck($user, $password){
    $userUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $user );
    $passwordUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $password );
    $manoSQL = "SELECT * FROM users WHERE user='$user' AND password='$password'
    ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
    $rezultatai = mysqli_fetch_assoc( $rezultatai);

    if (!$rezultatai) {
        header("Location: login.php");
    }
}

function paieska(){
    $search = $_POST['search'];
    $manoSQL = "SELECT * FROM aprasymaiGeri
                    WHERE aprasymas LIKE %$search%
    ";

    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
    // $rezultatai = mysqli_fetch_assoc( $rezultatai);
    return $rezultatai;
    {

    }
}
 ?>
