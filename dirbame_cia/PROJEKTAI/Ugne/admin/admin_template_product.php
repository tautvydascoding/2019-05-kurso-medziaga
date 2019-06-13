<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="..\libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="..\css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>
                          <!-- Header -->

      <?php
      require_once('..\db_functions.php');

       ?>

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


       <header class="header-page">
         <div class="container h-100">
           <div class="row h-100 align-items-center">
             <div class="col-12 text-center">
               <h1 class="font-weight-light p-5"><span class="header-page-name ">Edit product</span></h1>
             </div>
           </div>
         </div>
       </header>


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

        <section class="container-fluid mt-5 bg-light">
              <div class="row">


                      <!--______________________________ Update item__________________________________ -->
                  <div class= "col-12 justify-content-center text-center mt-3">
                    <h5 class="">Update product</h5>

                      <form class="form-group row justify-content-center bg-light" action="forms/action_form_updateitem.php" method="post">

                        <input type="hidden" name="id" value="<?php
                          $id = $_GET['id'];
                          echo getItem($id)['id'];    ?>" />

                        <div class="col-sm-10 m-3">
                          <input class="form-control" type="text" name="name" value="<?php
                            $id = $_GET['id'];
                            echo getItem($id)['name']; ?>" required/>
                        </div>

                        <div class="col-sm-10 m-3">
                              <textarea rows="4" cols="60" class="form-control" type="text" name="description"
                              required><?php
                                $id = $_GET['id'];
                                echo getItem($id)['description'];  ?></textarea>
                        </div>

                        <div class="col-sm-10 m-3">
                          <input class="form-control" type="number" min="1" max="1000" name="price" value="<?php
                            $id = $_GET['id'];
                            echo getItem($id)['price'];    ?>" required/>
                        </div>

                        <div class="col-sm-10 m-3">
                          <input class="form-control" type="text" name="imgname" value="<?php
                            $id = $_GET['id'];
                            echo getItem($id)['imgname'];    ?>" required/>
                        </div>

                        <div class="col-sm-10 m-3">
                          <input class="form-control" type="text" name="thumbname"
                          value="<?php
                            $id = $_GET['id'];
                            echo getItem($id)['thumbnail'];    ?>"  required/>
                        </div>


                          <button type="submit"  class="btn btn-outline-dark w-50 m-3">Update item</button>

                    </form>
                  </div>

                  <!--______________________________ Delete item__________________________________ -->

                <div class="col-md-5 justify-content-center text-center m-3">
                    <form  action="forms/action_form_deleteitem.php" method="post" >
                      <input type="hidden" name="id" value="<?php
                        $id = $_GET['id'];
                        echo getItem($id)['id'];    ?>" />
                        <button type="submit"  class="btn btn-outline-dark w-50 m-3 bg-danger">Delete item</button>
                    </form>
                  </div>

               <!--______________________________ Upload image__________________________________ -->

                <div class="col-md-6 justify-content-center text-center m-3">
                  <form class="w-75 row justify-content-center" action="forms\upload.php" method="post" enctype="multipart/form-data">
                      <h5 class="">Upload image</h5><br />
                      <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                      <input class="form-control" type="submit" value="Upload Image" name="submit">
                  </form>
                </div>

              </div>

        </section>



      </main>



        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="..\js/main.js">     </script>
    </body>
</html>
