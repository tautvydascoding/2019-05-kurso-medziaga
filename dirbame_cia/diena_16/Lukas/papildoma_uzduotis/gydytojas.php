<?php
include("db_functions.php");
  // test
// $gydytojas = getDoctor($_GET)


// $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);      // print_r(    $rezultataiArray );  // test
// // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
// $daktaras = getDoctor($x);
// echo "Daktaras: ". $daktaras['name'] . " " . $daktaras['lname'] . "<hr />";
// echo "Paciento vardas: " . $rezultataiArray['name'] . "<br /> Paciento pavardė: " . $rezultataiArray['lname'];

// function getDaktarai($kiekGydytoju = 99999) {
//     $manoSQL = "SELECT * FROM doctors LIMIT $kiekGydytoju";
//     $rezultatai = mysqli_query(getPrisijungtimas(), $manoSQL);
//     if ( !$rezultatai ) {
//          // '(! )' JEIGU skliaustuose FALSE?
//          echo "ERROR: nepavyko uzregistruoti gydytojo." . mysqli_error( getPrisijungtimas() );
//     } else {
//         return $rezultatai;
//     }
// }

// print_r($gydytojaiOBJ);

    $x = $_GET['id'];
    $pacientai = getDoctorPatientsNames($x);
// ar apskritai yra gydytoju duomenu bazeje
if (mysqli_num_rows($pacientai) > 0) {
    $x = $_GET['id'];
    $manoSQL = "SELECT patients.name, patients.lname
    FROM patients join doctors
    ON   doctors.id = patients.doctor_id
    WHERE patients.doctor_id = $x";
    $rezultataiOBJ = $manoSQL;
    $rezultataiOBJ = mysqli_query(getPrisijungtimas(),  $manoSQL);
    $rezArray = mysqli_fetch_assoc($rezultataiOBJ);
    echo "Daktaras: " . getDoctor($x)['name'] . " " . getDoctor($x)['lname'] . "<hr />";
    while ($rezArray){
        echo "Paciento vardas: " . $rezArray['name'] . "<br />" . " Paciento pavardė: " . $rezArray['lname'];
        $rezArray = mysqli_fetch_assoc($rezultataiOBJ);// pakartojus x2 atspausdins antra, pakartojus x3 trecia
    }
} else {
    echo "Atsiprašome, bet šiuo metu ieškomos prekės neturime.";
}

?>
