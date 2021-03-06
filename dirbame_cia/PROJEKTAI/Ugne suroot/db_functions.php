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

    //--------------deleteMenuItem funkcija istrinti--------------

    function deleteMenuItem($id) {
        $query = "DELETE FROM navigation WHERE id = '$id' LIMIT 1";

        $rezultatai = mysqli_query(getLoginDB(),  $query); // print_r(    $rezultataiOBJ );  // test
        if ( $rezultatai == false) {
            echo "ERROR: item not deleted. SQL error:" . mysqli_error(getLoginDB());
        }
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

        function deleteItem($id) {
            $query = "DELETE FROM items WHERE id = '$id' LIMIT 1";

            $rezultatai = mysqli_query(getLoginDB(),  $query); // print_r(    $rezultataiOBJ );  // test
            if ( $rezultatai == false) {
                echo "ERROR: item not deleted. SQL error:" . mysqli_error(getLoginDB());
            }
        }

        //--------------updateItem funkcija  produktui pakeisti--------------

        function updateItem($id, $name, $description, $price, $imgname, $thumbname) {
            $idCrypted = mysqli_real_escape_string (getLoginDB(), $id );
            $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
            $descriptionCrypted = mysqli_real_escape_string (getLoginDB(), $description );
            $priceCrypted = mysqli_real_escape_string (getLoginDB(), $price );
            $imgnameCrypted = mysqli_real_escape_string (getLoginDB(), $imgname );
            $thumbnameCrypted = mysqli_real_escape_string (getLoginDB(), $thumbname );


            $queryCheck = "SELECT * FROM items
                              WHERE id = '$id' AND
                                    name = '$name' AND
                                    description = '$description' AND
                                    price = '$price' AND
                                    imgname = '$imgnameCrypted' AND
                                    thumbnail = '$thumbnameCrypted'
                             LIMIT 1;
                                  ";

            $query = "UPDATE  items
                            SET name = '$nameCrypted',
                                description = '$descriptionCrypted',
                                price = '$priceCrypted',
                                imgname = '$imgnameCrypted',
                                thumbnail = '$thumbnameCrypted'
                            WHERE id = '$idCrypted'; ";

            $result = mysqli_query(getLoginDB(), $queryCheck);

            if ($result->num_rows == 0) {
              $newResult = mysqli_query(getLoginDB(),  $query);
              echo "Item updated successfully!";
          } else {
            echo "Nothing changed. Information already exists.";

          }
        }

        //-------------getAbout funkcija aprasymui gauti--------------

        function getAbout() {
            $query = "SELECT * FROM about
                      WHERE id = 1; ";

            $result = mysqli_query(getLoginDB(), $query);
            $resultArray = mysqli_fetch_assoc($result);
            return $resultArray;
        }



        //--------------updateAbout funkcija aprasymui pakeisti pakeisti--------------

        function updateAbout($id, $text, $title) {
            $idCrypted = mysqli_real_escape_string (getLoginDB(), $id );
            $textCrypted = mysqli_real_escape_string (getLoginDB(), $text );
            $titleCrypted = mysqli_real_escape_string (getLoginDB(), $title );

            $query = "UPDATE about
                            SET atext = '$textCrypted', title = '$titleCrypted'
                            WHERE id = '$idCrypted'; ";

            $result = mysqli_query(getLoginDB(), $query);
        }


        //--------------GET IMAGES (GAUTI karuseles foto) FUNKCIJA-----------------------

          function getCarouselImages($itemLimit = 50) {
              $query = "SELECT * FROM carousel LIMIT $itemLimit ";
              $result = mysqli_query(getLoginDB(),  $query);
              return $result;
          }

        //--------------naujas carousel image-------------


        function createCarousel( $imgname) {
            $imgnameCrypted = mysqli_real_escape_string(getLoginDB(), $imgname );


            $query = "INSERT INTO  carousel
                            VALUES( null, '$imgnameCrypted') ";

            $result = mysqli_query(getLoginDB(),  $query);
            if ( !$result) {
                echo "Nepavyko sukurti naujos prekes" . mysqli_error(getLoginDB());
            }
        }

        //--------------deleteItem funkcija  produktui istrinti--------------

        function deleteCarousel($id) {
            $query = "DELETE FROM carousel WHERE id = '$id' LIMIT 1";

            $rezultatai = mysqli_query(getLoginDB(),  $query); // print_r(    $rezultataiOBJ );  // test
            if ( $rezultatai == false) {
                echo "ERROR: item not deleted. SQL error:" . mysqli_error(getLoginDB());
            }
        }

        //--------------LOGIN--------------

        function loginToAdmin($email, $password) {
            $cryptedEmail = mysqli_real_escape_string(getLoginDB(), $email );
            $cryptedPassword = mysqli_real_escape_string(getLoginDB(), $password );
            $md5Password = md5($cryptedPassword);
            $query = "SELECT * FROM users
                            WHERE password = '$md5Password' AND email = '$email'; ";

            $result = mysqli_query(getLoginDB(),  $query);

            $resultArray = mysqli_fetch_assoc($result);
            print_r($resultArray);

            if (mysqli_num_rows($result)>0) {
              header("Location: admin_panel.php");

            } else {
              echo "Wrong password or e-mail" . mysqli_error(getLoginDB());
            }
        }


  //--------------CREATE menu item FUNKCIJA-----------------------
          function createNavigationItem($name, $link){
            $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
            $linkCrypted = mysqli_real_escape_string (getLoginDB(), $link );


            $query = "INSERT INTO  navigation
                            VALUES( null, '$nameCrypted', '$linkCrypted') ";

            $result = mysqli_query(getLoginDB(),  $query);
            if ( !$result) {
                echo "Nepavyko sukurti naujos prekes" . mysqli_error(getLoginDB());
            }
          }

  //--------------CREATE order FUNKCIJA-----------------------
          function createOrderInfo($name, $lname, $email, $phone, $address, $city, $country, $message, $orderItemNames, $totalprice) {
              $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
              $lnameCrypted = mysqli_real_escape_string (getLoginDB(), $lname );
              $emailCrypted = mysqli_real_escape_string (getLoginDB(), $email );
              $phoneCrypted = mysqli_real_escape_string (getLoginDB(), $phone );
              $addressCrypted = mysqli_real_escape_string (getLoginDB(), $address );
              $cityCrypted = mysqli_real_escape_string (getLoginDB(), $city );
              $countryCrypted = mysqli_real_escape_string (getLoginDB(), $country );
              $messageCrypted = mysqli_real_escape_string (getLoginDB(), $message );
              $orderItemNamesCrypted = mysqli_real_escape_string (getLoginDB(), $orderItemNames );
              $totalPriceCrypted = mysqli_real_escape_string (getLoginDB(), $totalprice );

              $query = "INSERT INTO  orders
                              VALUES( null, '$nameCrypted', '$lnameCrypted', '$emailCrypted', '$phoneCrypted', '$addressCrypted', '$cityCrypted', '$countryCrypted', '$messageCrypted', '$orderItemNamesCrypted', '$totalPriceCrypted') ";

              $result = mysqli_query(getLoginDB(),  $query);
              if ( !$result) {
                  echo "Something went wrong!" . mysqli_error(getLoginDB());
              }
          }

          //--------------GET orders FUNKCIJA-----------------------
          function getOrders($itemLimit = 50) {
              $query = "SELECT * FROM orders LIMIT $itemLimit ";
              $result = mysqli_query(getLoginDB(),  $query);

              return $result;
          }

          //--------------GET order FUNKCIJA-----------------------
          function getOrder($id) {
              $query = "SELECT * FROM orders WHERE id = '$id' ";
              $result = mysqli_query(getLoginDB(),  $query);
              $orderById = mysqli_fetch_assoc($result);
              return $orderById;
          }
          //--------------SEARCH-----------------------
                  function search($search) {
                      $min_length = 3;
                      if(strlen($search) >= $min_length){

                      $searchCrypted = mysqli_real_escape_string(getLoginDB(), $search);
                      $query = "SELECT * FROM items
                                WHERE name LIKE '%".$searchCrypted."%' OR description LIKE '%".$searchCrypted."%';";

                      $results = mysqli_query(getLoginDB(),  $query);

                      if($results){ // if one or more rows are returned do following
                                  while($result = mysqli_fetch_assoc($results)){
                                      // echo "<p ><a href='template_product.php?id=" . $result['id'] . "'><h4>Canva \"".$result['name']."\"</h4></a>". $result['description'] . "</p>";
                                      // posts results gotten from database(title and text) you can also show id ($results['id'])
                                      echo "<div class='m-4 col-md-5'><a href='template_product.php?id=" . $result['id'] . "'>";
                                      echo "<img class='item-img img-responsive img-thumbnail' src='img/" . $result['thumbnail'] . "'>";
                                      echo "<div class= 'col-12 text-center m-2 text-dark'><h4 class='font-weight-light card-title'>\"" . $result['name'] . "\"</h4>";
                                      echo "<h5 class='font-weight-light'>" . $result['price'] . " Eur</h5></div>";
                                      echo "</div></a>";

                                  }
                                }
                              }
                              else{ // if there is no matching rows do following
                                  echo "No results";
                              }
                      }


 ?>
