<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>
                          <!-- Header -->

        <?php

        include('nav.php'); ?>


        <header class="header-page">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 text-center">
                <h1 class="font-weight-light p-5"><span class="header-page-name ">Cart</span></h1>
              </div>
            </div>
          </div>
        </header>


                      <!-- Main -->
      <main class="container">
        <section class="py-5">
                <div class="container">

                    <?php
                    $totalPrice = [];
                    if(!empty($_SESSION['cart'])){
                        $sessionCart = $_SESSION['cart'];
                        foreach ($sessionCart as $key) {
                          if (!empty($key)){
                            include('cart/shopping-cart-item.php');
                            array_push($totalPrice, getItem($key)['price']);
                          }
                        }
                      } else {echo "<div class='row text-center'><div class='col-12'><h5 class='font-weight-light m-2'>Your cart is empty</h5></div>";
                              echo "<div class='col-12'><a class='btn btn-outline-dark my-2 my-sm-0 ml-3' href='products.php?id=2'>Shop now</a></div></div>";}

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
