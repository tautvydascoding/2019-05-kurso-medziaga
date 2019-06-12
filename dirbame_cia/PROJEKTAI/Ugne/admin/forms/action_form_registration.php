<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="..\..\libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="..\..\css/main.css">
    </head>
    <body>
      <?php
      require_once('..\..\db_functions.php');
      $errors = [];

      if (isset($_POST['reg_user'])) {
        $name = mysqli_real_escape_string($loginDB, $_POST['name']);
        $email = mysqli_real_escape_string($loginDB, $_POST['email']);
        $psw = mysqli_real_escape_string($loginDB, $_POST['psw']);
        $pswrepeat = mysqli_real_escape_string($loginDB, $_POST['pswrepeat']);

            if ($psw != $pswrepeat) {
          	array_push($errors, "The two passwords do not match");
            }


                //Tikrinam ar neegsiztuoja toks vartotojas
                $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
                $result = mysqli_query($loginDB, $user_check_query);
                $user = mysqli_fetch_assoc($result);

            if ($user) { // jeigu egzistuoja toks email
                  if ($user['email'] === $email) {
                    array_push($errors, "Username already exists");
                  }
                }

                // Finally, register user if there are no errors in the form
                if (count($errors) == 0) {
                	$password = md5($psw);
                	$query = "INSERT INTO users
                			       VALUES(null, '$name', '$email', '$password');";
                	mysqli_query($loginDB, $query);
                  
                }
              }
          ?>

       <div class="row justify-content-center">
         <a  href="..\admin_panel_users.php" class="btn btn-outline-dark w-50 mb-5">Back to admin panel</a>
       </div>



<!-- echo "<div class='alert text-center alert-success w-50 m-5' role='alert'><strong>Well done!</strong> Item added to database.</div>";

echo "<div class='alert text-center alert-danger w-50 m-5' role='alert'><strong>Something went wrong!</strong> Item not added to the database. </div>"; -->




        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="..\..\js/main.js">     </script>
    </body>
</html>
