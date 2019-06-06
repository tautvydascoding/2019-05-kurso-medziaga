<?php



/**
 *
 */
class DuomenuBase{
    public $prisijungimas="";

    function prisijungti()
    {
        $this->prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );
        //a kad MYSQL nesugadintu LT kalbos saugomos DB-je
        mysqli_set_charset(getPrisijungtimas(), 'utf8mb4');
    }
    //PRISIJUNTIMAS


    // ! - AR FALSE?
    if( !$this->prisijungimas )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
    }
    public function getPrisijungtimas() {
        return $this->prisijungimas;
    }

}
