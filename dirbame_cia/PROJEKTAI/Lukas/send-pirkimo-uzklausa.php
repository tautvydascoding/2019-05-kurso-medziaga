<?php
include_once('libs/PHPMailer-master/PHPMailerAutoload.php'); // ikeliam mailer failus php mailer github
include_once('db_functions.php');
session_start();

$prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
$vard = mysqli_real_escape_string($prisijungimas, $_POST['vardas']);
$pavard = mysqli_real_escape_string($prisijungimas, $_POST['pavarde']);
$pastas = mysqli_real_escape_string($prisijungimas, $_POST['pastas']);
$gatve = mysqli_real_escape_string($prisijungimas, $_POST['gatve']);
$pastoKodas = mysqli_real_escape_string($prisijungimas, $_POST['kodas']);
$miestas = mysqli_real_escape_string($prisijungimas, $_POST['miestas']);
$kaina = mysqli_real_escape_string($prisijungimas, $_SESSION['kaina']);
$prekesPav = mysqli_real_escape_string($prisijungimas, $_SESSION['prekesPav']);
$t=time();
$PrekesID = $_SESSION['PrekesID'];
$zinute = 'Laba diena '. $vard . ' ' . $pavard . ', <br /> Ačiū, kad perkate iš ToyStory.lt. Jūs pateikėte užklausa norėdami nusipirkti ' . $prekesPav . '.<br />Norėdami užbaigti pirkimo procedūrą, prašome pervesti nurodyta sumą per 2 d.d. arba Jūsų užsakymas nebus vykdomas. <br /> Suma: ' . $kaina . ' Eur. <br />Bankas: SwedBank <br />Banko sąskaitos numeris: 0000111122224444 <br />Pagarbiai,<br />ToyStory.lt komanda.';
$zinuteCoded = mysqli_real_escape_string($prisijungimas, $zinute);
function newOrder() {
    $prisijungimas = mysqli_connect(DB_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);
    mysqli_set_charset($prisijungimas, 'utf8mb4');
    $PrekesID = $_SESSION['PrekesID'];
    $prekesPav = mysqli_real_escape_string($prisijungimas, $_SESSION['prekesPav']);
    $vard = mysqli_real_escape_string($prisijungimas, $_POST['vardas']);
    $pavard = mysqli_real_escape_string($prisijungimas, $_POST['pavarde']);
    $query = "INSERT INTO uzsakymai VALUES (null, '$PrekesID', '$prekesPav', '$vard', '$pavard', CURTIME())";
    $order = mysqli_query($prisijungimas, $query);
    return $order;
}
newOrder();
    $zinuteUzsakymas = 'Uzsakovo vardas: ' . $vard . '<br />Uzsakovo pavarde: ' .$pavard .  '<br />Adresas: ' . $gatve . ' ' . $pastoKodas . ' ' . $miestas . '<br />Prekės ID: ' . $PrekesID . '<br />Prekės pavadinimas: ' . $prekesPav . '<br />Prekės kaina: ' . $kaina . '<br />Užsakymo laikas: ' . date('Y-m-d H:i:s', $t);
    $zinuteUzsakymasCoded = mysqli_real_escape_string($prisijungimas, $zinuteUzsakymas);
if ($_POST == true && $_SESSION == true) {

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
        $mail->Subject = 'ToyStory prasymas pervesti lesas';
        $mail->Body    = $zinuteCoded;
        $mail->AltBody = $zinuteCoded;

        $mail->send();
        echo 'Užsakymas priimtas.<br />';
        echo '<a href="index.php"><button type="button" class="btn btn-success">Grįžti</button></a>';
        $mail->ClearAllRecipients();
        $mail->ClearReplyTos();
        $mail->ClearCustomHeaders();

        $mail->setFrom('story@toystory.lt', 'ToyStory');
        $mail->addAddress('frogfrog741852963@gmail.com', 'ToyStory');
        $mail->addReplyTo('story@toystory.lt');

        $mail->isHTML(true);
        $mail->Subject = 'Naujas uzsakymas';
        $mail->Body    = $zinuteUzsakymasCoded;
        $mail->AltBody = $zinuteUzsakymasCoded;
        $mail->send();


    } catch (Exception $e) {
        echo "Įvyko klaida apdorojant Jūsų užklausą. Bandykite vėl arba susisiekite su puslapio administracija.";
        echo '<a href="index.php"><button type="button" class="btn btn-success">Grįžti</button></a>';
    }
} else {
    echo "Trūksta duomenų. Bandykite vėl.";
    echo '<a href="index.php"><button type="button" class="btn btn-success">Grįžti</button></a>';
}

// try catch gaudo klaidas kurios yra try kode, jeigu klaida yra, tai vykdo catch ir ji saugo $e kintamajam.
