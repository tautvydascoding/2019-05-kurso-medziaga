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

    //--------------GET ITEMS (GAUTI PRODUKTUS) FUNKCIJA-----------------------

      function getItems($itemLimit = 50) {
          $query = "SELECT * FROM items LIMIT $itemLimit ";
          $result = mysqli_query(getLoginDB(),  $query);
          return $result;
      }

    //--------------GET MENU FUNKCIJA-----------------------

    function getHeader($id) {
        $query = "SELECT * FROM navigation WHERE id='$id' ";
        $rezult = mysqli_query(getLoginDB(),  $query);
        $resultArray = mysqli_fetch_assoc($rezult);
        return $resultArray;
    }

    function getMenu($itemLimit = 10) {
        $query = "SELECT * FROM navigation;";
        $result = mysqli_query(getLoginDB(),  $query);
        return $result;
    }

    //--------------GET IMG FUNKCIJA SKIRTA CAROUSEL------------------

    function getImg($nr) {
        $query = "SELECT * FROM carousel WHERE id='$nr' ";
        $result = mysqli_query(getLoginDB(),  $query);
        $result = mysqli_fetch_assoc($result);
        return $result;
    }

    //--------------GET images (GAUTI foto) FUNKCIJA-----------------------

      function getImages($itemLimit = 50) {
          $query = "SELECT * FROM carousel WHERE id > 1 LIMIT $itemLimit ";
          $result = mysqli_query(getLoginDB(),  $query);
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
          }
      }

        //--------------createItem funkcija naujam produktui kurti--------------


        function createItem( $name, $description, $price, $imgname, $thumbnail) {
            $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
            $descriptionCrypted = mysqli_real_escape_string (getLoginDB(), $description );
            $priceCrypted = mysqli_real_escape_string (getLoginDB(), $price );
            $imgnameCrypted = mysqli_real_escape_string (getLoginDB(), $imgname );
            $thumbnailCrypted = mysqli_real_escape_string (getLoginDB(), $thumbnail );

            $query = "INSERT INTO  items
                            VALUES( null, '$nameCrypted', '$descriptionCrypted', '$priceCrypted', '$imgnameCrypted', '$thumbnailCrypted') ";

            $result = mysqli_query(getLoginDB(),  $query);
            if ( !$result) {
                echo "Nepavyko sukurti naujos prekes" . mysqli_error(getLoginDB());
            }
        }

        //--------------deleteItem funkcija  produktui istrinti--------------

        function deleteItem($name, $price) {
            $query = "DELETE FROM items WHERE name = '$name' && price = '$price' LIMIT 1";

            $rezultatai = mysqli_query(getLoginDB(),  $query); // print_r(    $rezultataiOBJ );  // test
            if ( $rezultatai == false) {
                echo "ERROR: item not deleted. SQL error:" . mysqli_error(getLoginDB());
            }
        }

        //--------------updateItem funkcija  produktui istrinti--------------

        function updateItem( $id, $itemindex, $currentvalue, $newvalue) {
            $idCrypted = mysqli_real_escape_string (getLoginDB(), $id );
            $indexCrypted = mysqli_real_escape_string (getLoginDB(), $itemindex );
            $currentCrypted = mysqli_real_escape_string (getLoginDB(), $currentvalue );
            $newCrypted = mysqli_real_escape_string (getLoginDB(), $newvalue );


            $query = "UPDATE  items
                            SET $indexCrypted = '$newCrypted'
                            WHERE $indexCrypted = '$currentCrypted' && id = '$id'; ";

            $result = mysqli_query(getLoginDB(),  $query);
            if ( !$result) {
                echo "Nepavyko sukurti naujos prekes" . mysqli_error(getLoginDB());
            }
        }

        //--------------naujas carousel image--------------


        function createCarousel( $imgname) {
            $imgnameCrypted = mysqli_real_escape_string (getLoginDB(), $imgname );


            $query = "INSERT INTO  carousel
                            VALUES( null, '$imgnameCrypted') ";

            $result = mysqli_query(getLoginDB(),  $query);
            if ( !$result) {
                echo "Nepavyko sukurti naujos prekes" . mysqli_error(getLoginDB());
            }
        }

        //--------------deleteItem funkcija  produktui istrinti--------------

        function deleteCarousel($imgname) {
            $query = "DELETE FROM carousel WHERE imgname = '$imgname' LIMIT 1";

            $rezultatai = mysqli_query(getLoginDB(),  $query); // print_r(    $rezultataiOBJ );  // test
            if ( $rezultatai == false) {
                echo "ERROR: item not deleted. SQL error:" . mysqli_error(getLoginDB());
            }
        }

        //--------------updateItem funkcija  produktui istrinti--------------

        function updateCarousel($currentvalue, $newvalue) {
            $currentCrypted = mysqli_real_escape_string (getLoginDB(), $currentvalue );
            $newCrypted = mysqli_real_escape_string (getLoginDB(), $newvalue );


            $query = "UPDATE  carousel
                            SET imgname = '$newCrypted'
                            WHERE imgname = '$currentCrypted'; ";

            $result = mysqli_query(getLoginDB(),  $query);
            if ( !$result) {
                echo "Nepavyko sukurti naujos prekes" . mysqli_error(getLoginDB());
            }
        }

 ?>
