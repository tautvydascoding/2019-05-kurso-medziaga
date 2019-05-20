console.log("Labas Dirbam");
//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);
function printKaina(x) {
    console.log(x);
}
printKaina("kaina" +  15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

printKaina (25.99);
printKaina (35.99) ;
printKaina (100);



// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// pazymiuVidurkis("Ieva", 10, 9, 10, 5, 5);
// pazymiuVidurkis("Marius", 10, 5, 4, 5, 5);
// pazymiuVidurkis("Povilas", 10, 7, 3, 5, 5);

// function pazymiuVidurkis() {
//     let x1 =10;
//     let x2 =10;
//     let x3 =10;
//     let x4 =10;
//     let x5 =5;
//     let vidurkis = ((((x1 +x2 + x3 + x4 + x5))) / 5);
//     document.write("vidurkis yra:" + vidurkis);
//
// }
//
// pazymiuVidurkis();

// function pazymiuVidurkis(x1, zzz, x3, x4, x5) {
//     let ats = (x1 + zzz + x3 + x4 + x5) / 5;
//     console.log("Vidurkis" + ats);
//
// }
//
// pazymiuVidurkis(10, 10, 10, 10);
// pazymiuVidurkis(2, 2, 2, 5, 6);
// pazymiuVidurkis(4, 5, 4, 6, 7);
// function pazymiuVidurkis(vardas, x1, zzz, x3, x4, x5) {
//     let ats = (x1 + zzz + x3 + x4 + x5) / 5;
//     console.log(vardas + " " + "Vidurkis " + ats);
//
// }
//
// pazymiuVidurkis("Ieva", 10, 10, 10, 10, 10);
// pazymiuVidurkis("Povilas", 2, 2, 2, 5, 6);
// pazymiuVidurkis("Marius", 4, 5, 4, 6, 7);



// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


// function suma(x1, x2) {
//     let ats = x1 + x2;
//     return ats; //grazina i iskvieitmo vieta salia parasyta reiksme
//
// }
//
// let galutineSuma = suma (10, 2);
// console.log(galutineSuma);


// function suma() {
//     let ats = 10 + 20;
//
// }
// console.log( "suma yra " +  ats);

//=====================RETURN==================

// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja

// function getVardas() {
//     let vardas = "Tomas";
//     return vardas;
//
// }
// console.log( getVardas() );


// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja
 function getVardasPavarde() {
     let pavarde = "Tomasauskas";
     let vardas = "Tomas";
     return vardas + pavarde;
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

function grynasPelnas() {
    let plnMokesciai = 0.1;
    console.log(getPelnas());
    let likutis = (getPelnas()) * plnMokesciai;
    return likutis;

}
 console.log(grynasPelnas());



// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja
// let pajamos = 12500;
// let nuostoliai = 7500;
//
// function getPelnas(pajamos, nuostoliai) {
//     let pelnas = pajamos - nuostoliai;
//     return pelnas
//
// }
//
// console.log(getPelnas(pajamos, nuostoliai));

// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

// let pazymiai1=( 10, 10, 10, 10, 10);
// let pazymiai2=( 2, 2, 2, 5, 6);
// let pazymiai3=( 4, 5, 4, 6, 7);
//
// function moksleiviuPazymiai() {
//     let pazymiuVidurkisMokinio =
//
// }

// function getPazymiuVidurkis2() {
//
//     let vidurkis =( (pazymiai1 + pazymiai2 + pazymiai3) /5);
//     return vidurkis
// }
//
// console.log(getPazymiuVidurkis2());

function getKlasesPazymiuVidurkis(x1, x2, x3, x4, x5, x6) {
    let ats = (x1 + x2 + x3 + x4 + x5 + x6) / 5;
    return ats;
}


let y1 = getKlasesPazymiuVidurkis(10, 5, 6, 5, 9, 8);
let y2 = getKlasesPazymiuVidurkis(6, 8, 7, 9, 8, 7);
let y3 = getKlasesPazymiuVidurkis(6, 8, 7, 9, 8, 7);
let y4 = getKlasesPazymiuVidurkis(6, 8, 7, 10, 8, 7);
let y5 = getKlasesPazymiuVidurkis(6, 10, 7, 9, 8, 7);
let y6 = getKlasesPazymiuVidurkis(6, 8, 10, 9, 8, 7);

console.log(y1, y2, y3, y4, y5, y6);

function klasesVidurkis(y1, y2, y3, y4, y5, y6) {
    let vidurkis = (y1 + y2 + y3 + y4 + y5 + y6) / 6;
    console.log(vidurkis);
    return vidurkis;

}

klasesVidurkis(y1, y2, y3, y4, y5, y6);



// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====
