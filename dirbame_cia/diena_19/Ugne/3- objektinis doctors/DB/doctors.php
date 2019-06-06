<?php
require_once('nustatymai.php');
class Doctors{

  public $prisijungimas ='';

  //PRISIJUNTIMAS
  function prisijungti(){
  $prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );
  //a kad MYSQL nesugadintu LT kalbos saugomos DB-je
  mysqli_set_charset($this->getPrisijungimas(), 'utf8mb4');

  // ! - AR FALSE?
  if( !$this->$prisijungimas )   {
      echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
  }
}
  public function getPrisijungimas() {
      return $this->prisijungimas;

    }


function getDoctor( $nr ) {
    // $query
    $manoSQL = "SELECT * FROM doctors  WHERE id='$nr'   ";
    // $rezultatai - mysql'o objektas
    $rezultataiOBJ = mysqli_query($this-getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
    // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
    return $rezultataiArray;
}




}
