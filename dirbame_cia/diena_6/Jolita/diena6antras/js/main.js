console.log(" Labas ");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

function printKaina(x) {
    console.log(x);
}
printKaina(500);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

printKaina(20);
printKaina(10);
printKaina(15);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu

// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
    let x1 = 10;
    let x2 = 8;
    let x3 = 8;
    let x4 = 10;
    let x5 = 9;

    let vidurkis = ((((x1 + x2 + x3 + x3 + x4 + x5))) / 5);
    document.write("vidurkis yra:" + vidurkis);

}
pazymiuVidurkis();
pazymiuVidurkis();

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


function pazymiuVidurkis1(vardas, x1, zzz, x3, x4, x5) {
    let ats = (x1 + zzz + x3 + x4 + x5) / 5;

    console.log(vardas +" " + "Vidurkis" + " "+ ats);
}
pazymiuVidurkis1("Ieva", 10, 9, 10, 5, 5);
pazymiuVidurkis1("Povilas", 4, 2, 4, 5, 6);
pazymiuVidurkis1("Marius", 7, 8, 2, 3, 3);


//=====================RETURN==================
function sumaaa(a1, a2) {
    let atsakymas = a1 + a2;
    return atsakymas; //grazina i iskvietimo vieta salia parasyta reiksme
    //zemesnes eilutes niekada neivyks, jis tik grazino ir nieko dauugiau su ja nedaro,
    //reikia paleisti, kad grizusi atsakyma atspausdina
}
//let galutinesuma = sumaaa (10, 2);
//console.log(galutinesuma);


//arba

//console.log(sumaaa (10, 2));


// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja

//function getVardas() {
    //let vardas = "Tomas";
    //return vardas;
//}

//console.log( getVardas() );


// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja
function getVardasPavarde() {
    let pavarde = "Tomauskas";
    let vardas = "Antanas";
    return pavarde + vardas;
}
console.log(getVardasPavarde());


let z = getVardasPavarde(); //isaugo funkcijos reiksme ateiciai, jei nereik jos atspausdinti
console.log(z);

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

//DD) parasyti funcija "grynasPelnas()",
//kuri turi kintamaji "pelno mokestis" = 10%
//apskaiciuoti gryna pelnas

function getPelnas() {
    let pajamos = 12500;
    let islaidos = 7500;
    return apmokestpelnas = pajamos - islaidos;
}
console.log(getPelnas());

function getGrynas() {
    let mokestis = 0.1;
    return getPelnas() - (getPelnas() * mokestis);
}
console.log(getGrynas());


// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja


// 4.1 UZDUOTIS
//
// parasyti f-ja, kuri vieno mokinio vidurki
//turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
// 4.2 UZDUOTIS
//
// parasyti f-ja, kuri klases vidurki




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
