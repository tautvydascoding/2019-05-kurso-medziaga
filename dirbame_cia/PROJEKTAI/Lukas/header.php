<!DOCTYPE html>
<?php
session_start();
print_r($_SESSION);
?>
<html>
    <head>
        <meta charset="utf8mb4">
        <title>Toy Story</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/all.css" rel="stylesheet"> <!-- Awesome font -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
<header>
    <!-- Virsutine juosta pradzia-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 black height-header-up <?php if (!empty($_SESSION)) {echo "hidden";} ?>">

            </div>
            <div class="<?php if (!empty($_SESSION)) {echo "col-md-4";} else {echo "col-md-2";} ?> black height-header-up ">
                <p class="text-center pt-1 white">
                <a href="<?php if (!empty($_SESSION)) {echo 'atsijungti.php';} else {echo 'login.php';} ?>" class="link-unstyled"><i class="fa fa-unlock-alt theme-color" aria-hidden="true"></i>
                <?php  if (!empty($_SESSION)) {echo "atsijungti";} else {echo "prisijungti";} ?> </a>
                </p>
            </div>
            <div class="col-md-2 black height-header-up <?php if (!empty($_SESSION)) {echo "hidden";} ?>">
                <p class="text-center pt-1 white">
                    <a href="registracija.php" class="link-unstyled"><i class="fa fa-user-plus theme-color" aria-hidden="true"></i>    Registruotis</a>
                </p>
            </div>
            <div class="<?php if (!empty($_SESSION)) {echo "col-md-4";} else {echo "col-md-2";} ?>  black height-header-up">
                <p class="text-center pt-1 white">
                    <a href="tel:123456789" class="link-unstyled"><i class="fa fa-phone-square theme-color" aria-hidden="true"></i>   +123456789</a>
                </p>
            </div>
            <div class="<?php if (!empty($_SESSION)) {echo "col-md-4";} else {echo "col-md-2";} ?>  black height-header-up">
                <p class="text-center pt-1 white">
                    <a href="atsiliepimai.php" class="link-unstyled"><i class="fa fa-envelope theme-color" aria-hidden="true"></i>   Atsiliepimai</a>
                </p>
            </div>
            <div class="col-md-2 black height-header-up <?php if (!empty($_SESSION)) {echo "hidden";} ?>">

            </div>
        </div>
    </div>
    <!-- Virsutine juosta pabaiga -->
    <!-- Paieskos ir banerio pradzia -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 height-search-upper-panel d-flex justify-content-md-start align-items-md-center">
                <h2 class="mr-2 share">Paieška: </h2>
                <form class="form" action="paieska.php" method="post">
                    <input class="searchForm form-control" type="text" name="search" value="" placeholder="Ieškoma prekė"   minlength="3" maxlength="15" required>
                    <button class="theme-color-background border0 searchBox ml-2" type="submit" value=" " ><i class="fa fa-search white" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="col-md-4  height-search-upper-panel d-flex justify-content-md-center align-items-md-center">
                <h1>
                    <img class="mt=2" src="img/logo.png" alt="Toy story" height="80px" width="80%">
                    <i class="fa fa-shopping-bag top_logo_agile_bag theme-color" aria-hidden="true"></i>
                </h1>

            </div>
            <div class="col-md-4  height-search-upper-panel d-flex justify-content-md-center align-items-md-center">
                <h2 class="mr-2 share">Pasidalink: </h2>
                <a class="btn-floating btn-lg btn-fb theme-color-background mr-2 border0" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn-floating btn-lg btn-tw theme-color-background mr-2 border0" type="button" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn-floating btn-lg btn-ins theme-color-background mr-2 border0" type="button" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn-floating btn-lg btn-pin theme-color-background mr-2 border0" type="button" role="button"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>
    </div>
    <!-- Paieskos ir banerio pabaiga -->
    <!-- Navigacijos pradzia -->
    <nav class="container-fluid">
        <div class="row">
            <div class="col black nav_height d-flex align-items-center">
                <ul>

                    <li class="white mr-5 bg-red"><a class="link-unstyled <?php if ($_SESSION['username'] === 'lennox') {echo "show";} else {echo "hidden";} ?>" href="admin-panel.php">Admino Panelė</a></li>
                    <li class="white mr-5"><a class='link-unstyled' href="index.php">Namai</a></li>
                    <li class="white mr-5"><a class="link-unstyled" href="apie.php">Apie</a></li>
                    <li class="white mr-5"><a class="link-unstyled" href="berniukams.php">Berniukams</a></li>
                    <li class="white mr-5"><a class="link-unstyled" href="mergaitems.php">Mergaitėms</a></li>
                    <li class="white mr-5"><a class="link-unstyled" href="kontaktai.php">Kontaktai</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
