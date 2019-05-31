<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


        <?php
        // array / masyvas
        $preke1 = [69.99,  "Kede", "3vnt"];

        $numeris = $_GET['x'];
        echo "numeris: $numeris <br />";
        echo $preke1[$numeris] . "<hr />";

        $preke2 = [130.99, "Stalas", "1vnt"];
        $preke3 = [50.00,  "Lova", "1vnt"];
        $visosPrekes = [$preke1, $preke2, $preke3];
        // print_r($visosPrekes);// test
        $numeris = $_GET['x']; // url adrese (narsykleje) keisime kuria prekia atvaizduoti
        $manoPreke =  $visosPrekes[$numeris];
        print_r($manoPreke);
        echo "<hr />";

         ?>

    </body>
</html>
