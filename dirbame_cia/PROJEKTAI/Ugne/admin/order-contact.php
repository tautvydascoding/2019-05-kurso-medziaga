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



       <?php
       $id = $_POST['id'];
       $order = getOrder($id);
        ?>

      <main class="container mt-5">

              <!--_____________title______________-->

        <section class="container-fluid mt-5" id="products">
          <div class="row justify-content-center text-center m-5">
            <div class="col-12"><h4 class="font-weight-light">Shipping info for order id: <?php echo $order['id'];?></h4></div>
          </div>

          <!--_____________Contact info for order ______________-->


              <div class="row justify-content-center">
                    <div class="col-10">
                            <h5 class="nomargin font-weight-light"><strong>Name:</strong> <?php
                              echo $order['name'];?></h5>
                    </div>

                    <div class="col-10">
                              <h5 class="nomargin font-weight-light"><strong>Last name:</strong> <?php
                              echo $order['lname'];?></h5>
                    </div>

                    <div class="col-10">
                              <h5 class="nomargin font-weight-light"><strong>Email:</strong> <?php
                              echo $order['email'];?></h5>
                    </div>

                    <div class="col-10">
                              <h5 class="nomargin font-weight-light"><strong>Phone:</strong> <?php
                              echo $order['phone'];?></h5>
                    </div>

                    <div class="col-10">
                              <h5 class="nomargin font-weight-light"><strong>Address:</strong> <?php
                              echo $order['address'];?></h5>
                    </div>


                    <div class="col-10">
                              <h5 class="nomargin font-weight-light"><strong>City:</strong> <?php
                              echo $order['city'];?></h5>
                    </div>

                    <div class="col-10">
                              <h5 class="nomargin font-weight-light"><strong>Country:</strong> <?php
                              echo $order['country'];?></h5>
                    </div>

                    <div class="col-10">
                              <h5 class="nomargin font-weight-light"><strong>Message:</strong> <?php
                              echo $order['message'];?></h5>
                    </div>

              <a  href="admin_panel.php" class="btn btn-outline-dark w-50 mb-5">Back to orders</a>
    </section>

</main>







        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script type="text/javascript" src="..\js/main.js">     </script>
    </body>
</html>
