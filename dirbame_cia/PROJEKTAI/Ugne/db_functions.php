<?php

    require_once('config.php');

    //--------------PRISIJUNTIMAS-----------------------

    $loginDB = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);

    if( !$loginDB )   {
        echo "ERROR:  prisijungti prie DB nepavyko!!!" . mysqli_connect_error();
    }


    function getLoginDB() {
        global $loginDB;
        return $loginDB;
    }

  //--------------GET ITEM (GAUTI PRODUKTA) FUNKCIJA-----------------------

    function getItem($nr) {
        $query = "SELECT * FROM items WHERE id='$nr' ";
        $rezult = mysqli_query(getLoginDB(),  $query);
        $resultArray = mysqli_fetch_assoc($rezult);
        return $resultArray;
    }

    //--------------GET MENU FUNKCIJA-----------------------

    function getMenu($nr) {
        $query = "SELECT * FROM navigation WHERE id='$nr' ";
        $rezult = mysqli_query(getLoginDB(),  $query);
        $resultArray = mysqli_fetch_assoc($rezult);
        return $resultArray;
    }

    //--------------GET IMG FUNKCIJA SKIRTA CAROUSEL------------------

    function getImg($nr) {
        $query = "SELECT * FROM carousel WHERE id='$nr' ";
        $result = mysqli_query(getLoginDB(),  $query);
        $result = mysqli_fetch_assoc($result);
        return $result;
    }

      //--------------createMessage funkcija kontaktu formai--------------

      function createMessage( $name, $email, $message) {
          $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
          $emailCrypted = mysqli_real_escape_string (getLoginDB(), $email );
          $messageCrypted = mysqli_real_escape_string (getLoginDB(), $message );

          $query = "INSERT INTO  contactform
                          VALUES( null, '$nameCrypted', '$emailCrypted', '$messageCrypted') ";

          $result = mysqli_query(getLoginDB(),  $query);
          if ( !$result) {
              echo "Something went wrong! Your message was not sent." . mysqli_error(getLoginDB());
          } else {
              echo "Your message was successfully sent!";
          }
      }

 ?>
