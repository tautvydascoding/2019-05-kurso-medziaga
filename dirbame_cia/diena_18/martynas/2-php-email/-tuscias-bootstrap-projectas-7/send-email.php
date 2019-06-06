<?php

// print_r($_POST);


$name=$_POST['name'];
$email=$_POST['email'];
$klausimas=$_POST['klausimas'];

// echo "$name $email $klausimas <br/>";


include_once('libs/PHPMailer-master/PHPMailerAutoload.php');

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

// try {
//     $mail->SMTPOptions = array(
//       'ssl' => array(
//       'verify_peer' => false,
//       'verify_peer_name' => false,
//       'allow_self_signed' => true
//       )
//   );
//   $mail->Host = 'tls://smtp.gmail.com:587';
//   $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
//   $mail->Port = 465;                                      // TCP port to connect to
//
//   //Server settings
//   $mail->SMTPDebug = 0;                                 // Enable verbose debug output
//   $mail->isSMTP();                                      // Set mailer to use SMTP
//
//   $mail->SMTPAuth = true;                               // Enable SMTP authentication
//   $mail->Username = 'ugne.gaja@gmail.com';                 // SMTP username
//   $mail->Password = 'labadiena';
//
//     //Recipients
//     $mail->setFrom('from@example.com', 'Mailer');
//     $mail->addAddress('ugne.gaja@gmail.com', $name);     // Add a recipient
//     $mail->addReplyTo($email, 'Paint me shop');
//
//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Question from Paint me shop';
//     $mail->Body    = $klausimas;
//     $mail->AltBody = $klausimas;
//
//     $mail->send();
//     echo "<div class='alert text-center alert-success w-50 m-5' role='alert'><strong>Well done!</strong> Your message was sent successfully! We will get in touch with you soon.</div>";
// } catch (Exception $e) {
//     echo "<div class='alert text-center alert-danger w-50 m-5' role='alert'><strong>Something went wrong!</strong> Message could not be sent. Mailer Error:  {$mail->ErrorInfo}</div>";
// }



try {
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais

        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
        $mail->Host = 'tls://smtp.gmail.com:587';
        $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                      // TCP port to connect to

        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP

        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'testinisWDmailas@gmail.com';
        $mail->Password = 'bandauWD12';                // SMTP username                             // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('testinisWDmailas@gmail.com', $name);     // Add a recipient               // Name is optional
    $mail->addReplyTo($email, 'Web puslapio kurejai');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klauimas';
    $mail->Body    = $klausimas;
    $mail->AltBody = $klausimas;

    $mail->send();
    echo '<h2>Laiskas issiustas sekmingai</h2>';
} catch (Exception $e) {
    echo "<h2 class='bg-danger'>Laiskas neissiustas</h2> Error: {$mail->ErrorInfo}";
}


 ?>
