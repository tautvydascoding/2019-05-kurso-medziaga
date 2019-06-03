<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>

        <h1>PHP form</h1>
        <h2>Duomenu pernesimas is vieno failo i kita naudojant GET</h2>
        <p>(ivestos reiksmes nukeliauja i php masyva GET)</p>

        <form action="registracija.php" method="get">
          <input type="text" name="vardas" placeholder="Jūsų vardas"/><br />
          <input type="text" name="pavarde" placeholder="Jūsų pavardė"/><br />
          <input  type="text" name="tel" placeholder="Telefono nr" required/><br />

          <button class="btn btn-info" type="submit">Registruotis</button>
          <!-- arba -->
          <input class="btn btn-info" type="submit" value="Registracija2">

        </form><br />

        <h3>2.1 Uzduotis</h3><hr />

        <?php
        $x = $_GET['tekstas'];
        echo $x;
        ?>


        <br /><h3>2.1.2 Uzduotis</h3><hr />

        <?php
        $preke1 = ['800 Eur', 'Dviratis', 200 ];
        $numeris = $_GET['x'];
        echo "numeris:" . $numeris . "<br />";
        echo $preke1[$numeris] . "<hr />";

        ?>

        <br /><h4>2.1.2 Uzduotis sunkesne</h4><br />

        <?php
        $preke2 = ['1200 Eur', 'Rasiklis', 1];
        $preke3 = ['40 Eur', 'Zaislas', 20 ];
        $visosPrekes = [$preke1, $preke2, $preke3];

        $numeris = $_GET['x'];
        $manoPreke =  $visosPrekes[$numeris];
        echo "<p>" . $manoPreke[1] . " kainuoja: " . $manoPreke[0] . "</p>";
        echo "<hr />";

        ?>









        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
