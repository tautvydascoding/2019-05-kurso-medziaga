<?php
include_once('libs/PHPMailer-master/PHPMailerAutoload.php'); // ikeliam mailer failus php mailer github
include_once('db_functions.php');

$prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
print_r($_POST);
$vard = mysqli_real_escape_string($prisijungimas, $_POST['name']);
$pastas = mysqli_real_escape_string($prisijungimas, $_POST['mail']);
$tema = mysqli_real_escape_string($prisijungimas, $_POST['tema']);
$klausimas = mysqli_real_escape_string($prisijungimas, $_POST['zinute']);
$t=time();

function newUzklausa() {
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    mysqli_set_charset($prisijungimas, 'utf8mb4');
    $vard = mysqli_real_escape_string($prisijungimas, $_POST['name']);
    $pastas = mysqli_real_escape_string($prisijungimas, $_POST['mail']);
    $tema = mysqli_real_escape_string($prisijungimas, $_POST['tema']);
    $klausimas = mysqli_real_escape_string($prisijungimas, $_POST['zinute']);
    $t=time();
    $query = "INSERT INTO klausimai VALUES (null, '$vard', '$pastas', '$tema', '$klausimas', CURTIME())";
    $order = mysqli_query($prisijungimas, $query);
}
newUzklausa();

    $zinuteUzklausa = 'Vardas: ' . $vard . '<br />El. pašto adresas: ' .$pastas . '<br />Tema: ' . $tema . '<br />Klausimas: ' . $klausimas . '<br />Data: ' . date('Y-m-d H:i:s', $t);
    $zinuteUzklausaCoded = mysqli_real_escape_string($prisijungimas, $zinuteUzklausa);
if ($_POST == true) {

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
           $mail->SMTPSecure = 'ssl';
           $mail->Port = 465;


           $mail->SMTPDebug = 0;
           $mail->isSMTP();

           $mail->SMTPAuth = true;
           $mail->Username = 'frogfrog741852963@gmail.com';
           $mail->Password = 'A552188a';
        //Recipients
        $mail->setFrom('story@toystory.lt', 'ToyStory');
        $mail->addAddress($pastas, $vard);
        $mail->addReplyTo('story@toystory.lt');



        $mail->isHTML(true);
        $mail->Subject = $tema;
        $mail->Body    = $zinuteUzklausaCoded;
        $mail->AltBody = $zinuteUzklausaCoded;

        $mail->send();
        header("Location: index.php");
    } catch (Exception $e) {
        echo "Įvyko klaida apdorojant Jūsų užklausą. Bandykite vėl arba susisiekite su puslapio administracija.";
        echo '<a href="index.php"><button type="button" class="btn btn-success">Grįžti</button></a>';
    }
} else {
    echo "Trūksta duomenų. Bandykite vėl.";
    echo '<a href="index.php"><button type="button" class="btn btn-success">Grįžti</button></a>';
}

// try catch gaudo klaidas kurios yra try kode, jeigu klaida yra, tai vykdo catch ir ji saugo $e kintamajam.
