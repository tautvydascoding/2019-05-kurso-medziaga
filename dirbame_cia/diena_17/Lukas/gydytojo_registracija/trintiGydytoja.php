<?php
include('db_functions.php');
$numeris = $_GET['nr'];
print_r($numeris);
deleteDoctor($numeris);
echo "<a href='index.php'><button class = 'btn-primary'>Atgal</button></a>";


// keliant faila, galima neuzdaryti php taip apsisaugant nuo dizaino gadinimo. Bet tik tuo metu jeigu html nenaudoji.
