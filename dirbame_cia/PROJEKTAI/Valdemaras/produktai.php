<?php
require_once('header.php');
 ?>

        <div class="text-center">
            <img src="/img/0P8A8856-bewerkt-2-2new.jpg" width="100%" height="auto" alt="">
        </div>

        <main class="container">

            <h1 class="centruoti"> Produktai </h1>
            <div class="row">
                    <?php

        include('db_functions.php');
        $visosPrekes = getProduktai(59);
        $vienaPreke = mysqli_fetch_assoc($visosPrekes);

        while ( $vienaPreke ) {
            echo "<div class=col-md-4 col-xs-12>";
            echo "<a href='preke.php?id={$vienaPreke['id']}''><img src='img/{$vienaPreke['pav']}'height='400''></a>";
          echo " <a href='preke.php?id={$vienaPreke['id']}''><h2>"  . $vienaPreke['pavadinimas'] ."</h2></a>";
          echo " <p>"  . $vienaPreke['aprasymas'] ."</p>";
          echo "</div>";
        $vienaPreke = mysqli_fetch_assoc($visosPrekes);
         }

                     ?>
<!-- <img src="img/$vienaPreke['pav']" alt=""> -->
            </div>

        </main>






        <?php
        require_once('footer.php');
         ?>
