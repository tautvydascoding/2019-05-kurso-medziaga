<?php




class Doctors {
    public $prisijungimas = '';

        function prisijungti() {
        require_once('nustatymai.php');
        $this->prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );
        if( !$this->$prisijungimas )   {
            echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
        }
    }

    function getDoctor( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM doctors  WHERE id='$nr'   ";
        // $rezultatai - mysql'o objektas
        $rezultataiOBJ = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        return $rezultataiArray;
    }


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

function deleteDoctor($nr) {
    $manoSQL = "DELETE FROM doctors WHERE id=$nr LIMIT 1";

    $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko istrinti gydytojo. SQL klaida:" . mysqli_error(getPrisijungtimas());
    }
}

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
    }
}

function getDoctors($kiekGydytoju = 99999) {
    $manoSQL = "SELECT * FROM doctors LIMIT  $kiekGydytoju   ";
    $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test

    if ( !$rezultatai) {
        echo "ERROR: Neradome gydytoju. SQL klaida:" . mysqli_error(getPrisijungtimas());
        return null;
    } else {
        return $rezultatai;
    }
}
}
