<?php
include_once('db_functions.php');
$nr = $_GET["id"];
deletePrekeBerniukams($nr);
echo "<script type='window.location = document.referrer</script>";
?>
