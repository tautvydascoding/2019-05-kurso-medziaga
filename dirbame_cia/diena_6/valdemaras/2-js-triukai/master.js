console.log(" Labas   ");
//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);
function printKaina(x) {
console.log(x);
}
printKaina(15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
printKaina(999);
printKaina(13.49);
printKaina(100.05);
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);
printKaina("printKaina "+999);


// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
function pazymiuVidurkis(x) {
    let x1 = 10;
    let x2 = 10;
    let x3 = 10;
    let x4 = 10;
    let x5 = 5;
    let vidurkis = ((x1 + x2 + x3 + x4 + x5) /5);

document.write("vidurkis yra " + vidurkis);
}
pazymiuVidurkis();

// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis1(x1 ,x2, x3, x4, x5) {
    let vidurkis = ((x1 + x2 + x3 + x4 + x5) /5);
console.log("vidurkis yra " + vidurkis);
document.write("vidurkis yra " + vidurkis);
}

pazymiuVidurkis1( 10, 9, 10, 5, 5);
pazymiuVidurkis1( 4, 5, 6, 7, 7);
pazymiuVidurkis1( 4, 4, 4, 3, 5);
//
// pazymiuVidurkis2( "Ieva", 10, 9, 10, 5, 5);
// pazymiuVidurkis2("Povilas", 4, 5, 6, 7, 7);
// pazymiuVidurkis2("Marius", 4, 4, 4, 3, 5);

function pazymiuVidurkis2(vardas, x1 ,x2, x3, x4, x5) {
    let vidurkis = ((x1 + x2 + x3 + x4 + x5) /5);
console.log(vardas +" " + "vidurkis yra " + vidurkis);
document.write(vardas +" " + "vidurkis yra " + vidurkis);
}

pazymiuVidurkis2("Ieva", 10, 9, 10, 5, 9);
pazymiuVidurkis2("Povilas", 4, 5, 6, 7, 7);
pazymiuVidurkis2("Marius", 4, 4, 10, 3, 5);

// ------------RETURN--------
function suma(x1, x2){
    let ats = x1 + x2;
    return ats; //grazinti i skaiciavimo vieta salia parasyta reiksme
}
let galutineSuma = suma(10, 2);
console.log(galutineSuma );
// arba
console.log( suma(10, 2) );

//=====================RETURN==================

// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja
function getVardas() {
    let vardas = "Tomas";
    return 99;
}
console.log(getVardas() + 1 );
// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja
function getVardasPavarde() {
    let pavarde = "Tomauskas";
    let vardas = "Antanas";
    return vardas + " " + pavarde;
}
console.log(getVardasPavarde());
// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja
function getPelnas() {
    let pajamos = 12500;
    let islaidos = 7500;
    let pelnas = pajamos - islaidos;
    return pelnas;
}
console.log(getPelnas());

function grynasPelnas(){
    let m = getPelnas();
    let grynospajamos = m - (m * 0.1);
    return "Grynas Pelnas " + grynospajamos;
}
console.log(grynasPelnas() );

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja


// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    let vidurkis = (x1 + x2 +x3 +x4 +x5) / 5;
    return vidurkis;
}
console.log(getPazymiuVidurkis2(2, 8, 5, 6, 9));
// 4.2 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja 6-kiu mokiniu pazymiu vidurki
// "getKlasesPazymiuVidurkis(y1, y2, y3, y4, y5, y6)"
// f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
// turi "return" zodeli.
let z1 = getPazymiuVidurkis2(2, 8, 5, 6, 9);
let z2 = getPazymiuVidurkis2(2, 8, 7, 6, 9);
let z3 = getPazymiuVidurkis2(10, 8, 5, 6, 5);
let z4 = getPazymiuVidurkis2(2, 5, 5, 6, 9);
let z5 = getPazymiuVidurkis2(4, 8, 5, 6, 9);
let z6 = getPazymiuVidurkis2(7, 8, 10, 6, 9);
console.log(z1, z2, z3, z4, z5, z6);

function getKlasesPazymiuVidurkis(y1, y2, y3, y4, y5, y6) {
    let vidurkis = (z1 + z2 + z3 + z4 + z5 + z6) / 6;
    return "klases vidurkis " + vidurkis;
}
console.log(getKlasesPazymiuVidurkis(z1, z2, z3, z4, z5, z6));

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
function getH1ElementoAukstis() {
    let aukstis = document.querySelector("h1").clientHeight;
    return "H1 aukstis " + aukstis;
}
console.log(getH1ElementoAukstis());
