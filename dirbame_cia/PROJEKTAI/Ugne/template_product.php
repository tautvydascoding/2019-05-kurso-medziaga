<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>
                          <!-- Header -->

      <?php
      require_once('db_functions.php');
      include('header_page.php');
       ?>


                      <!-- Main -->



      <main class="container mt-5">
        <section class="container-fluid mt-5">
              <div class="row">
                  <div class="col-12 text-center">
                      <h2 class="font-weight-light">
                          "<?php    echo getItem(1)['name'];    ?>"
                      </h2>
                    </div>
                  <div class="col-12 text-center">
                      <h3 class=""><?php    echo getItem(1)['price'];    ?> Eur</h3></div>
              </div>
        </section>

        <section class="container-fluid mt-5">
              <div class="row">
                    <div class="col-7">
                      <img class="item-img img-responsive" src="img/<?php
                          echo getItem(1)['imgname']; ?>">
                    </div>


                    <div class="col-5">
                      <div class= "col-12 text-center">
                        <p class="font-weight-light">
                          <?php    echo getItem(1)['description'];    ?>
                        </p>
                      </div>

                      <div class= "col-12">
                        <a class="btn btn-outline-dark my-2 my-sm-0 ml-3 w-100" href="products.php">Add to cart</a>
                      </div>

                    </div>


              </div>
        </section>



      </main>






                    <!-- Footer -->
      <footer>
            <?php include('footer.php'); ?>
      </footer>


      <!-- <?php
      $id = $_GET['nr'];
      $gydytojas = getItem( $id );
      echo "Asmeninis gydytojo puslapis: <hr />";
      echo "<h1>" .  $gydytojas['name'] . $gydytojas['lname'] .  "</h1>";
       ?> -->

        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
