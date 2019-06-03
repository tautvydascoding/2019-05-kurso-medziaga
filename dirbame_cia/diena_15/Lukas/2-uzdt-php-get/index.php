<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>

        <h1>Duomenu pernesimas is vieno failo i kita naudojant $_GET</h1>
        <p>(ivestos reiksmes nukeliaus i php masyva GET)</p>

        <form action="registracija.php" method="post"> <!-- action pasako kompiuteriui ka daryti kai paspausim submit mygtuka. -->
            <input type="text" name="vardas" value="" placeholder="Iveskite varda"> <!-- name, nurodom get masyvo php kalboje stalciaus pavadinima -->
            <input type="text" name="pavarde" value="" placeholder="Iveskite pavarde">
            <input type="text" name="tel" value="" placeholder="Iveskite tel" required>
            <button type = "submit">Registruotis</button>
            <!-- arba -->
            <input type="submit" name="" value="Registracija">
        </form>




        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
