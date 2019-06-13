<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="..\css/main.css">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>


      <?php
      require_once('..\db_functions.php');

       ?>

                     <!--_____________ NAVIGATION ______________-->
       <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
         <div class="container">
           <a class="navbar-brand" href="admin_panel.php"><img class="logo img-responsive" src="..\img/logo-paint-me.png" /></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
           <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                 <a class="nav-link" href="admin_panel_products.php">Products</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="admin_panel_about.php">About</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="admin_panel_navigation.php">Navigation</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="admin_panel_users.php">Users</a>
               </li>

           </ul>
         </div>
       </div>
     </nav>

                  <!--_____________ HEADER ______________-->

       <header class="header-page">
         <div class="container h-100">
           <div class="row h-100 align-items-center">
             <div class="col-12 text-center">
               <h1 class="font-weight-light p-5"><span class="header-page-name ">Admin panel</span></h1>
             </div>
           </div>
         </div>
       </header>





      <main class="container mt-5">

              <!--_____________PRODUCTS______________-->

        <section class="container-fluid mt-5" id="products">
          <div class="row justify-content-center text-center m-5">
            <div class="col-12"><h4 class="font-weight-light">Products</h4></div>
          </div>

          <!--_____________Products list ______________-->

          <div class='row m-3 justify-content-center '>

              <button type="submit"  class="btn btn-outline-dark w-50 m-3" ><a href="forms/form_createitem.php">CREATE NEW PRODUCT</a></button>


              <?php

              $allItems = getItems( 40 );

              $item = mysqli_fetch_assoc($allItems);


              while (  $item == true ) {
                echo "<div class='col-lg-5 m-4 col-md-12'><a href='admin_template_product.php?id=" . $item['id'] . "'>";
                echo "<img class='item-img img-responsive img-thumbnail' src='../img/" . $item['thumbnail'] . "'>";
                echo "<div class= 'col-12 text-center m-2 text-dark'><h4 class='font-weight-light card-title'>\"" . $item['name'] . "\"</h4>";
                echo "<h5 class='font-weight-light'>" . $item['price'] . " Eur</h5></div>";
                echo "</div></a>";
                $item = mysqli_fetch_assoc($allItems);
              }

              ?>
              </div>


        </section>

      </main>








        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script type="text/javascript" src="..\js/main.js">     </script>
    </body>
</html>
