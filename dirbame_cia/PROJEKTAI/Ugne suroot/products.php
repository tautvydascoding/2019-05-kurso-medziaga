<?php session_start();

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>
      <?php require_once('db_functions.php')?>

                          <!-- Header -->

      <?php include('header_page.php'); ?>

                          <!-- Main -->


      <main>
        <section class="py-5 container">
          <div class='row m-3 justify-content-center '>


<?php

$allItems = getItems( 30 );

$item = mysqli_fetch_assoc($allItems);


while (  $item == true ) {
  echo "<div class='col-lg-5 m-4 col-md-12'><a href='template_product.php?id=" . $item['id'] . "'>";
  echo "<img class='item-img img-responsive img-thumbnail' src='img/" . $item['thumbnail'] . "'>";
  echo "<div class= 'col-12 text-center m-2 text-dark'><h4 class='font-weight-light card-title'>\"" . $item['name'] . "\"</h4>";
  echo "<h5 class='font-weight-light'>" . $item['price'] . " Eur</h5></div>";
  echo "</div></a>";
  $item = mysqli_fetch_assoc($allItems);
}

?>
            </div>
        </section>

      </main>

                    <!-- Footer -->
      <footer>
            <?php include('footer.php'); ?>
      </footer>











        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
