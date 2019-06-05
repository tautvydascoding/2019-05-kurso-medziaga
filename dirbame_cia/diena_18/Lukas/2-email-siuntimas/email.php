<?php

//print_r($_POST); // test ar veikia

//
$vard = $_POST['name'];
$pastas = $_POST['mail'];
$klausimas = $_POST['klausimas'];

//echo "$vard  $pastas  $klausimas"; // test ar veikia

// mail($to, $subject, $message [, $additional_headers, $additional_parameters]) // galima naudoti jeigu turime tikra serveri

include_once('libs/PHPMailer-master/PHPMailerAutoload.php'); // ikeliam mailer failus php mailer github

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true); // mail komanda

try {
    // su -> i php objekta dedamos reiksmes.
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
       $mail->SMTPDebug = 3; //0 nerodys kvailu zinuciu klientui. Jos reikalingos tik programuojant. neverta naudot tokio ilgo debugo kaip 3. // Enable verbose debug output
       $mail->isSMTP();                                      // Set mailer to use SMTP

       $mail->SMTPAuth = true;                               // Enable SMTP authentication
       $mail->Username = 'frogfrog741852963@gmail.com';                 // SMTP username
       $mail->Password = 'A552188a';                 // SMTP username

    //Recipients
    $mail->setFrom('teleleloto@gmail.com', 'Teleleto');
    $mail->addAddress('frogfrog741852963@gmail.com', $vard); // is kur siusi     // (kintamieji php neveikia viengubuose kabutese) Add a recipient
    $mail->addReplyTo($pastas, 'Labs zmogiuk');
    //nematys, kad daugiau kaip viena pridejai.

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klausimas';
    $mail->Body    = $klausimas; // naujom pasto dezutem
    $mail->AltBody = $klausimas; // senovinem pasto dezutem

    $mail->send();
    echo 'Laiskas issiustas sekmingai';
} catch (Exception $e) {
    echo "<h2 class='bg-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h>";
}
// try catch gaudo klaidas kurios yra try kode, jeigu klaida yra, tai vykdo catch ir ji saugo $e kintamajam.
