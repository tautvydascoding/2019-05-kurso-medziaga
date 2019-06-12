<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="..\libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="..\css/main.css">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>


      <?php
      require_once('..\db_functions.php');

       ?>


                  <!--_____________ HEADER ______________-->

       <header class="header-page">
         <div class="container h-100">
           <div class="row h-100 align-items-center">
             <div class="col-12 text-center">
               <h1 class="font-weight-light p-5"><span class="header-page-name ">LOGIN</span></h1>
             </div>
           </div>
         </div>
       </header>





      <main class="container mt-5">

              <!--_____________PRODUCTS______________-->

        <section class="container-fluid mt-5 " id="products">


          <!--_____________login ______________-->

          <div class="row text-center">
                    <div class="col-12 form-group text-center">
                        <h5 class="">Login</h5>
                        <div class="row justify-content-center">

                          <form class="form-group row justify-content-center bg-light" id='login' action='login.php' method='post'>
                            <div class="col-sm-10 m-3">
                              <input class="form-control" type="email" name="email" placeholder="E-mail" required/>
                            </div>

                            <div class="col-sm-10 m-3">
                              <input class="form-control" type="password" name="password" required/>
                            </div>

                          <button type="submit"  class="btn btn-outline-dark w-50 m-3">Login</button>
                        </form>

                      </div>
                    </div>
                  </div>

        </section>

      </main>








        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </script>
        <script type="text/javascript" src="..\js/main.js">     </script>
    </body>
</html>
