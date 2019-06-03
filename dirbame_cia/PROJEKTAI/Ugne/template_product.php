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
                          "<?php    $id = $_GET['id'];
                          echo getItem($id)['name'];    ?>"
                      </h2>
                    </div>
                  <div class="col-12 text-center">
                      <h4 class=""><?php
                        $id = $_GET['id'];
                        echo getItem($id)['price'];    ?>Eur</h4>
                  </div>
              </div>
        </section>

        <section class="container-fluid mt-5">
              <div class="row">
                    <div class="col-lg-7 col-md-12 justify-content-center">
                      <img class="item-img img-responsive" src="img/<?php
                      $id = $_GET['id'];
                      echo getItem($id)['imgname']; ?>">
                    </div>


                    <div class="col-lg-5 col-md-12 justify-content-center">
                      <div class= "col-12 text-center">
                        <p class="font-weight-light mt-5">
                          <?php
                          $id = $_GET['id'];
                          echo getItem($id)['description'];    ?>
                        </p>
                      </div>

                      <div class= "col-12 justify-content-center">
                        <a class="btn btn-outline-dark my-2 my-sm-0 w-100" href="cart.php">Add to cart</a>
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
