console.log(" Labas ");
// deklaracija - kintamojo sukurimas
// Initialize  - kintamajam pradines reikems suteikimas
let name;     // deklaracija (sukuriam kintamajji)
let age = 18;    // Initialize
name = "Tomas";  // Initialize
name = "Toma";   // pakeitem reiksme
name = "Tom";    // pakeitem reiksme

// patartina visada kuriantis kintamaji
// atlikti Initialize
let istorija = "";
let atsiskaitymas = 0.0;

let zmg = ["Tomas", 21, "Kaunas", 820, true];
// UZDUOTIS
// patikrinti ar zmogus vedes :
// A) naudoti if  ir "=="
// jeigu vedes - isvesti teksta : "Sveikinu - gausite paskola"
// jeigu nevedes - isvesti teksta: "Deja, jums paskola nepriklauso"
// if ( zmg[4] === true ) {
//     console.log("Sveikinu - gausite paskola");
// } else {
//     console.log("Deja, jums paskola nepriklauso");
// }



// B) sunkesnis: patikrinima uz uzrasyti trumpesniu budu be "=="
// Ar salyga tiesa/true?
// if ( zmg[4] ) {
//     console.log("Sveikinu - gausite paskola");
// } else {
//     console.log("Deja, jums paskola nepriklauso");
// }


// C) sunkesnis: perfrazuoti tikrinima
//  ir ji uzrasyti su neiginiu: "!="
// if (zmg[4] != false) {
//     console.log("Sveikinu - gausite paskola");
// } else {
//     console.log("Deja, jums paskola nepriklauso");
// }

// Ar cia netiesa/FALSE?
if ( !zmg[4] ) {
    console.log("Deja, jums paskola nepriklauso");
} else {
    console.log("Sveikinu - gausite paskola");
}
