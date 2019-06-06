<?php

class Db_prisijungimas
{
    public = $prisijungimas = '';

        function prisijungti() {
        require_once('nustatymai.php');
        $this->prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );
        // ! - AR FALSE?
        if( !$this->$prisijungimas )   {
            echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
        }
    }
}


?>
