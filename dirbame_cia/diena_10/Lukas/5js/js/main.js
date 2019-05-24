let i = 0;
// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
let masyvoIlgis = 60;
let min = 10;
let max = 101;
let masyvas = [];
for (i = 0; i < masyvoIlgis ; i++) {
    masyvas.push(Math.floor(Math.random() * (max-min)) + min);
}

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }

i = 0;
for (i = 0; i < masyvas.length; i++) {
    if (Math.random() <= 0.1) {
        masyvas[i] = masyvas[i] * -1;
    }
}
console.log(masyvas);

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
i = 0;
for (i = 0; i < masyvas.length; i++) {
    if (masyvas[i] < 0) {
        masyvas[i] = masyvas[i] * -1;
    }
}
console.log(masyvas);
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
let geriausias = -999 // blogiausias darbuotojas
for (i = 0; i < masyvas.length; i++) {
    if (masyvas[i] > geriausias) {
        geriausias = masyvas[i];
    }
}
console.log(geriausias);
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
i = 0;
let blogiausias = 1000;
for (i = 0; i < masyvas.length; i++) {
    if (masyvas[i] < blogiausias) {
        blogiausias = masyvas[i];
    }
}

console.log(blogiausias);
