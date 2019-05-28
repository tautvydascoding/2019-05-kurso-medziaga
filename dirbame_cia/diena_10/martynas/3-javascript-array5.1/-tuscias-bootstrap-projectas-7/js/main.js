console.log(" Labas ");
// apsilimui

var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"


// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60

let i = 0;
let darbuotojai = [];
for (i = 0; i < 60; i++) {

    //random - loterija nuo 0 iki 0.99999
    darbuotojai[i] = Math.floor (Math.random() * 100 + 10);
}
console.log(darbuotojai);

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }


for ( i = 0; i < darbuotojai.length; i++) {
    a = Math.random ();
    if (a <= 0.1) {
         // random nuo 0 iki 0.999999999
        darbuotojai[i] = darbuotojai[i] * -1;
    }


}

console.log(darbuotojai);

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)


for ( i = 0; i < darbuotojai; i++) {
    //neigiamu skaiciu pavertimas teigiamais
    if (darbuotojai[i] < 0) {
        darbuotojai [i] = darbuotojai [i] * -1;
    }
}
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
let geriausias = -99999;
let geriausioDarbuotojoNR = -1;
for (  i = 0; i < darbuotojai.length; i++) {
    if ( geriausias < darbuotojai[i]) {
        geriausias = darbuotojai[i];
        geriausioDarbuotojoNR = i;
    }
}
console.log( "geriausias rezultatas:" + geriausias);
console.log( "geriausias darbuotojas:" + geriausioDarbuotojoNR);

// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
