<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="..\libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="..\css/main.css">
    </head>
    <body>

      <?php
      session_start();
      $id = $_GET['id'];
      $sessionCart = $_SESSION['cart'];

      if(empty($_SESSION['cart'])){   // ar tuscias? Kad neistrintu senu pasirinkimu
          $_SESSION['cart'] = array();
          array_push($_SESSION['cart'], $id);
        } else if (!in_array($id, $sessionCart)){
          array_push($_SESSION['cart'], $id);
        }

        header("Location: ..\cart.php?id=5");
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
       <a  href="..\index.php" class="btn btn-outline-dark w-50 mb-5">Back to home page</a>
</div>








        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="..\js/main.js">     </script>
    </body>
</html>
