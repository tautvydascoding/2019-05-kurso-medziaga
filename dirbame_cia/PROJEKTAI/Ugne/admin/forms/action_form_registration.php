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
                    array_push($errors, "E-mail already exists");
                  }
                }

                // Registruojam jei ner klaidu
                if (count($errors) == 0) {
                	$password = md5($psw);
                	$query = "INSERT INTO users
                			       VALUES(null, '$name', '$email', '$password');";
                	mysqli_query($loginDB, $query);



                  // Kuriam e-mail su duomenimis
              $message = "Hello, " . $name . " Thank you for new user registration.<br />
              Your login details:<br />" .
              "<br />E-mail: " . $email .
              "<br />Password: " . $psw;

              include_once('..\..\libs/PHPMailer-master/PHPMailerAutoload.php');

              // Instantiation and passing `true` enables exceptions
              $mail = new PHPMailer(true);

              try {
                  $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                );
                $mail->Host = 'tls://smtp.gmail.com:587';
                $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;
                $mail->CharSet = 'UTF-8';                                     // TCP port to connect to

                //Server settings
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP

                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'ugne.gaja@gmail.com';                 // SMTP username
                $mail->Password = 'labadiena';

                  //Recipients
                  $mail->setFrom('from@example.com', 'Paint me shop');
                  $mail->addAddress($email, $name);     // Add a recipient

                  // Content
                  $mail->isHTML(true);                                  // Set email format to HTML
                  $mail->Subject = 'USER registration at Paint me shop';
                  $mail->Body    = $message;
                  $mail->AltBody = $message;

                  $mail->send();

                  echo "<div class='alert text-center alert-success w-50 m-5' role='alert'><strong>Well done!</strong> User registered successfully. Your login details had been sent to your e-mail. </div>";
              } catch (Exception $e) {
                  echo "<div class='alert text-center alert-danger w-50 m-5' role='alert'><strong>Something went wrong!</strong> Message could not be sent. Mailer Error:  {$mail->ErrorInfo}</div>";
              }
            } else {

            $printErrors = implode("<br />", $errors);
            header("Location: ..\admin_panel_users.php?errors=$printErrors");


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
