<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
         <?php
            include_once('Automobilis.php');
            $sablonas = new Automobilis(); // NEW sukuria atskira objekta.
            $X5 = new Automobilis();
            $X4 = new Automobilis();
            $X3 = new Automobilis();
            $X2 = new Automobilis();
            $X1 = new Automobilis();
            echo "X? Spalva: " . $sablonas->spalva . "<br />";
            $X5 -> spalva = 'Juoda';
            echo "X5 Spalva: " . $X5->spalva . "<br />";
            $X4 -> spalva = 'pilka';
            echo "X4 Spalva: " . $X4->spalva . "<br />";
            $X3 -> spalva = 'raudona';
            echo "X3 Spalva: " . $X3->spalva . "<br />";
            $X2 -> spalva = 'zalia';
            echo "X2 Spalva: " . $X2->spalva . "<br />";
            $X1 -> spalva = 'geltona';
            echo "X1 Spalva: " . $X1->spalva . "<br />";
            // echo "Kebulo numeris " . $X5->$kebuloNumeris; // neatspausdins, nes privatus
            $X5->vaziuoti(10);
         ?>
    </body>
</html>
