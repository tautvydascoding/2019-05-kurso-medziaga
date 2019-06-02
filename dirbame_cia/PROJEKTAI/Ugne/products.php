<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>
      <?php require_once('db_functions.php')?>

                          <!-- Header -->

      <?php include('header_page.php'); ?>

                          <!-- Main -->


      <main>
        <section class="py-5 container">
          <div class="text-center row m-2">
            <div class="col-12">
              <h2 class="font-weight-light">Products</h2>
            </div>
          </div>


<?php

$allItems = [];
for($i=1; $i<8; $i++){
  $allItems[$i] = getItem($i);
}

echo "<div class='row d-flex justify-content-between m-3'>";
  for($i=1; $i<count($allItems); $i++){
    echo "<div class='col-5 m-2'>";
    echo "<img class='item-img img-responsive' src='img/" . getItem($i)['imgname'] . "'>";
    echo "</div>";



    // echo "<div class='col-5 m-5'>";
    // echo "<img class='col-5 item-img img-responsive' src='img/" . getItem($i)['imgname'] . "'>";
    // echo "<div class= 'col-12 text-center m-2'><h4 class='font-weight-light'>\"" . getItem($i)['name'] . "\"</h4>";
    // echo "<div class= 'col-12 text-center m-2'><h5 class='font-weight-light'>" . getItem($i)['price'] . " Eur</h5></div>";
  }

echo "</div>";

?>

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
