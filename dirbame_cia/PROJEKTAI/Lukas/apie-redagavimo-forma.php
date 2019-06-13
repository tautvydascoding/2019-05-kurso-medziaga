<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Admin panel</title>
        <?php
            include_once("db_functions.php");
        ?>
    </head>
    <body>
        <div class="container-fluid">
            <h2>Apie skilties redagavimo forma</h2>
            <form class="" action="../apie_redagavimas.php" method="post" enctype="multipart/form-data">
                <?php
                $vienaPrekeArray = getApie();
                ?>
                <label for="pavadinimas">Pavadinimas:</label><br>
                <input type="text" name="pavadinimas" value="<?php echo $vienaPrekeArray['pavadinimas'] ?>"  maxlength="50" required><br>
                <label for="aprasymas">Trumpas prekės pristatymas:</label><br>
                <textarea name="aprasymas" rows="4" cols="40"  maxlength="1000" required><?php echo $vienaPrekeArray['aprasymas'] ?></textarea><br><br />
                <label for="fileToUpload">Įdėti "apie" nuotrauką (Jeigu norite pakeisti nuotrauką):</label><br><br>
                <input type="file" name="fileToUpload" value=""><br><br>
                <button class="btn" type="submit" name="button">Redaguoti</button>
            </form>
            <br><br>
            <script> function goBack() { window.history.back(); } </script>
            <button type="button" name="button" onclick="goBack()">Grįžti</button>

        </div>
    </body>
</html>
