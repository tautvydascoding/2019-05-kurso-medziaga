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
//console.log( "suma yra:" +  ats );// ats kintamasis uzrakintas f-jos vduje, tai klaida


// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja
function getVardas() {
  let vardas = "Tomas";
    return 80;
}
console.log( getVardas()+ 1);


// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

//function getVardasPavarde(){

//  let pavarde = "Tomauskas";
//  return vardas + vardasPavarde;
//}
//console.log( getVardasPavarde() );
//let z = getVardasPavarde();

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja
// D) parasyti f-ja "grynasPelnas",
//kuri turi kintamaji "pelnoMokestis" = 10%;
//apskaiciuoti gryna pelna.

function getPelnas() {
  let pajamos = 12500;
  let islaidos = 7500;
  let pelnas = pajamos - islaidos;
  return pelnas;
}
console.log(getPelnas());


function grynasPelnas() {
  let pelnoMokestis = 0.10;
  let ats = getPelnas() - getPelnas() * pelnoMokestis;
console.log(ats);
}
grynasPelnas();
//
// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja


// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.
function getPazymiuVidurkis(x1, x2, x3, x4, x5) {
    let ats = (x1 + x2  + x3 + x4 + x5) / 5;
    return ats;
}
let mokinys1 = getPazymiuVidurkis(6, 6, 7, 7, 5);
let mokinys2 = getPazymiuVidurkis(3, 9, 9, 8, 9);
let mokinys3 = getPazymiuVidurkis(9, 9, 9, 7, 5);
let mokinys4 = getPazymiuVidurkis(2, 9, 9, 8, 9);
let mokinys5 = getPazymiuVidurkis(2, 2, 2, 2, 2);
let mokinys6 = getPazymiuVidurkis(3, 9, 9, 8, 9);
console.log( mokinys1, mokinys2, mokinys3, mokinys4, mokinys5, mokinys6  );

// 4.2 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja 6-kiu mokiniu pazymiu vidurki
// "getKlasesPazymiuVidurkis(y1, y2, y3, y4, y5, y6)"
// f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
// turi "return" zodeli.

function getKlasesPazymiuVidurkis( y1, y2, y3, y4, y5, y6){
     let klasesVidurkis = (y1 + y2 + y3 + y4 + y5 + y6) / 6;
     console.log( "klases vidurkis yra:" + klasesVidurkis);
 }
getKlasesPazymiuVidurkis( mokinys1, mokinys2, mokinys3, mokinys4, mokinys5, mokinys6 );


function getKlasesPazymiuVidurkis(  ){
    let mokinys1 = getPazymiuVidurkis(6, 6, 7, 7, 5);
    let mokinys2 = getPazymiuVidurkis(3, 9, 9, 8, 9);
    let mokinys3 = getPazymiuVidurkis(9, 9, 9, 7, 5);
    let mokinys4 = getPazymiuVidurkis(2, 9, 9, 8, 9);
    let mokinys5 = getPazymiuVidurkis(2, 2, 2, 2, 2);
    let mokinys6 = getPazymiuVidurkis(3, 9, 9, 8, 9);
    // pasitikriname
    console.log( mokinys1, mokinys2, mokinys3, mokinys4, mokinys5, mokinys6  );

    let klasesVidurkis = (mokinys1 + mokinys2 + mokinys3 + mokinys4 + mokinys5 + mokinys6) / 6;
    console.log( "klases vidurkis yra:" + klasesVidurkis);
}
getKlasesPazymiuVidurkis(  );


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
