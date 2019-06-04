<?php




include('db_functions.php');

$vardas=$_GET['vardas'];
$pavarde=$_GET['pavarde'];


createDoctor($vardas, $pavarde);




 ?>

 <h2>Sveikinu priisjungete</h2>
