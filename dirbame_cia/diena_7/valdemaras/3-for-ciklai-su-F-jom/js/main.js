console.log(" Labas ");
let text = "";
// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)
function manoPrint() {
// document.write("atspausdintas su f-ja");
document.querySelector("body").innerHTML += "atspausdintas su f-ja <br>";
}
manoPrint();
manoPrint();
// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)
function PrintX(xx) {
document.querySelector("body").innerHTML += xx ;

}
PrintX("mano tektas <br>");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for ( i = 0; i < 10; i++) {
PrintX("mano tektas <br>");
}
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila
let nuotrauka = '<img src="img/img.jpeg" width="33%" alt="beach">';
for ( i = 0; i < 12; i++) {
PrintX(nuotrauka);
}
// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
function piestiEilute(ilgis) {
    text = "";
    for ( i = 0 ; i < ilgis; i++) {
        text += "-";
    }
    console.log(text);
}

piestiEilute(25);
console.log("vardas | pavarde | amzius");
piestiEilute(25);
// spausdintiStulpeli(x)
// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%
let kiekMenesiu = 10 * 12;
let menAtlyginimas = 680;
let algosPokytis = 0.01;
function algaPo1men() {
alga = kiekMenesiu * (menAtlyginimas + (menAtlyginimas * algosPokytis));
}
console.log(alga);
algaPo1men();
// for ( i = 0; i < kiekMenesiu; i++) {
//
// }

// ==============SCSS============================

//========= local/global or Frog/Garden =======
