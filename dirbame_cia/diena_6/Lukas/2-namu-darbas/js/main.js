//1) pasikartoti java script “return” zodeli
// 2 UZDUOTIS
// sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.
// patikrinti ar veikia f-ja


//2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");
// sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”

//3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById('manoDiv').offsetHeight;)
// A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// B) su js paimti jo auksti ir atspausdinti
// C) sumazinkite ekrana ir perkraukite puslapi. Ar js isvedamas aukstis pasikeite?

//4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
//plain js
//https://plainjs.com/javascript/manipulation/



// 1 UZDUOTIS
let alga = 500;
let pavarde = "Pietkus";

function getPavarde() {
    return pavarde;
    console.log(pavarde);
}
getPavarde();

// 2 UZDUOTIS
function print(x) {
    document.write(x);
}

print("labas");

// 3 UZDUOTIS
let aukstis = document.getElementById('aukstis').offsetHeight
document.write(aukstis);
