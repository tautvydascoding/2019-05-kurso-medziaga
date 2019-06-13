<?php
include_once('db_functions.php');
$nr = $_GET["id"];
deletePrekeMergaitems($nr);
echo "<script type='window.location = document.referrer</script>";
?>
