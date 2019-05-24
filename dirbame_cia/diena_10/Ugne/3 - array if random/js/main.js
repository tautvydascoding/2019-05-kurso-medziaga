console.log(" Labas ");
let i = 0;

// apsilimui

var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
console.log("-----------0 uzduotis------------");

for ( i=min; i<max; i++){
  masyvas[i-min]= i;
}

for(i=0; i<masyvas.length; i+=2){
  if (masyvas[i] % 2 == 0){
    masyvas[i]= "lyginis";
}
}
console.log(masyvas);

// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
console.log("-----------1 uzduotis------------");

masyvas1 = [];

for (i=0; i<60; i++){
  masyvas1[i] = Math.floor(Math.random()*(max-(min-1)) + min);
}

console.log(masyvas1);


// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }
console.log("-----------2 uzduotis------------");

for(i=0; i<masyvas1.length; i++){
  var a = Math.random();
  if ( a <= 0.1) {
    masyvas1[i] *= -1;
  }
}

console.log(masyvas1);



// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
console.log("-----------3 uzduotis------------");

for(i=0; i<masyvas1.length; i++){
  if (masyvas1[i]<0){
    masyvas1[i] *= (-1);
  }
}

console.log(masyvas1);

// 4 UZDUOTIS:
// surasti geriausia darbuotoja
console.log("-----------4 uzduotis------------");

let palyginimas = 0;
let numeris = 0;

for (i=0; i<masyvas1.length; i++){
  if (masyvas1[i] > palyginimas){
    palyginimas = masyvas1[i];
    numeris = i;
  }
}

console.log("Geriausio darbuotojo numeris masyve: " + numeris);
console.log("Geriausio darbuotojo reikšmė: " + palyginimas);


// let geriausias = Math.max(...masyvas1); <-------- naudojant ES6
// console.log("Geriausias darbuotojas: " + geriausias);

// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
console.log("-----------5 uzduotis------------");

let palyginimas1 = 120;
let numeris1 = 0;

for (i=0; i<masyvas1.length; i++){
  if (masyvas1[i] < palyginimas1){
    palyginimas1 = masyvas1[i];
    numeris1 = i;
  }
}

console.log("Blogiausio darbuotojo numeris masyve: " + numeris1);
console.log("Blogiausio darbuotojo reikšmė: " + palyginimas1);



// let blogiausias = Math.min(...masyvas1); <-------- naudojant ES6
// console.log("Blogiausias darbuotojas: " + blogiausias)
