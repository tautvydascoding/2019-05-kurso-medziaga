<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="..\../libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="..\..\css/main.css">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>


      <?php
      require_once('..\..\db_functions.php');

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
            <div class="col-12"><h4 class="font-weight-light">Create new product</h4></div>
          </div>

          <!--_____________CREATE ITEM ______________-->

          <div class="row">

                    <div class="col-12 form-group">

                            <form class="form-group row justify-content-center m-2" action="action_form_createitem.php" method="post">
                              <div class="col-sm-10 m-3">
                                <input class="form-control" type="text" name="name" placeholder="Item name" required/>
                              </div>

                              <div class="col-sm-10 m-3">
                                <textarea rows="4" cols="60" class="form-control" type="text" name="description" placeholder="Description" required></textarea>
                              </div>

                              <div class="col-sm-10 m-3">
                                <input class="form-control" type="text" name="price" placeholder="Price" required/>
                              </div>

                              <div class="col-sm-10 m-3">
                                <input class="form-control" type="text" name="imgname" placeholder="Image name" required/>
                              </div>

                              <div class="col-sm-10 m-3">
                                <input class="form-control" type="text" name="thumbnail" placeholder="Thumbnail name" required/>
                              </div>

                            <button type="submit"  class="btn btn-outline-dark w-50 m-3">Add new item</button>
                            <div class="col-sm-10 m-3">
                                <form class="w-75 row justify-content-center" action="upload.php" method="post" enctype="multipart/form-data">
                                    <h5 class="">Upload image</h5><br />
                                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                                    <input class="form-control" type="submit" value="Upload Image" name="submit">
                                </form>
                            </div>
                          </form>
                            <!--_____________Upload button ______________-->




              </div>
          </div>
        </section>

      </main>








        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script type="text/javascript" src="..\..\js/main.js">     </script>
    </body>
</html>
