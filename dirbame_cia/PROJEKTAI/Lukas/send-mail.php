<?php
include_once('libs/PHPMailer-master/PHPMailerAutoload.php'); // ikeliam mailer failus php mailer github
include_once('db_functions.php');

$prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
$vard = mysqli_real_escape_string($prisijungimas, $_POST['name']);
$pastas = mysqli_real_escape_string($prisijungimas, $_POST['mail']);
$atsiliepimas = mysqli_real_escape_string($prisijungimas, $_POST['klausimas']);

if (!empty($vard) && !empty($pastas) && !empty($atsiliepimas)) {

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
           $mail->SMTPDebug = 0; //0 nerodys kvailu zinuciu klientui. Jos reikalingos tik programuojant. neverta naudot tokio ilgo debugo kaip 3. // Enable verbose debug output
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
        $mail->Body    = $atsiliepimas; // naujom pasto dezutem
        $mail->AltBody = $atsiliepimas; // senovinem pasto dezutem

        $mail->send();
        echo 'Atsiliepimas priimtas. Ačiū už Jūsų laiką.';
    } catch (Exception $e) {
        echo "<h2 class='bg-danger'>Atsiliepimo išsiūsti nepavyko. Klaida: {$mail->ErrorInfo}</h>";
    }
} else {
    echo "Jūsų laiškas neišsiūstas. Prašome užpildyti visus laukus ir bandyti vėl. ";
}

// try catch gaudo klaidas kurios yra try kode, jeigu klaida yra, tai vykdo catch ir ji saugo $e kintamajam.
