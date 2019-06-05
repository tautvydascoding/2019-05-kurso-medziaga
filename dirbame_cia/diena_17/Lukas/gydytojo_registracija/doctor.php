<?php
include("db_functions.php");
$daktaras = getDoctor($_GET['nr']);
echo "<h2>Gydytojo numeris DB: " . $daktaras['id'] . "</h2>";
echo "<h3>Gydytojas: " . $daktaras['name'] . " " . $daktaras['lname'] . "</h3>";
?>
<a href = "trintiGydytoja.php?nr=<?php echo $daktaras['id'] ?>"><button class= 'btn-primary'>Trinti</button></a>
