<?php

    require_once('nustatymai.php');
    // include_once('nustatymai.php');
    // include('nustatymai.php');

    class DuomenuBaze{
    public $prisijungimas ='';

    //PRISIJUNTIMAS
    function prisijungti(){
    $prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );
    //a kad MYSQL nesugadintu LT kalbos saugomos DB-je
    mysqli_set_charset(getPrisijungimas(), 'utf8mb4');

    // ! - AR FALSE?
    if( !$this->$prisijungimas )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
    }
    public function getPrisijungimas() {
        return $this->prisijungimas;
    }
  }
  }
