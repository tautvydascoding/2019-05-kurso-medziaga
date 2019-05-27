

Susikurti 2 failus:

preke.php
index.php

Faile index.php naudojant include('preke.php');    f-ja "iterpti" preke.php


// UZDUOTIS:
// 1: sukurti "preke.php" faila
// h2 (antraste)
// p (aprasymas)
// button (Kaina)

// 2) sukurti index.php (ideti container ir row su bootatrap)
// 2) index.php faile - paleisti FOR cikla 6 kartus include('preke.php');  
// 3) index.php
// sukurti kintamuosius:
// $kaina = ...;
// $antraste = ...;
// $aprasymas = ...;
// 4) preke.php faile   isvesti kintamuosius $kaina, $antraste, $aprasymas
pvz
<h2> <?php echo $antraste;  ?> </h2>
