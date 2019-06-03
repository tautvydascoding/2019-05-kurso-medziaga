<?php

    require_once('nustatymai.php');


    //PRISIJUNTIMAS
    $prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME);

    // kad lietuviskos ir ru veiktu
    mysqli_set_charset($prisijungimas, 'utf8mb4');


    if( !$prisijungimas )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
    }
    function getPrisijungtimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
    getPrisijungtimas();



// ----------------prideti i lentele--------------


        function createDoctor( $vardas, $pavarde ) {
        $manoSQL = "INSERT INTO doctors
                    VALUE (null, '$vardas', '$pavarde')";
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
        if (!$rezultatai){
        echo  "ERROR. Nepavyko sukurti. SQL klaida:" . mysqli_error(getPrisijungtimas());
      }
    }

    createDoctor("Ieva", "Gajau");

 ?>
