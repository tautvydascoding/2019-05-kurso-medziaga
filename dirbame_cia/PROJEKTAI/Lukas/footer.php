<?php
include_once('db_functions.php');
$kontaktai = getKontaktai();
?>

<div class="container-fluid bg-black">
    <div class="row">
        <div class="col-md-4 bg-black aukstis-250 text-justify pt-3">
            <img class="mt=2" src="img/logo.png" alt="Toy story" height="80px" width="80%">
            <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>

                <a class="btn-floating btn-lg btn-fb theme-color-background mr-2 border0" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn-floating btn-lg btn-tw theme-color-background mr-2 border0" type="button" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn-floating btn-lg btn-ins theme-color-background mr-2 border0" type="button" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn-floating btn-lg btn-pin theme-color-background mr-2 border0" type="button" role="button"><i class="fab fa-pinterest"></i></a>

        </div>
        <div class="col-md-4 bg-black aukstis-200 pt-3 text-center">
            <h3 class="white">Informacija</h3>
            <div class="vertical-menu">
                <a href="../index.php" class="active d-block white"><u>Namai</u></a>
                <a href="../apie.php" class="d-block white">Apie</a>
                <a href="../berniukams.php" class="d-block white">Berniukams</a>
                <a href="../mergaitems.php" class="d-block white">Mergaitėms</a>
                <a href="../kontaktai.php" class="d-block white">Kontaktai</a>
</div>
        </div>
        <div class="col-md-4 bg-black aukstis-200 pt-3">
            <div class="row">
                <div class="col-12">
                    <h4 class="white"><strong>Parduotuvės</strong> informacija</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 bg-black footer-background">
                    <p class="white">
                        <i class="fa fa-phone" aria-hidden="true">&nbsp;&nbsp;&nbsp;Telefono numeris</i><br>
                        <p class="white"><?php echo $kontaktai['mob_nr1'] ?><br /><?php echo $kontaktai['mob_nr1'] ?></p>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 bg-black footer-background">
                    <p class="white">
                        <i class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;&nbsp;El. Pašto adresas</i><br>
                        <p><a class='white' href='mailto:<?php echo $kontaktai['pastas1'] ?>'><?php echo $kontaktai['pastas1'] ?></a></p>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 bg-black footer-background">
                    <p class="white">
                        <i class="fas fa-map-marker-alt" aria-hidden="true">&nbsp;&nbsp;&nbsp;Parduotuvės adresas</i><br>
                        <p><a href = 'kontaktai.php' class="white"><?php echo $kontaktai['gatve'] . '. ' . $kontaktai['namo_numeris'] . ', ' . $kontaktai['miestas'] . ' ' . $kontaktai['pasto_kodas']; ?></a></p>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>

    <div class="row">
        <div class="col bg-black aukstis-50 text-center">
            <p class="white">&copy; 2019 Lukas Martinaitis<p>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
