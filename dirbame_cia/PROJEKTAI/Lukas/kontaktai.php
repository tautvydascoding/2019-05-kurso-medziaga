<?php
include_once('header.php');
include_once('menu-juosta-kontaktai.php');
include_once('db_functions.php');
$kontaktai = getKontaktai();
?>
<div class="container">
    <div class="row">
        <div class="col text-center bg-black mt-3">
            <h3><i class="fas fa-map-marker-alt  white pt-5" aria-hidden="true"></i></h3>
            <h3 class="theme-color">ADRESAS</h3>
            <?php echo "<br /><h6 class='white pb-5' > " . $kontaktai['gatve'] . '. ' . $kontaktai['namo_numeris'] . ",<br /><br />" . $kontaktai['miestas'] . ' ' . $kontaktai['pasto_kodas'] . ".</h6>"; ?>
        </div>
        <div class="col text-center bg-black mt-3">
            <h3><i class="fas fa-phone white pt-5" aria-hidden="true"></i></h3>
            <h3 class="theme-color">Paskambink mums</h3>
            <?php echo "<br /><h6 class='white pb5' ><a href='tel:" . $kontaktai['mob_nr1'] . "' class='link-unstyled'>" . $kontaktai['mob_nr1'] . "</a><a href='tel:" . $kontaktai['mob_nr2'] . "' class='link-unstyled'><br /><br />" . $kontaktai['mob_nr2'] . "</h6></a>"; ?>
        </div>
        <div class="col text-center bg-black mt-3">
            <h3><i class="fas fa-envelope white pt-5" aria-hidden="true"></i></h3>
            <h3 class="theme-color">Parašyk mums</h3>
            <?php echo "<br /><h6 class='white pb-5'><a class='link-unstyled' href='mailto:". $kontaktai['pastas1'] . "'>" . $kontaktai['pastas1'] . "</a><a class='link-unstyled' href='mailto:". $kontaktai['pastas2'] . "'><br /><br />" . $kontaktai['pastas2'] . "</h6></a>"; ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col mt-3">
            <form class="" action="#" method="post">
                <button class="btn btn-primary white theme-color-background border0" name='nightMode'>Nakties rėžimas</button>
                <button class="btn btn-primary white theme-color-background border0" name='dayMode'>Dienos rėžimas</button>
            </form>

            <div class="mapouter<?php if (isset($_POST['nightMode'])) {echo ' mapNight';} elseif (isset($_POST['dayMode'])) {echo ' mapDay';} ?>"><div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Kaunas%2044355&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col black mt-3 mb-3">
            <form class="" action="send-mail-kontaktai-uzklausa.php" method="POST">
                <section class="mb-4">

                    <h2 class="h1-responsive font-weight-bold text-center my-4 white">Susisiekite su mumis</h2>
                    <p class="text-center w-responsive mx-auto mb-5 white">Turite klausimų? Susisiekite su mumis per žemiau pateikta nuorodą. Ir mūsų komanda per artimiausias 72h atsakys į Jūsų klausimus.</p>

                    <div class="row">
                        <div class="col-md-9 mb-md-0 mb-5">
                            <form name="contact-form" action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" name="name" class="form-control">
                                            <label for="name" class="white">Jūsų vardas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" name="mail" class="form-control">
                                            <label for="mail" class="white">Jūsų el. pašto adresas</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" name="tema" class="form-control">
                                            <label for="tema" class="white">Tema</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                            <textarea type="text" name="zinute" rows="2" class="form-control md-textarea"></textarea>
                                            <label class="white" for="zinute">Jūsų žinutė</label>
                                    </div>
                                </div>
                                <div class="text-center text-md-left mt-1">
                                    <button class="btn btn-primary white theme-color-background border0" type="submit">Siųsti užklausą</button></a>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-3 text-center">
                            <ul class="list-unstyled mb-0">
                                <li><i class="white fas fa-map-marker-alt fa-2x"></i>
                                    <p class="theme-color"> <?php echo $kontaktai['gatve'] . '. ' . $kontaktai['namo_numeris'] . ', ' . $kontaktai['miestas'] . ' ' . $kontaktai['pasto_kodas']; ?></p>
                                </li>
                                <li><i class="white fas fa-phone mt-4 fa-2x"></i>
                                    <a href="tel:123456789" class="link-unstyled"><p class="theme-color"><?php echo $kontaktai['mob_nr1'] ?><br /></a>
                                    <a href="tel:123456789" class="link-unstyled"><p class="theme-color"><?php echo $kontaktai['mob_nr2'] ?><br /></a>
                                </li>
                                <li><i class="white fas fa-envelope mt-4 fa-2x"></i>
                                    <a class='link-unstyled' href='mailto:<?php echo $kontaktai['pastas1']  ?>'><p class="theme-color"><?php echo $kontaktai['pastas1'] ?></p></a>
                                    <a class='link-unstyled' href='mailto:<?php echo $kontaktai['pastas2']  ?>'><p class="theme-color"><?php echo $kontaktai['pastas2'] ?></p></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </section>
            </form>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>
