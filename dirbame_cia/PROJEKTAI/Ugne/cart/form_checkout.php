<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>
                          <!-- Nav-->
      <?php
            require_once('..\db_functions.php')
       ?>
       <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top ">
         <div class="container-fluid text-center">
           <a class="navbar-brand" href="..\index.php"><img class="logo img-responsive" src="..\img/logo-paint-me.png" /></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
           <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
               <?php
               session_start();
               $allmenu = getMenu(9);
               $item = mysqli_fetch_assoc($allmenu);

                 while (  $item == true ) {
                     echo "<li class='nav-item'><a class='nav-link' href='../" . $item['link'] . "?id=" . $item['id'] . "'>";
                     echo $item['item'] . "</a></li>";
                     $item = mysqli_fetch_assoc($allmenu);
                 }
                ?>
             </ul>
             <a class="btn btn-outline-dark my-2 my-sm-0 ml-3" href="..\cart.php?id=5">
               <i class="fas fa-shopping-cart"></i> <?php  echo $_SESSION['quantity'][0]; ?> / <?php
                 echo $_SESSION['total'][0]; ?> Eur</a>


                 <input class="form-control mr-sm-0 my-2 m-1 search" type="text" placeholder="Search">
                 <button class="btn btn-outline-dark my-2 my-sm-0 m-1" type="submit">Search</button>
           </div>
         </div>
       </nav>

                                       <!-- HEADER -->

       <header class="header-page">
         <div class="container h-100">
           <div class="row h-100 align-items-center">
             <div class="col-12 text-center">
               <h1 class="font-weight-light p-5"><span class="header-page-name ">Check out</span></h1>
             </div>
           </div>
         </div>
       </header>


                      <!-- Main -->
      <main class="container">
        <section class="py-5">
                  <div class="row ">
                    <div class="col-12">
                      <h5 class="font-weight-light text-center">Your order</h5>
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
                        $sessionCart = $_SESSION['cart'];
                        foreach ($sessionCart as $key) {
                          if (!empty($key)){
                            include('Checkout-cart-item.php');
                            array_push($totalPrice, getItem($key)['price']);

                          }
                        }

                     ?>
                    <tfoot>

                      <tr >
                        <td class="col-4"><a href="..\products.php?id=2" class="btn btn-outline-dark"></i>Shop more</a></td>

                        <td class=" text-center col-4"><strong>Total <?php
                        $totalPriceSum = array_sum($totalPrice);
                        echo $totalPriceSum;

                        $_SESSION['total'][0] = $totalPriceSum;
                        $_SESSION['quantity'][0] = count($totalPrice);
                        ?>
                          Eur</strong></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>

                    <div class="col-12">
                      <h5 class="font-weight-light text-center">Your details</h5>
                        <form class="form-group row justify-content-center" action="action_form_checkout.php" method="post">

                          <div class="col-sm-10 m-3">
                            <input type="hidden" name="totalprice" value="<?php echo $totalPriceSum; ?>" required/>
                          </div>

                          <div class="col-sm-10 m-3">
                            <input class="form-control" type="text" name="name" placeholder="Name" required/>
                          </div>

                          <div class="col-sm-10 m-3">
                            <input class="form-control" type="text" name="lname" placeholder="Last name" required/>
                          </div>

                          <div class="col-sm-10 m-3">
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required />
                          </div>

                          <div class="col-sm-10 m-3">
                            <input class="form-control" type="text" name="phone" placeholder="Phone number" required />
                          </div>

                          <div class="col-sm-10 m-3">
                            <input class="form-control" type="text" name="address" placeholder="Address" required />
                          </div>

                          <div class="col-sm-10 m-3">
                            <input class="form-control" type="text" name="city" placeholder="City" required />
                          </div>

                          <div class="col-sm-10 m-3">
                            <input class="form-control" type="text" name="country" placeholder="Country" required />
                          </div>

                        <div class="col-sm-10 m-3">
                          <textarea rows="4" cols="60" class="form-control" type="text" name="message" placeholder="Your message"></textarea>
                        </div>

                        <button type="submit"  class="btn btn-outline-dark w-50 m-3">Check out</button>
                      </form>
                  </div>
            </div>
        </section>

      </main>

                    <!-- Footer -->
      <footer>
            <?php include('..\footer.php'); ?>
      </footer>











        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="../js/main.js">     </script>
    </body>
</html>
