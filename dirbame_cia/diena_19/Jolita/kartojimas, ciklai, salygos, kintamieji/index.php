<?php
for ($i=0; $i < 5; $i++) {
    echo $i."<br/>";
}

for ($i=0; $i < 100; $i++) { //spausdintu 0-99
    echo $i;
    if ($i==5) {
        break; //kai i=5 salyga true ir ciklas nutraukiamas, daugiau nebespausdina, ats:012345
    }
}

echo "<hr/>";

for ($i=0; $i < 6; $i++) {
    if ($i%2==0) {
        continue;//nutraukia, persoka per viena operacija,
        //taip tiesa, liekana nulis, continue for ciklas
        //tik tada kai salyga false, echo'ina, vadinasi atsakymas 135
    }
    echo $i;
}
echo "<hr/>";
for ($i=0; $i < 100; $i++) {

    if ($i==5) {
        break; //kai i=5 salyga true ir ciklas nutraukiamas
    }
    echo $i;//5 jau nebespausdins
}
echo "<hr/>";
for ($i=0; $i < 5; $i++) {

}
echo $i;//uz ciklo ribu, vadinasi grazins paskutine reiksme, prasisukus ciklui
echo "<hr/>";
for ($i=3; $i < 5; $i++) {
    echo $i; //grazina3 ir 4, pradine reiksme ir +1, kol tenkinama salyga reiksmes
}
echo $i; //grazina galutine reiksme ciklui prasisukus i=5, not treu, bet issaugoma reiksme
echo "<hr/>";
for ($i=10; $i > 8; $i--) { //10 true, print, minus vienas, 9 true, print....
    echo $i;
}
echo $i; //grazina 8, paskutine, galutine reiksme, prasisukus ciklui
echo "<hr/>";
for ($i=0; $i < 6 ; $i+=2) { //pradine reiksme nulis, dideja po +2 kas cikla
    echo $i; //0   2  4  o 6jau ne treu
}
echo "<hr/>";
for ($i=0; $i <0 ; $i++) { //0 ne maziau uz nuli, nera true, nieko nevykdys
    echo $i;
}
echo "<hr/>";
for ($i=0; $i < 4; $i++) {

    if ($i==2) {
        break; //break sustabdo cikla, daugiau nebevyksta, nebesisuka
        //(tuo tarpu continue kai true persoka viena veiksma zemiau, tesia, kas virsuje )
    }
    echo $i; //0, 1, 2if'e true, stabdomas ciklas
}
echo "<hr/>";
for ($i=0; $i < 6; $i++) {
    echo $i;           //atspausdins 012345
    if ($i===1) {
        continue; //toliau kodo nera, vadinisa nei viena eilute nebus praleis vykdyti
    }
}
echo "<hr/>";
for ($i=0; $i < 4; $i++) {
    if ($i===2) {
        break;
    }
    echo $i; //0,1,2-nutraukiu
}
echo "<hr/>";
for ($i=0; $i < 3; $i++) {
    $i++;
    echo $i; //0 maziau uz 3, pridedu 1, spausdinu 1;
    //pridedu 1 tikrinu 2 maziau uz 3, pridedu 1, spausdinu 3, pridedu, tikrinu, false

}
echo "<hr/>";
for ($i=0; $i < 3; $i++) {
    echo $i;
    echo $i;
} //spausdina 001122
echo "<hr/>";
for ($i=0; $i < 5 ; $i++) {
    echo $i;
    $i++; //spausdina 024
}
echo "<hr/>";
for ($i=0; $i < 6; $i++) {
    if ($i%2==0) {
        echo $i; //0;2;4;
    }
}
echo "<hr/>";
for ($i=0, $t=0; $t < 3; $t++, $i++) {
    echo $i; //0; 1; 2
}
echo "<hr/>";
for ($i=0; $i < 2 ; $i++) { //0true, zemyn .-tesiu 1 treu, leidziuos zemyn ir antro ciklo deka ispausdinu 1;1;, griztu false-nutraukiu darba
    for ($k=0; $k < 2 ; $k++) { //k=0 true, spausdinu i 0, k=1 true spausdinu i 0, 2false, griztu i virsu
        echo $i;
    }
}
?>
<script type="text/javascript" src="kartojimas.js">     </script>
