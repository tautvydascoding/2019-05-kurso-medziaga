<?php
require_once('config.php');
//include_once('config.php');
//include('config.php');


//prisijungimas
$prisijungimas = mysqli_connect( DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME );

    if( $prisijungimas ) {
      echo "Prisijungete sekmingai!";
  }  else {
      echo "ERROR: prisijungti prie DB nepavyko!!!" . mysqli_connect_error();
}
  function getPrisijungimas(){
    global $prisijungimas;
    return $prisijungimas;
  }
  getPrisijungimas();

  function get_Doctor($nr){

    $manoSQL = "SELECT * FROM doctors WHERE id=2 ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
    print_r ($rezultataiArray);
    return $rezultataiArray;


  }

  //$query

  $gydytojas2 = get_Doctor( 2 );
  print_r($gydytojas2);
  $gydytojas3 = get_Doctor( 3 );
  print_r($gydytojas3);

 ?>
