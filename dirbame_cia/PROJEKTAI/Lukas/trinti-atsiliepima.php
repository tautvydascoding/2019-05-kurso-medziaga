<?php
include_once('db_functions.php');
$nr = $_GET["id"];
deleteAtsiliepimas($nr);
echo "<script type='window.location = document.referrer</script>";
?>
