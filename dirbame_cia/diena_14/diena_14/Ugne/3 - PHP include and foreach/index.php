<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        <h1>Isijunk konsole</h1>

        <?php
        $vardas = 'Ugne';
        $pavarde = 'Gaja';
        $straipsnis = ['Ugne kuria svetaine su php', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20000];

        include( 'straipsnis.php');

         ?>

        <!-- // UZDUOTIS
        // 1.1 index.php faile sukurti 2 kintamuosius $vardas, $pavarde
        // 1.2 index.php faile sukurti masyva: 'straipnis' = ['antraste', 'aprasymas', 'data'];
        //
        // pvz:   'BMW vel preleke saligatviu',   'Lorem lorem....', '2010-12-01'

        // 2. index.php faile  ideti:
        // include( 'straipsnis.php');

        // 2.0. suskurti faila:  straipsnis.php
        // 2.1 straipsnis.php faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde
        // 2.2 straipsnis.php faile sukurti   'container' 'main' 'article'
        // 2.3 'article' videje sukurti:
        // 2.3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
        // 2.3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
        // 2.3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo) -->



        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
