<?php
include_once('header.php');
include_once('db_functions.php');

$search = mysqli_real_escape_string($prisijungimas, $_POST['search']);

function bern_prek_paieska($x) {
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    mysqli_set_charset($prisijungimas, 'utf8mb4');
    if ( !$prisijungimas ) {
        echo "ERROR <br />" . mysqli_connect_error();
    }

    $manoSQL = "SELECT * FROM berniuku_prekes WHERE pavadinimas LIKE '%$x%' OR trumpas_aprasymas LIKE '%$x%' OR aprasymas LIKE '%$x%' OR kaina LIKE '%$x%'";
    $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
    // $berniukuPrekeArray = mysqli_fetch_assoc($rezultataiOBJ);
    return $rezultataiOBJ;
}

function merg_prek_paieska($x) {
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    mysqli_set_charset($prisijungimas, 'utf8mb4');
    if ( !$prisijungimas ) {
        echo "ERROR <br />" . mysqli_connect_error();
    }

    $manoSQL = "SELECT * FROM mergaiciu_prekes WHERE pavadinimas LIKE '%$x%' OR trumpas_aprasymas LIKE '%$x%' OR aprasymas LIKE '%$x%' OR kaina LIKE '%$x%'";
    $rezultataiOBJ = mysqli_query($prisijungimas, $manoSQL);
    // $berniukuPrekeArray = mysqli_fetch_assoc($rezultataiOBJ);
    return $rezultataiOBJ;
}


?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <i class="fa fa-long-arrow-right" aria-hidden="true">
            <ul>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"><button class="btn btn-menu" type="button" name="button">Minkšti žaislai</button></li></i></i>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"><button class="btn btn-menu" type="button" name="button">Žaislai iki 3m</button></i></li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"><button class="btn btn-menu" type="button" name="button">Konstruktoriai</button></i></li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"><button class="btn btn-menu" type="button" name="button">Elektroniniai</button></i></li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"><button class="btn btn-menu-akcija" type="button" name="button">Išpardavimas</button></i></li>
            </ul>
        </div>


            <div class="row">
                <?php
                $bern_prekeOBJ = bern_prek_paieska($search);
                $bern_vienaPrekeArray = mysqli_fetch_assoc($bern_prekeOBJ);
                $merg_prekeOBJ = merg_prek_paieska($search);
                $merg_vienaPrekeArray = mysqli_fetch_assoc($merg_prekeOBJ);

                if (mysqli_num_rows($bern_prekeOBJ) > 0) {
                    while ($bern_vienaPrekeArray == true) {
                        echo
                        "<div class='col m-3'>
                            <div class='card text-center' style='width: 18rem;''>
                                <img class='card-img-top' src='/img/" . $bern_vienaPrekeArray['img_name'] . "' alt='Card image cap'>
                                <div class='card-body '>
                                    <h5 class='card-title'>" . $bern_vienaPrekeArray['pavadinimas'] . "</h5>
                                    <p class='trumpas-prekes-aprasymas card-text pb-3'>" . $bern_vienaPrekeArray['trumpas_aprasymas'] . "</p>
                                    <a href='preke-berniukams.php?id=" . $bern_vienaPrekeArray['id'] . "' class=' btn-pirkti btn-primary'>" . $bern_vienaPrekeArray['kaina'] . "</a>
                                </div>
                            </div>
                        </div>";
                        $bern_vienaPrekeArray = mysqli_fetch_assoc($bern_prekeOBJ);
                    }
                }

                if (mysqli_num_rows($merg_prekeOBJ) > 0) {
                    while ($merg_vienaPrekeArray == true) {
                        echo
                        "<div class='col m-3'>
                            <div class='card text-center' style='width: 18rem;''>
                                <img class='card-img-top' src='/img/" . $merg_vienaPrekeArray['img_name'] . "' alt='Card image cap'>
                                <div class='card-body '>
                                    <h5 class='card-title'>" . $merg_vienaPrekeArray['pavadinimas'] . "</h5>
                                    <p class='trumpas-prekes-aprasymas card-text pb-3'>" . $merg_vienaPrekeArray['trumpas_aprasymas'] . "</p>
                                    <a href='preke-mergaitems.php?id=" . $merg_vienaPrekeArray['id'] . "' class=' btn-pirkti btn-primary'>" . $merg_vienaPrekeArray['kaina'] . "</a>
                                </div>
                            </div>
                        </div>";
                        $merg_vienaPrekeArray = mysqli_fetch_assoc($merg_prekeOBJ);
                    }
                }

                if (mysqli_num_rows($bern_prekeOBJ) <= 0 && mysqli_num_rows($merg_prekeOBJ) <= 0) {
                    echo "<h1 class='mt-5 mb-5 text-center theme-color'>Ieškomos prekės neradome!</h1>";
                }
                ?>
            </div>
    </div>
</div>
<?php include_once('footer.php') ?>
