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
            <form class="" action="../uzsakymu-redagavimas.php/?id=<?php echo $_GET['id']; ?>" method="post">
                <?php
                $id = $_GET['id'];
                $uzsakymasOBJ = getOrders($id);
                $vienasUzsakymasArray = mysqli_fetch_assoc($uzsakymasOBJ);
                ?>
                <label for="prekes_pavadinimas">Prekės pavadinimas:</label><br>
                <input type="text" name="prekes_pavadinimas" value="<?php echo $vienasUzsakymasArray['prekes_pavadinimas'] ?>"  maxlength="20" required><br>
                <label for="klien_vardas">Kliento vardas:</label><br>
                <input type="text" name="klien_vardas" value="<?php echo $vienasUzsakymasArray['klien_vardas'] ?>"  maxlength="20" required><br>
                <label for="klien_pavarde">Kliento pavardė:</label><br>
                <input type="text" name="klien_pavarde" value="<?php echo $vienasUzsakymasArray['klien_pavarde'] ?>"  maxlength="20" required><br>
                <label for="uzsakymo_laikas">Užsakymo laikas:</label><br>
                <input type="datetime" name="uzsakymo_laikas" value="<?php echo $vienasUzsakymasArray['uzsakymo_laikas'] ?>" required><br><br>
                <button class="btn" type="submit" name="button">Redaguoti</button>
            </form>
            <br><br>
            <script> function goBack() { window.history.back(); } </script>
            <button type="button" name="button" onclick="goBack()">Grįžti</button>

        </div>
    </body>
</html>
