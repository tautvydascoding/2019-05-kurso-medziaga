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

for ( i = 0; i < 60; i++) {
    darbuotojai[i] = Math.floor(Math.random() * 100) +10; //loterija nuo 0 iki 0.99999
    }
    console.log(darbuotojai);
// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
for ( i = 0; i < darbuotojai.length; i++) {
    a = Math.random();
    if ( a <= 0.1) {
        darbuotojai[i] = darbuotojai[i] * -1;
    }
}
console.log(darbuotojai);

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
for (i = 0; i < darbuotojai.length; i++) {
    if (darbuotojai[i]<0) {
        darbuotojai[i] = darbuotojai[i] * (-1);
    }
}
console.log(darbuotojai);
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
let laikinas = -99999;//jei sukuriu kintamaji ciklo viduje, tai kintamaji wsukuriu daugybe kartu, ar tikrai to reikia?
let gersnr = -1; //nesvarbu kokia pradine reiksme
for ( i = 0; i < darbuotojai.length; i++) {

    if (laikinas < darbuotojai[i]) {   //bet kuris bus geresnis
laikinas = darbuotojai[i];  //isimenam kuris rezultatas geresnis
gersnr = i; //isimenam numeri geresnio
    }
}

console.log("geriausias rezultatas" + laikinas + "  jo numeris " + gersnr);


// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
