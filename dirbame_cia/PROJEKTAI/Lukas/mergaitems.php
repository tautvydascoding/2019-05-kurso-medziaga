<?php
include_once("header.php");
include_once("menu-juosta-mergaitems.php") ?>

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
                include_once("db_functions.php");
                $nr = 1000;
                $prekeOBJ = getMergaitemsPrekes();
                $vienaPrekeArray = mysqli_fetch_assoc($prekeOBJ);
                if (mysqli_num_rows($prekeOBJ) > 0) {
                    while ($vienaPrekeArray == true) {
                        echo
                        "<div class='col m-3'>
                            <div class='card text-center' style='width: 18rem;''>
                                <img class='card-img-top' src='/img/" . $vienaPrekeArray['img_name'] . "' alt='Card image cap'>
                                <div class='card-body '>
                                    <h5 class='card-title'>" . $vienaPrekeArray['pavadinimas'] . "</h5>
                                    <p class='trumpas-prekes-aprasymas card-text pb-3'>" . $vienaPrekeArray['trumpas_aprasymas'] . "</p>
                                    <a href='preke-mergaitems.php?id=" . $vienaPrekeArray['id'] . "' class=' btn-pirkti btn-primary'>" . $vienaPrekeArray['kaina'] . "</a>
                                </div>
                            </div>
                        </div>";
                        $vienaPrekeArray = mysqli_fetch_assoc($prekeOBJ);
                    }
                }
                ?>
            </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
