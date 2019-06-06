<html>
    <head>
        <meta charset="utf-8">
        <title>Paint mE shop</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>
                          <!-- Header -->

      <?php include('header_page.php');
            require_once('db_functions.php')
       ?>


                      <!-- Main -->
      <main class="container">
        <section class="py-5">
          <div class="">

                  <div class="form-group row ">

                    <form class="form-group row justify-content-center" action="form_contact.php" method="post">
                      <div class="col-sm-10 m-3">
                        <input class="form-control" type="text" name="name" placeholder="Name" required/>
                      </div>

                      <div class="col-sm-10 m-3">
                    <input class="form-control" type="email" name="email" placeholder="E-mail" required />
                      </div>

                    <div class="col-sm-10 m-3">
                      <textarea rows="4" cols="60" class="form-control" type="text" name="message" placeholder="Your message" required></textarea>
                    </div>

                    <button type="submit"  class="btn btn-outline-dark w-50 m-3">Send</button>
                  </form>

                </div>

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
