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
               <h1 class="font-weight-light p-5"><span class="header-page-name ">Users</span></h1>
             </div>
           </div>
         </div>
       </header>





      <main class="container mt-5">

        <section class="container-fluid mt-5 bg-light">
          <div class="row justify-content-center text-center m-5">
            <form action="forms/action_form_registration.php" class="form-group row justify-content-center m-2" method="post">
              <div class="col-sm-10 m-3 text-center" >
                <p id="regerrors"><?php if(!empty($_GET['errors'])){
                echo $_GET['errors'];} ?>
                </p>
              </div>

                <div class="col-sm-10 m-3">
                    <label class="font-weight-light" for="email"><b>Name</b></label>
                    <input class="form-control" type="text" placeholder="Enter your name" name="name" required>
                </div>

                <div class="col-sm-10 m-3">
                    <label class="font-weight-light" for="email"><b>Email</b></label>
                    <input class="form-control" type="email" placeholder="Enter email" name="email" required>
                </div>

                <div class="col-sm-10 m-3">
                    <label class="font-weight-light" for="psw"><b>Password</b></label>
                    <input class="form-control" type="password" placeholder="Enter password" name="psw" required>
                </div>

                <div class="col-sm-10 m-3">
                    <label class="font-weight-light" for="psw-repeat"><b>Repeat Password</b></label>
                    <input class="form-control" type="password" placeholder="Repeat password" name="pswrepeat" required>
                </div>


                <button type="submit" class="btn btn-outline-dark w-50 m-3" name='reg_user'>Register new user</button>
              </div>
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
