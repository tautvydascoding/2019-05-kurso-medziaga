<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">


<head>

</head>

    <body>

        <!-- // UZDUOTIS 1.1: susikurti nauja projekta ir issivesti gydytoja is DB naudojant foreach ir getDoctor($nr) f-ja

        // UZDUOTIS 1.2:
        // be foreach atspausdinti visa gydytojo info
        // <h2> <em>nr</em> vardas pavarde</h2>

        // UZDUOTIS 1.3:
        // su kokiu nors ciklu atspausdinti VISUS gydytojus
        // <h2 class='bg-info   m-1'> vardas pavarde</h2> -->

        <h2><?php
        require_once('db_functions.php');
        $i = 0;
        for ($i=1; $i < 5; $i++) {
            $gydytojo_vardas = getDoctor($i);
            foreach ($gydytojo_vardas as $key => $value) {
                echo $value . " ";
        }
        echo "<br />";
        //test print_r($gydytojo_vardas);
        }
          ?></h2>

          <!-- ANTRAS BUDAS BE CIKLU VEIKIA DEL TO, KAD FUNCTIONS PANAUDOTA  ASSOC KURIS PAVERCIA I MASYVA, DB OBJEKTUS -->
          <!-- <h2><?php
          echo $gydytojo_vardas['name'] . " " . $gydytojo_vardas['lname'] ?></h2> -->






        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
