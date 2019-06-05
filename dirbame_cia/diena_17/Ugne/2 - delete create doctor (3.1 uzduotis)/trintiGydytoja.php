<?php
include('db_functions.php');
$id = $_GET['id'];
deleteDoctor($id);
echo "Ištrintas gydytojas Nr.: " . $id; 

 ?>
