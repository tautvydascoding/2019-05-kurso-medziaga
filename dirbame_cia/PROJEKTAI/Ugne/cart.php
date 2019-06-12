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
	          <table class="table table-hover table-condensed font-weight-light">
    				<thead>
						<tr>
							<th  class=" col-md-5 font-weight-light">Product</th>
							<th  class=" col-md-4 font-weight-light">Price</th>
							<th  class=" col-md-3"></th>
						</tr>
					</thead>
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
            } else {echo "<h5 class='font-weight-light m-2'>Your cart is empty</h5>";}

           ?>
					<tfoot>

						<tr >
							<td class="col-4"><a href="products.php?id=2" class="btn btn-outline-dark"></i>Shop more</a></td>

							<td class="hidden-xs text-center col-4"><strong>Total <?php
              $totalPriceSum = array_sum($totalPrice);
              echo $totalPriceSum;

              $_SESSION['total'][0] = $totalPriceSum;
              $_SESSION['quantity'][0] = count($totalPrice);
              ?>
                Eur</strong></td>
							<td class="col-4"><a href="cart/form_checkout.php" class="btn btn-block btn-outline-dark">Checkout</i></a></td>
						</tr>
					</tfoot>
				</table>
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
