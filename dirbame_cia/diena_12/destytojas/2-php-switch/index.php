<?php

$vartojoTipas = "moderator"; // moderator subscriber
switch ($vartojoTipas) {
    case 'admin':
        echo "labas Admin!";
        echo "tu cia vadas";
        break;
    case 'moderator':
        echo "labas moderator!";
        echo "tu visiems padesi";
        break;
    case 'subscriber':
        echo "labas vartotojau - ka siandien parasysi";
        break;

    default:
        echo "labas hacker'i ";
        break;
}
// paduoti varda ir Jeigu jis lygus:
// "audi" - atspausdinti "Susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "Susimastykite apie naujus priedus"

$automobilis = "audi";
switch ($automobilis) {
    case 'audi':
        echo "Susimastykite apie variklio prieziura";
        break;
    case 'BMW':
        echo "Susimastykite apie greiti ir vairavimo kultura";
        break;
    case 'opel':
        echo "Susimastykite apie naujus priedus";
        break;
    default:
        echo "tokio modelio nebetaisome";
        break;
}

 ?>
 
