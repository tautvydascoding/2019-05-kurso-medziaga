<?php

require_once('db_functions.php');
$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
createDoctor($vardas, $pavarde);

 ?>
 <h2> Registracija sekminga </h2>
