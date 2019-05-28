<?php
$i = 0;
$br = "<br />";
switch ($i) {
    case 0:
        echo "i equals 0 $br";
        break;

    case 1:
        echo "i equals 1 $br";
        break;
    default:
        echo "default $br";
        break;
}

$vartotojoTipas = "admin"; // moderator, subscriber


switch ($vartotojoTipas) {
    case 'admin':
        echo "Sveiks admine $br";
        echo "lets have fun $br";
        break;
    case 'moderator':
        echo "Sveiks moderatoriau $br";
        echo "lets have fun $br";
        break;
    case 'subscriber':
        echo "Sveiks subscriberi $br";
        echo "lets have fun $br";
        break;

    default:
        echo "Sveiks nary $br";
        echo "lets have fun $br";
        break;
}

 ?>
