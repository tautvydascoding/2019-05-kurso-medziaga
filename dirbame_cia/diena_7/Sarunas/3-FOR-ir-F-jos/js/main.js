//==============TEORIJA ++ / -- ==========
    var x = 10;
    x = x + 3;  // x = 13
    x += 3;     // tas pats kad x = x + 3;
    x++;       //  tas pats kas x = x + 1;

    let text= "";
    let tekstas = "";
    let t = "";
    let tmp = ""; //temponary
    let str = ""; //string
    let s = ""; //string

//=============FOR   LOOP====================
let i=0;
// let tekstas = " " ;
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration
// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins
// teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)

function print(){
    document.querySelector("body").innerHTML += "atspausdintas su f-ja";
}
print();
print();

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)
function printX( xx ) {
    document.querySelector("body").innerHTML += xx;
}
printX("Cia buvau as <br>");
printX("<p> mano istorija </p>");


// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for ( i = 0; i < 5 ; i++) {
    printX("Cia buvau as <br>");
}
  // 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

let nuotrauka = '<img src="img/1.jpg" width=25% alt="suo melynas su liemene">';
document.querySelector("body").innerHTML += nuotrauka;

for (i=0; i < 11; i++) {
    printX( nuotrauka );
}

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

function piestiEilute( ilgis ) {
    tekstas = ""; //nunulinimas
    for (i = 0; i < ilgis; i++) {
      tekstas = tekstas + "-";
      }
      console.log( tekstas );// atspausdina eilute

}
piestiEilute(25);

console.log(" vardas |  pavarde | amzius");
piestiEilute(25);
piestiEilute(25);

//piestiStulpeli(5);

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

// ==============SCSS============================

//========= local/global or Frog/Garden =======
