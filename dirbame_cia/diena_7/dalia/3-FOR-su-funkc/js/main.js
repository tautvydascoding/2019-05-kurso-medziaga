console.log(" Labas ");{

}



// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)

function manoPrint() {
  //document.write("atspausdintas su funkcija");
  document.querySelector("body").innerHTML += "atspausdinta su funkcija <br>"
}
manoPrint();


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

//xx - naujas isigalvotas laikinas kintamasis. (xx) reiskia, funkcija kazkok laukia
function printX( xx ) {
  document.querySelector("body").innerHTML += xx;
  //+= reiskia, jog prie esamo html turinio pridedamas tas keiciamas turinys
  //= reiskia, jog istrinamas html elemento turinys ir vietoje jo idedamas naujas
}
printX("Cia buvau as <br>");
printX("<p> dar </p>");


// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu


for (var i = 0; i < 12; i++) {

printX( "Cia buvau as <br>");
}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila
let foto = '<img src="img/1.jpg" width="25%" alt="suo">';
document.querySelector("body").innerHTML += foto;
//+= reiskia, jog prie esamo html turinio pridedamas tas keiciamas turinys
//= reiskia, jog istrinamas html elemento turinys ir vietoje jo idedamas naujas
for (var i = 0; i < 12; i++) {
 printX( foto);
}



// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

let tekstas = "";

function piestiEilute(ilgis) {
  tekstas = "";
  for(i = 0; i < ilgis; i++){
    tekstas = tekstas + "-"

  }
    console.log( tekstas);//atspausdina eilute
}
piestiEilute(25);
console.log("vardas |  pavarde | amzius");
piestiEilute(25);

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

//========= local/global or Frog/Garden ======
