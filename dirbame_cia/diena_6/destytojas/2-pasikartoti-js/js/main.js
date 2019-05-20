console.log(" Labas ");

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

function printKaina(x) {
    console.log( x );
}
printKaina( 15.99 );


//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);
printKaina( 25.99 );
printKaina( 35.99 );
printKaina( 110.99 );

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis() {
    let x1 = 10;
    let x2 = 10;
    let x3 = 10;
    let x4 = 10;
    let x5 = 5;
    let vidurkis = ((((x1 + x2 + x3 + x4 + x5))) / 5);
    document.write(" vidurkis yra:"  + vidurkis);
}
pazymiuVidurkis();
pazymiuVidurkis();
pazymiuVidurkis();

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, zzz, x3, x4, x5) {
    let ats = (x1 + zzz  + x3 + x4 + x5) / 5;
    console.log( "Vidurkis " + ats );
}
pazymiuVidurkis1(  10, 10, 10, 10, 10);
pazymiuVidurkis1(  2, 2, 2, 5, 6);
pazymiuVidurkis1(  4, 5, 4, 6, 7);
// ------
function pazymiuVidurkis2(vardas ,x1, zzz, x3, x4, x5) {
    let ats = (x1 + zzz  + x3 + x4 + x5) / 5;
    console.log( vardas + " " + "Vidurkis " + ats );
}
pazymiuVidurkis2("Ieva",   10, 9, 10, 5, 5);
pazymiuVidurkis2("Povilas", 4, 5, 6, 7, 7);
pazymiuVidurkis2("Marius",  4, 4, 4, 3, 5);
//=====================RETURN==================
function suma(   x1, x2) {
    let ats =  x1 + x2;
    return ats;  // grazini i iskvieitmo vieta salia parasyta reiksme
}
let galutineSuma = suma(10, 2);
console.log(  galutineSuma   );

// arba
console.log(   suma(10, 2)     );


//=====================RETURN==================
function suma(   ) {
    let ats =  10 + 20;
}
console.log( "suma yra:" +  ats );

// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja


// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")



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
