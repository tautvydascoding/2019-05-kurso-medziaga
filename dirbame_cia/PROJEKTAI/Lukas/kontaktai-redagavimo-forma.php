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
            <h2>Kontaktai skilties redagavimo forma</h2>
            <form class="" action="../kontaktai_redagavimas.php" method="post">
                <?php
                $vienaPrekeArray = getKontaktai();
                ?>
                <label for="gatve">Gatves pavadinimas:</label><br>
                <input type="text" name="gatve" value="<?php echo $vienaPrekeArray['gatve'] ?>" required><br>
                <label for="namo_numeris">Namo numeris:</label><br>
                <input type="text" name="namo_numeris" value="<?php echo $vienaPrekeArray['namo_numeris'] ?>" required><br>
                <label for="pasto_kodas">Pasto kodas:</label><br>
                <input type="text" name="pasto_kodas" value="<?php echo $vienaPrekeArray['pasto_kodas'] ?>" required><br>
                <label for="miestas">Pasto kodas:</label><br>
                <input type="text" name="miestas" value="<?php echo $vienaPrekeArray['miestas'] ?>" required><br>
                <label for="mob_nr1">Mobilaus numeris 1:</label><br>
                <input type="text" name="mob_nr1" value="<?php echo $vienaPrekeArray['mob_nr1'] ?>" required><br>
                <label for="mob_nr2">Mobilaus numeris 2:</label><br>
                <input type="text" name="mob_nr2" value="<?php echo $vienaPrekeArray['mob_nr2'] ?>" required><br>
                <label for="pastas1">Elektroninio pašto adresas 1:</label><br>
                <input type="text" name="pastas1" value="<?php echo $vienaPrekeArray['pastas1'] ?>" required><br>
                <label for="pastas2">Elektroninio pašto adresas 2:</label><br>
                <input type="text" name="pastas2" value="<?php echo $vienaPrekeArray['pastas2'] ?>" required><br>


                <button class="btn" type="submit" name="button">Redaguoti</button>
            </form>
            <br><br>
            <script> function goBack() { window.history.back(); } </script>
            <button type="button" name="button" onclick="goBack()">Grįžti</button>

        </div>
    </body>
</html>
