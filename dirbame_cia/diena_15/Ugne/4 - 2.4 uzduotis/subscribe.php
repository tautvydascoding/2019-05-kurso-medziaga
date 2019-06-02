<?php
if ( empty($_GET['email']) == false ){
    $x = $_GET['email'];
    echo "Your e-mail " . $x . " was submitted!<hr />";
} else {
    echo "E-mail was not submitted";
}
 ?>
