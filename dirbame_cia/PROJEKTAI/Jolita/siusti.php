<?php
require_once('db_functions.php');

$a = $_GET['name'];
$b = $_GET['email'];
$c = $_GET['subject'];
createQuestion("$a", "$b", "$c");

?>
<h2>Ačiū už klausimą, mes su Jumis susisieksime</h2>
<a  href="index.php" class="btn btn-outline-dark w-50 mb-5">Grįžti į pagrindinį puslapį</a>
