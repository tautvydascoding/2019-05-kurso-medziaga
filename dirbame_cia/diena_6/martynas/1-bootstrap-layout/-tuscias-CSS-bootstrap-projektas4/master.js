console.log("Labas");

// let vardas = "Tomas";
// console.log( vardas );

// function vardas() {
//     console.log("Tomas Statnaitis");
//
// }
//
// vardas();


// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas"); //ilgesnis budas
// alert("Viso"); //tinginuko budas trumpesnis
// alert (vardas);

// let ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);


// let zmoniuSkaicius = prompt("Kiek zmoniu");
// let gerimuKiekis = prompt("kiek gerimu");
// // let suma = zmoniuSkaicius * gerimuKiekis;
// console.log("Gerimu kiekis");
//
// // console.log(typeof(zmoniuSkaicius)); //pasiziureti koks tekstas
// let suma = parseInt (zmoniuSkaicius) + parseInt(gerimuKiekis);
// // tekstas paverciamas i skaicius
// console.log(suma); ("Gerimu Kiekis" , suma);




document.querySelector('h1').innerHTML = " Sapnas ne gyvenimas";
document.querySelector('h2').innerHTML = " Sapnas ne gyvenimas2";
document.querySelectorAll('h2')[1].innerHTML = " Sapnas ne gyvenimas2 su all";
document.querySelector('h3').innerHTML = " Sapnas ne gyvenimas3";



//----Elemento duomenys--------
// auksto paemimas:
var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:
document.querySelector("h1").style.width = "50%"; 		// change the height of a <div> element:
document.querySelector("h1").style.color = 'blue'; 		// change the height of a <div> element:
document.querySelector("h2").style.backgroundColor = 'red'; 		// change the height of a <div> element:

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
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

function printKaina() {
    console.log(999);
    console.log(13.49);
    console.log(100.05);

}

printKaina();

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis() {
    let pazymiai = 5+10+8+6+8;
    let pazymiuVidurkis = pazymiai/5;
    console.log(pazymiuVidurkis);

}

pazymiuVidurkis();
// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
    let pazymiuVidurkis = x/5;
    console.log(pazymiuVidurkis);

}
pazymiuVidurkis(5, 10 , 8 , 6 , 8);

//=====================RETURN==================

// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja


function getVardas() {
let vardas ="tomas";
    return;

}

getVardas();
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
