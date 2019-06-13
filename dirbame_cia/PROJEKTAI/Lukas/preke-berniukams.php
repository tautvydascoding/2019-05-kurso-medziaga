<?php
include_once('header.php');
?>
    <?php
    include("db_functions.php");
    session_start();
    $_SESSION['PrekesID'] = $_GET['id'];
    $nr = 1000;
    $prekeOBJ = getBernPreke($_GET['id']);
    $vienaPrekeArray = mysqli_fetch_assoc($prekeOBJ);
    if (mysqli_num_rows($prekeOBJ) > 0) {
        echo
        '<div class="container">
            <div class="row mt-3">
                <div class="col-4 aukstis-300 ">
                    <img src="../img/' . $vienaPrekeArray['img_name'] . '" class="prekesNuotrauka" alt="">
                </div>
                <div class="col-8 aukstis-300">
                    <h2>' . $vienaPrekeArray['pavadinimas'] . '</h2>
                    <span>' . $vienaPrekeArray['trumpas_aprasymas'] .'</span><hr>
                    <h2><strong>Kaina: '. $vienaPrekeArray['kaina'] . ' Eur </strong></h2>
                    <div class="hidden bg-red">
                        Šiuo metu prekės neturime.
                    </div>
                    <p class="preke_sandelyje"><strong>Prekė yra sandelyje.</strong></p><hr>
                    <br>
                    <button type="button" class="btn btn-danger" onclick="javascript:history.back()">Grįžti</button>
                    <a href="'; if (!empty($_SESSION)) {$_SESSION['kaina'] = $vienaPrekeArray['kaina'];
                    $_SESSION['prekesPav'] = $vienaPrekeArray['pavadinimas']; echo "pirkimas.php";} else {echo "login.php";}  echo '"><button type="button" class="btn btn-success">Pirkti</button></a>
                </div>
            </div>
            <br>
            <br>
            <hr>
            <div class="row">
                <div class="col mb-4">
                    <h3 class="text-center">Prekės aprašymas</h3>
                    <br>
                    <span>' . $vienaPrekeArray['aprasymas'] .'</span>
                </div>

            </div>
        </div>
        <br>
        <br>
        <br>';
    } else {
        echo "Įvyko klaida! Neradome šios prekės.<br />";
    }
    include_once('footer.php')
    // unset($_SESSION['username']);
    // unset($_SESSION['valid']);
    // unset($_SESSION['timeout']);
    // session_destroy();
    ?>
