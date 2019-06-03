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


// ----------------trinti--------------

function deleteDoctor( $nr) {
$manoSQL = "DELETE FROM doctors
            WHERE id=$nr";
$rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
if (!$rezultatai){
echo  "ERROR. Nepavyko istrinti. SQL klaida:" . mysqli_error(getPrisijungtimas());
}
}

deleteDoctor(6);

// ----------------trinti--------------


function updateDoctor($nr, $vardas, $pavarde){
  $manoSQL = "UPDATE doctors SET
                                name =  '$vardas',
                                lname = '$pavarde'
                              WHERE id = '$nr'
                              LIMIT 2;";

  $rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
  if (!$rezultatai){
  echo  "ERROR. Nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungimas());
  }
}

updateDoctor(1, 'Ledas', 'Pakeistas');




// ----------------visa lentele spaust--------------

function getDoctors( $kiekis = 99 ) {
$manoSQL = "SELECT * FROM doctors LIMIT '$kiekis' ;";
$rezultatai = mysqli_query(getPrisijungtimas(),  $manoSQL);
return $rezultatai;
}

$gydytojai = getDoctors(4);

 ?>
