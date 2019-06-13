<?php
// print_r($_POST);


$vardas = $_POST['name'];
$elPastas = $_POST['email'];
$tema = $_POST['subject'];
$klausimas = $_POST['message'];

include_once('db_functions.php');
createUzklausa( $vardas, $elPastas, $tema, $klausimas);

include_once('libs/PHPMailer-master/PHPMailerAutoload.php');

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
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
    $mail->Username = 'atsarginis.litvaitis@gmail.com';                 // SMTP username
    $mail->Password = 'kaunascoding';                 // SMTP password

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('atsarginis.litvaitis@gmail.com', $vardas);     // Add a recipient
    $mail->addReplyTo($elPastas, 'WEB puslapiu kurejai');

    // Attachments


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $tema;
    $mail->Body    = $klausimas;
    $mail->AltBody = $klausimas;

    $mail->send();
    echo '<h2>Užklausa išsiųsta sėkmingai</h2>';
    echo "<a href='index.php'><button class='btn-siusti'>Atgal</button></a>";
} catch (Exception $e) {
    echo "<h2>Užklausos išsiųsti nepavyko.</h2> Mailer Error: {$mail->ErrorInfo}";
}
?>
