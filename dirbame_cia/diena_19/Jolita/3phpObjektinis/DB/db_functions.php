<?php
require_once('nustatymai.php');

class DuomenuBaze {
    public $prisijungimas = "";

function prisijungti() {
    $this->prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );
    mysqli_set_charset($this->getPrisijungtimas(), 'utf8mb4');
    if( !$this->prisijungimas )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
    }
    function $this->getPrisijungtimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
    $this->getPrisijungtimas();

}
}
