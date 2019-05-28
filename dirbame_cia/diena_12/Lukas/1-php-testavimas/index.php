<?php

//
/* ilgas
komentaras
*/

// kintamieji, kuriami su $ zenklu
$vardas = "Tomas";
// PHP moka rasyti kintamuosius viduri teksto, vidui kabuciu
$tekstas = "vakar $vardas isejo i miska";
// ' ' kabutese kintamuju rasyti jau negalima, su viengubom galim uzrasyti kintamuosius kaip teksta
$tekstas2 = 'vakar $vardas isejo i miska';

// kintamieji echo komandoje jungiami su .
echo $tekstas . "<br>" . $tekstas2;

$x = 10;
$y = 5;
$z = $x * $y;
$br = "<br />";
echo $br . $z;

?>
