<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <?php include('nav.php');
      require_once('db_functions.php');
       ?>


      <header class="header-page">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="font-weight-light p-5">
                <span class="header-page-name ">Thank you!</span></h1>
            </div>
          </div>
        </div>
      </header>
<div class="row justify-content-center">
      <?php


      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      createMessage( $name, $email, $message);
      echo "
      <div class='alert text-center alert-success w-50 m-5' role='alert'>
          <strong>Well done!</strong> Your message was sent successfully! We will get in touch with you soon.</div>";


       ?>

       <button type="submit"  class="btn btn-outline-dark w-50 mb-5">Back to home page</button>

</div>







        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
