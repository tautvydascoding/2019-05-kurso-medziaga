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
            <h2>Prekės redagavimo forma</h2>
            <form class="" action="../prekiu_berniukams_redagavimas.php/?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                <?php
                $id = $_GET['id'];
                $prekeOBJ = getBernPreke($id);
                $vienaPrekeArray = mysqli_fetch_assoc($prekeOBJ);
                ?>
                <label for="pavadinimas">Prekės pavadinimas:</label><br>
                <input type="text" name="pavadinimas" value="<?php echo $vienaPrekeArray['pavadinimas'] ?>"  maxlength="30" required><br>
                <label for="t_aprasymas">Trumpas prekės pristatymas:</label><br>
                <textarea name="t_aprasymas" rows="4" cols="40"  maxlength="30" required><?php echo $vienaPrekeArray['trumpas_aprasymas'] ?></textarea><br>
                <label for="aprasymas"></label>Prekės aprašymas:<br>
                <textarea name="aprasymas" rows="8" cols="60"  maxlength="400" required><?php echo $vienaPrekeArray['aprasymas'] ?></textarea><br>
                <label for="kaina"></label>Prekės kaina:<br>
                <input type="number" step="any" name="kaina" value="<?php echo $vienaPrekeArray['kaina'] ?>" required><br><br>
                <label for="fileToUpload">Įdėti prekės nuotrauką (Jeigu norite pakeisti prekės nuotrauką):</label><br><br>
                <input type="file" name="fileToUpload" value=""><br><br>
                <button class="btn" type="submit" name="button">Įdėti</button>
            </form>
            <br><br>
            <script> function goBack() { window.history.back(); } </script>
            <button type="button" name="button" onclick="goBack()">Grįžti</button>

        </div>
    </body>
</html>
