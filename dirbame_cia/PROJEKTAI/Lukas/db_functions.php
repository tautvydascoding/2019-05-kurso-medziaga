<?php
    require_once('config.php');
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    mysqli_set_charset($prisijungimas, 'utf8mb4');



    function getUser($nr) {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM registration WHERE id = $nr";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        print_r($rezultataiOBJ);
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
        return $rezultataiArray;
    }
    function getApie() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM apie";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
        return $rezultataiArray;
    }
    function getKontaktai() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM kontaktai";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
        return $rezultataiArray;
    }
    function getKarusele($nr) {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM karusele WHERE id = $nr";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
        return $rezultataiArray;
    }

    function getBerniukuPrekes() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM berniuku_prekes";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        return $rezultataiOBJ;
    }
    function getBernPreke($nr) {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM berniuku_prekes WHERE id = $nr";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        return $rezultataiOBJ;
    }

    function getMergPreke($nr) {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM mergaiciu_prekes WHERE id = $nr";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        return $rezultataiOBJ;
    }
    function getMergaitemsPrekes() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM mergaiciu_prekes";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        return $rezultataiOBJ;
    }

    // function getNavElement($nr) {
    //     $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    //     mysqli_set_charset($prisijungimas, 'utf8mb4');
    //     if ( !$prisijungimas ) {
    //         echo "ERROR <br />" . mysqli_connect_error();
    //     }
    //     $manoSQL = "SELECT login, registration, mobile, mail FROM virsutine_navigacija WHERE ID = $nr";
    //     $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
    //     $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
    //     return $rezultataiArray;
    // }

    function newReg() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        $username = "";
        $pastas    = "";
        $password_1 = "";
        $password_2 = "";
        if ( $prisijungimas ) {
            $username = mysqli_real_escape_string($prisijungimas, $_POST['username']);
            $pastas = mysqli_real_escape_string($prisijungimas, $_POST['pastas']);
            $password_1 = mysqli_real_escape_string($prisijungimas, $_POST['password_1']);
            $password_2 = mysqli_real_escape_string($prisijungimas, $_POST['password_2']);
            if (!empty($username) && !empty($pastas) && !empty($password_1) && !empty($password_2) && $password_1 === $password_2) {
                    $pass = md5($password_1);
                    $query = "INSERT INTO registration VALUES (null, '$username', '$pass', '$pastas')";
                    $rezultatai = mysqli_query($prisijungimas, $query);
            }
        }
    }

    function newAtsiliepimas() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( $prisijungimas ) {
            $vard = mysqli_real_escape_string($prisijungimas, $_POST['name']);
            $pastas = mysqli_real_escape_string($prisijungimas, $_POST['mail']);
            $atsiliepimas = mysqli_real_escape_string($prisijungimas, $_POST['klausimas']);
        }
            if (!empty($vard) && !empty($pastas) && !empty($atsiliepimas)) {
                    $query = "INSERT INTO atsiliepimai VALUES (null, '$vard', '$pastas', '$atsiliepimas', NOW())";
                    $rezultatai = mysqli_query($prisijungimas, $query);
            }
        }
    function updateAbout() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( $prisijungimas ) {
            $img = mysqli_real_escape_string($prisijungimas, $_POST['nuotrauka']);
            $pavadinimas = mysqli_real_escape_string($prisijungimas, $_POST['pavadinimas']);
            $aprasymas = mysqli_real_escape_string($prisijungimas, $_POST['aprasymas']);
            $query = "INSERT INTO apie VALUES (null, '$img', '$pavadinimas', '$aprasymas')";
            $rezultatai = mysqli_query($prisijungimas, $query);
        }
    }

    function newPrekeBerniukams() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( $prisijungimas ) {
            $pavadinimas = mysqli_real_escape_string($prisijungimas, $_POST['pavadinimas']);
            $trumpas_aprasymas = mysqli_real_escape_string($prisijungimas, $_POST['t_aprasymas']);
            $aprasymas = mysqli_real_escape_string($prisijungimas, $_POST['aprasymas']);
            $kaina = mysqli_real_escape_string($prisijungimas, $_POST['kaina']);
            $img_name = mysqli_real_escape_string($prisijungimas, $_FILES['fileToUpload']['name']);
            $query = "INSERT INTO berniuku_prekes VALUES (null, '$pavadinimas', '$trumpas_aprasymas', '$aprasymas', '$kaina', '$img_name')";
            $rezultatai = mysqli_query($prisijungimas, $query);
            include_once('ikelimas.php');
            if ($rezultatai) {
            	echo "<script type='text/javascript'> window.location = 'berniukams.php'</script>";
            }
        }
        }
    function newPrekeMergaitems() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( $prisijungimas ) {
            $pavadinimas = mysqli_real_escape_string($prisijungimas, $_POST['pavadinimas']);
            $trumpas_aprasymas = mysqli_real_escape_string($prisijungimas, $_POST['t_aprasymas']);
            $aprasymas = mysqli_real_escape_string($prisijungimas, $_POST['aprasymas']);
            $kaina = mysqli_real_escape_string($prisijungimas, $_POST['kaina']);
            $img_name = mysqli_real_escape_string($prisijungimas, $_FILES['fileToUpload']['name']);
            $query = "INSERT INTO mergaiciu_prekes VALUES (null, '$pavadinimas', '$trumpas_aprasymas', '$aprasymas', '$kaina', '$img_name')";
            $rezultatai = mysqli_query($prisijungimas, $query);
            if ($rezultatai) {
            	echo "<script type='text/javascript'> window.location = 'mergaitems.php'</script>";
            }
        }
        }

    function getAtsiliepimai() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM atsiliepimai";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        return $rezultataiOBJ;
    }
    function getOrders() {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        if ( !$prisijungimas ) {
            echo "ERROR <br />" . mysqli_connect_error();
        }
        $manoSQL = "SELECT * FROM uzsakymai";
        $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
        return $rezultataiOBJ;
    }

    function usernameCheck($username1) {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        mysqli_set_charset($prisijungimas, 'utf8mb4');
        $manosqlreg = "SELECT * FROM registration WHERE username = '$username1'";
        $rezultataiOBJreg = mysqli_query($prisijungimas, $manosqlreg);
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJreg);
            if($rezultataiArray['username'] == $_POST['username']) {
                echo "<span class='pReg'><strong>Jūsų pasirinktas vartotojo vardas užimtas.</strong></span>";
            } else {
                newReg();
                echo "<script type='text/javascript'> window.location = 'login.php'</script>";
                }
    }

    function login($username, $password) {
          $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
          mysqli_set_charset($prisijungimas, 'utf8mb4');
          $username1 = mysqli_real_escape_string($prisijungimas, $username);
          $password1 = mysqli_real_escape_string($prisijungimas, $password);
          $pass = md5($password1);
          $query = "SELECT * FROM registration WHERE username='$username1' AND password='$pass'";
          $results = mysqli_query($prisijungimas, $query);
          if (mysqli_num_rows($results) == 1) {
              session_start();
              $_SESSION['valid'] = true;
              $_SESSION['timeout'] = time();
              $_SESSION['username'] = strtolower($username1);
          	 echo "<script type='text/javascript'> window.location = 'index.php'</script>";
          } else {
          	echo "<br /><span class='pReg'><strong>Neteisingas slaptažodis arba vartotojo vardas</strong></span>";
          }
    }

    function deleteOrder($nr) {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        $manoSQL = "DELETE FROM uzsakymai WHERE OrderID = $nr LIMIT 1";
        $rezultatai = mysqli_query($prisijungimas,  $manoSQL);
        if ( !$rezultatai) {
            echo "ERROR: nepavyko istrinti uzsakymo. SQL klaida:" . mysqli_error($prisijungimas);
        } else {
            echo "<script type='text/javascript'>history.go(-1)</script>";
        }
    }
    function deleteAtsiliepimas($nr) {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        $manoSQL = "DELETE FROM atsiliepimai WHERE id = $nr LIMIT 1";
        $rezultatai = mysqli_query($prisijungimas,  $manoSQL);
        if ( !$rezultatai) {
            echo "ERROR: nepavyko istrinti uzsakymo. SQL klaida:" . mysqli_error($prisijungimas);
        } else {
            echo "<script type='text/javascript'>history.go(-1)</script>";
        }
    }
    function deletePrekeMergaitems($nr) {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        $manoSQL = "DELETE FROM mergaiciu_prekes WHERE id = $nr LIMIT 1";
        $rezultatai = mysqli_query($prisijungimas,  $manoSQL);
        if ( !$rezultatai) {
            echo "ERROR: nepavyko istrinti uzsakymo. SQL klaida:" . mysqli_error($prisijungimas);
        } else {
            echo "<script type='text/javascript'>history.go(-1)</script>";
        }
    }
    function deletePrekeBerniukams($nr) {
        $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
        $manoSQL = "DELETE FROM berniuku_prekes WHERE id = $nr LIMIT 1";
        $rezultatai = mysqli_query($prisijungimas,  $manoSQL);
        if ( !$rezultatai) {
            echo "ERROR: nepavyko istrinti uzsakymo. SQL klaida:" . mysqli_error($prisijungimas);
        } else {
            echo "<script type='text/javascript'>history.go(-1)</script>";
        }
    }
    function upload() {
        include('ikelimas.php');
    }
?>
