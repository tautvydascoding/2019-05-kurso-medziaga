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
            <form class="" action="../karusele_redagavimas.php/?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                <?php
                $nr = $_GET['id'];
                $vienaPrekeArray = getKarusele($nr);
                ?>
                <label for="tekstash3">Viršutinis reklamos tekstas:</label><br>
                <input type="tekstash3" name="tekstash3" value="<?php echo $vienaPrekeArray['tekstash3'] ?>"  maxlength="50" required><br>
                <label for="tekstash4">Apatinis reklamos tekstas:</label><br>
                <input type="tekstash4" name="tekstash4" value="<?php echo $vienaPrekeArray['tekstash4'] ?>"  maxlength="50" required><br>
                <label for="fileToUpload">Įdėti "<?php echo $nr . '. slide' ?>" nuotrauką (Jeigu norite pakeisti nuotrauką):</label><br><br>
                <input type="file" name="fileToUpload" value=""><br><br>
                <button class="btn" type="submit" name="button">Redaguoti</button>
            </form>
            <br><br>
            <script> function goBack() { window.history.back(); } </script>
            <button type="button" name="button" onclick="goBack()">Grįžti</button>

        </div>
    </body>
</html>
