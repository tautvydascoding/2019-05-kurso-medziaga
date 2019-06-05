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


    function getDoctor( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM doctors  WHERE id='$nr'   ";
        $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        return $rezultataiArray;
    }



    // ----------------visa lentele spaust--------------

    function getDoctors( $kiekis = 99 ) {
              $manoSQL = "SELECT * FROM doctors LIMIT $kiekis ;";
              $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL);
            if (!$rezultatai){
              echo "ERROR";
            } else {
              return $rezultatai;
            }
    }


    function getPatients( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM patients  WHERE doctor_id ='$nr'   ";
        $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        return $rezultataiOBJ;
    }


// $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);







 ?>
