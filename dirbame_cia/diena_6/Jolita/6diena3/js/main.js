

// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta
// "atspausdintas su f-ja" (panaudojanti document.write
//arba innerHTML)

// function printText() {
//     document.querySelector('body').innerHTML = "atspausdintas su f-ja";
// }
//
//printText();



// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)


// function printX(xx) {
//     document.querySelector('body').innerHTML += xx;
// }
// printX("cia buvau as");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
// for (let i = 0; i < 9; i++) {
//
//     function printX(xx) {
//         document.querySelector('body').innerHTML += xx;
//     }
//     printX("cia buvau as");
//
// }
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jei pavyks tada nusikopijuoti
//ir ideti i js faila
// let foto = '<img src="img/jura.jpg" alt="jura">';
//
// for (let i = 0; i < 5; i++) {
//
//     function printX() {
//
//         document.querySelector('body').innerHTML += foto;
//     }
//     printX();
//
// }

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)




// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |laikini, nesvarbus, daznai pasitaikantys kintamieji

let text = "";
// let tmp = ""; //
// let str = ""; //string

function piestiEilute(ilgis) {

    let text = "";

    for (var i = 0; i < ilgis; i++) {

        text += "-";
    }
    console.log(text);
}

piestiEilute(25);
console.log("vardas |  pavarde | amzius");
piestiEilute(30);

// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu ,
//jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
let kiekMenesiu = 10 * 12;
let menAtlyginimas = 680;
let proc = 0.01;  // 1%

function getAlga() {


    for (var i = 0; i < kiekMenesiu; i++) {

        let padidejimas =  menAtlyginimas * proc;
        console.log(padidejimas);
        menAtlyginimas = menAtlyginimas + padidejimas;
    }

return menAtlyginimas;
}
console.log(getAlga());
