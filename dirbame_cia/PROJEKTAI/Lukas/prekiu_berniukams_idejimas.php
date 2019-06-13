<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Admin panel</title>
    </head>
    <body>
        <div class="container-fluid">
            <h2>Prekės berniukams įdėjimas</h2>
            <form class="" action="prekiu_berniukams_idejimas.php" method="post" enctype="multipart/form-data">
                <label for="pavadinimas">Prekės pavadinimas:</label><br>
                <input type="text" name="pavadinimas" value=""  maxlength="30" required><br>
                <label for="t_aprasymas">Trumpas prekės pristatymas:</label><br>
                <textarea name="t_aprasymas" rows="4" cols="40"  maxlength="20" required></textarea><br>
                <label for="aprasymas"></label>Prekės aprašymas:<br>
                <textarea name="aprasymas" rows="8" cols="60"  maxlength="400" required></textarea><br>
                <label for="kaina"></label>Prekės kaina:<br>
                <input type="number" step="any" name="kaina" value="" required><br><br>
                <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                <label for="fileToUpload">Įdėti prekės nuotrauka (privaloma):</label><br><br>
                <input type="file" name="fileToUpload" value="" id="fileToUpload" required><br><br>
                <button class="btn" type="submit" name="button">Įdėti</button>
            </form>
            <br><br>
            <button type="button" name="button"><a href="admin-panel.php">Grįžti</a></button>
            <?php if (!empty($_POST) && !empty($_FILES)) {
                include_once("db_functions.php");
                newPrekeBerniukams();
                upload();
            } ?>
        </div>
    </body>
</html>
