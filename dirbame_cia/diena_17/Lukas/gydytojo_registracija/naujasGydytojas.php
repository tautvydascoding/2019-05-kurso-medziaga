<?php

include('db_functions.php');
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);

echo "<a href='naujasGydytojas.php?vardas=Petras&pavarde=Petrauskis'> Kurti Nauja</a>";
