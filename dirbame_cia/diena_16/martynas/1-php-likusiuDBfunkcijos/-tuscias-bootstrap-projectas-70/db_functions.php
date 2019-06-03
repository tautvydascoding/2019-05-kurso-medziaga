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


    // UZDUOTIS
    // 1. papildyti faila:  db_functions.php
    // 3. suprogramuoti f-jas:
    // 4. getDoctor($nr)
    // 5. createDoctor($vardas, $pavarde)


// sitas funkcija isideti i contact skilti

    function createDoctor($vardas, $pavarde){

        $vardasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $vardas);
        $pavardeUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $pavarde);
        $manoSQL= "INSERT INTO doctors
        values (null, '$vardas', '$pavarde')";
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
        if (!$rezultatai) {
            echo "ERROR: nepavyko sukurti gydytojo" . mysqli_error(getPrisijungtimas());
        } else {
            // code...
        }

    }
    // createDoctor('Karolina','Karlota');
    // createDoctor('Karolis',"Karlotas");
    // createDoctor('Lina',"Lietuvaite");



    // 6. deleteDoctor($nr)
    function deleteDoctor($nr){
        $manoSQL="DELETE FROM doctors WHERE id=$nr";
        // $idUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $nr);
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
        if (!$rezultatai) {
            echo "ERROR: nepavyko istrinti gydytojo" . mysqli_error(getPrisijungtimas());
        } else {
            echo "pavyko istrinti";
        }

    }

    // deleteDoctor(10);

    // 7. updateDoctor($nr, $vardas, $pavarde)

    function updateDoctor($nr, $vardas, $pavarde){
        $nrUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $nr);
        $vardasUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $vardas);
        $pavardeUzkoduotas = mysqli_real_escape_string (getPrisijungtimas(), $pavarde);

        $manoSQL="UPDATE doctors SET
                                 name='$vardasUzkoduotas' ,
                                 lname='$pavardeUzkoduotas'
                                 WHERE id='$nrUzkoduotas'
                                 LIMIT 1;";
        $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
        if (!$rezultatai) {
            echo "ERROR: nepavyko updeitinti gydytojo" . mysqli_error(getPrisijungtimas());
        } else {
            echo "pavyko updeitinti";
        }
    }

    updateDoctor(7,"Jonas", "Jonaits");



    // 8. getDoctors($kiekGydytoju=99999)



    // susikurti nauja prjekta ir issivesti daktara is DB naudojant getDoctors() f-ja su while ar foreach



 ?>
