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

    // $gydytojas2 = getDoctor( 2 );
    // print_r($gydytojas2); // test
    // $gydytojas3 = getDoctor( 3 );
    // print_r($gydytojas3); // test
    // $gydytojas1 = getDoctor( 1 );
    // $gydytojas4 = getDoctor( 4 );

    //
    // UZDUOTIS
    // 1. papildyti faila:  db_functions.php
    // 3. suprogramuoti f-jas:
    // 4. getDoctor($nr)
    // 5. createDoctor($vardas, $pavarde)

    function createDoctor($vardas, $pavarde){
      $manoSQL = "INSERT INTO doctors
                  VALUES (null, '$vardas', '$pavarde')"
      $rezultatai = mysqli_query(getPrisijungtimas(), $manoSQL);
      if (!$rezultatai){
        echo "ERROR: nepavyko sukurti gydytojo.SQL klaida:" .mysqli_connect_error();

      } else {
        echo "Gydytojas Ok";
      }

}
    // createDoctor("Karolina", "Karalaite");

    // 6. deleteDoctor($nr)

    function deleteDoctor($nr){
      $manoSQL = "DELETE FROM doctors WHERE id=1";
      $rezultatai = mysqli_query(getPrisijungtimas(), $manoSQL);
      if (!$rezultatai){
        echo "ERROR: nepavyko istrinti gydytojo.SQL klaida:" .mysqli_connect_error();

    } else {
      // echo
    }
    deleteDoctor(7);

    // 7. updateDoctor($nr, $vardas, $pavarde)

    function updateDoctor($nr, $vardas, $pavarde){
        $manoSQL = "UPDATE doctors SET
                                  name= $vardas,
                                  lname= $pavarde
                                   WHERE ID = $nr
                    ;"
      $rezultatai = mysqli_query(getPrisijungtimas(), $manoSQL);
      if (!$rezultatai){
        echo "ERROR: nepavyko istrinti gydytojo.SQL klaida:" .mysqli_connect_error();

        } else {
                    // echo
        }              
    }

    // 8. getDoctors($kiekGydytoju=99999)



    // susikurti nauja prjekta ir issivesti daktara is DB naudojant getDoctors() f-ja su while ar foreach

 ?>
