<?php
require_once('db_functions.php');
$di = $_GET['id'];
$doctor = getDoctor($di);

echo "<h3> Gydytojo id: " . $doctor['id'] . "</h3><br />";
echo "<h3> Gydytojo vardas: " . $doctor['name'] . "</h3><br />";
echo "<h3> Gydytojo pavarde: " . $doctor['lname'] . "</h3><br />";

?>
