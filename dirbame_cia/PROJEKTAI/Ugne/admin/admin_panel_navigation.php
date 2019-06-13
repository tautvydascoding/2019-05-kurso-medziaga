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

        <section class="container-fluid mt-5">
          <div class="row justify-content-center text-center m-5">
            <div class="col-12"><h4 class="font-weight-light">Delete navigation items</h4></div>
          </div>
          <div class="row" >
            <?php
                        $allItems = getMenu();

                        $item = mysqli_fetch_assoc($allItems);


                        while (  $item == true ) {
                          echo "<div class='col-5 m-4 text-center'><h5 class='font-weight-light'>" . $item['item'] . "</h5>";
                          echo "<form method='post' action='forms/action_form_deletemenu.php'><input type='hidden' name='id' value='" . $item['id'] . "' /><button type='submit'  class='btn btn-outline-dark w-50 m-3'>Delete item</button></form></div>";
                          $item = mysqli_fetch_assoc($allItems);
                        }
            ?>
          </div>
        </section>

        <section class="container-fluid mt-5 bg-light">
          <div class="row justify-content-center text-center m-5">
            <div class="col-12"><h4 class="font-weight-light mt-3">New navigation item</h4></div>
          </div>
          <div class="row" >
            <div class="col-12 form-group text-center ">

                    <form class="form-group row justify-content-center m-2" action="forms/action_form_createnavigation.php" method="post">
                      <div class="col-sm-10 m-3">
                        <input class="form-control" type="text" name="name" placeholder="Enter new navigation item name" required/>
                      </div>
                      <div class="col-sm-10 m-3">
                        <input class="form-control" type="text" name="link" placeholder="Enter link" required/>
                      </div>
                    <button type="submit"  class="btn btn-outline-dark w-25 m-3">Add navigation item</button>
                  </form>
            </div>
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