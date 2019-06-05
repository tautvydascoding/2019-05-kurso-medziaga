<?php
// print_r($_GET);
include('db_functions.php');
$nr = $_GET['nr'];
deleteDoctor($nr);
echo "<a href='admin.php'><button class = 'btn-primary'>Atgal</button></a>";

 ?>
