console.log(" Labas ");

// let zmg = ["Tomas", 21, "Kaunas", 820, true];
// //A
// // x = zmg[4]
// if ( zmg[4] === true ) {
//     console.log("Sveikinu - gausite paskola");
//
// } else {
//     console.log("Deja");
// }
// //  B
// if ( zmg[4]) {
// console.log("Sveikinu - gausite paskola");
// } else {
//     console.log("Deja");
// }
// // C
// if (zmg[4] != true) {
//     console.log("Deja");
// } else {
//     console.log("Sveikinu - gausite paskola");
// }


// ---------------------
// UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"
// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// 1.3 isvesti i console/ekrana "prekiautojai" masyva

// 2 pervadinti pirma stalciu pvz + "ir KO"
// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
    // !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

let prekiautojai = [];
// empty array
// 1.1
prekiautojai[0] = "senukai";
prekiautojai[1] = "ermitazas";
prekiautojai[2] = "Depo";
prekiautojai[3] = "santera";
prekiautojai[4] = "dextera";
// 1.3 prastesnis budas
console.log(prekiautojai);
// isvedimas geresnis budas
for (var i = 0; i < 5; i++) {
    console.log(prekiautojai[i] );
}
document.querySelector("p").innerHTML += (prekiautojai);
// 2
prekiautojai[0] += " ir KO";
console.log(prekiautojai[0]);
// 3
let a = prekiautojai[1];
prekiautojai[1] = prekiautojai[2];
prekiautojai[2] = a;
for (var i = 0; i < 5; i++) {
    console.log(prekiautojai[i] );
}
document.querySelector("body").innerHTML += prekiautojai[1] + " <br>";
document.querySelector("body").innerHTML += prekiautojai[2] + " <br>";
    // 3.1
    function sukeistiMasyvo2elementus(x, y) {
        let t = prekiautojai[x];
        prekiautojai[x] = prekiautojai[y];
        prekiautojai[y] = t;
        for (var i = 0; i < 5; i++) {
            console.log(prekiautojai[i] );
        }
}
sukeistiMasyvo2elementus(0, 4);
sukeistiMasyvo2elementus(1, 3);
