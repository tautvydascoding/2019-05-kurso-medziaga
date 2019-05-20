// console.log(" Labas   ");
//1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// function printKaina(x) {
//     console.log(x);
// }
// printKaina(15.99);
// printKaina(13.49);
// printKaina(999);
//
// // 2.1
// function pazymiuVidurkis() {
//     let paz1 = 5;
//     let paz2 = 10;
//     let paz3 = 8;
//     let paz4 = 6;
//     let paz5 = 8;
//     let vidurkis = (paz1+paz2+paz3+paz4+paz5)/5;
//     console.log(vidurkis);
// }
//
// pazymiuVidurkis();
//
// // 2.3
//
// function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
//     console.log("1 menesio pazymis: " + x1);
//     console.log("2 menesio pazymis: " + x2);
//     console.log("3 menesio pazymis: " + x3);
//     console.log("4 menesio pazymis: " + x4);
//     console.log("5 menesio pazymis: " + x5);
//     let vidurkis1 = (x1+x2+x3+x4+x5)/5
//     document.querySelector("h1").innerHTML = ("5 menesio pazymiu vidurkis "+vidurkis1);
// }
//
// pazymiuVidurkis1(5, 6, 7, 8, 9)
//
// // return
// function suma(x1, x2) {
//     let ats = x1+x2;
//     return ats; // grazina i iskvietimo vieta nurodyta reiksme (kintamasis).
    // po return kodas nutraukiamas, po return tolimesnis kodas nevykdomas.
//}

// let galutineSuma = suma (10, 2);
// document.write(galutineSuma);

// 3 uzduotis RETURN
// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja



// 1 uzduotis
// let vardas="Tomas";
// function getVardas() {
//     return vardas;
// }
// let getVardas1 = getVardas();
// document.write(getVardas1);
// 2 UZDUOTIS
// function getVardasPavarde() {
//     let vardas = "Antanas";
//     let pavarde = "Tomauskas";
//     let vardasPavarde = vardas + "" + pavarde;
//     return vardasPavarde;
// }
//
// let vardasPavarde = getVardasPavarde();
// document.write(vardasPavarde);

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
function getPelnas(pajamos, islaidos) {
    let pelnas = pajamos - islaidos;
    return pelnas;
}

let pelnas = getPelnas(12500, 7500);
document.write(pelnas);
