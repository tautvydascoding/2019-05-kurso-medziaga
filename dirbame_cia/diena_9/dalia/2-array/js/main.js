console.log(" Labas ");
// UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"
// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// 1.3 isvesti i console/ekrana "prekiautojai" masyva

// 2 pervadinti pirma stalciu pvz + "ir KO"
// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
  // !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

let prekiautojai = []; // empty array


prekiautojai[0] = "Senukai";
prekiautojai[1] = "Depo";
prekiautojai[2] = "Ermitazas";
prekiautojai[3] = "Aleksoto turgus";

prekiautojai[0] = "Senukai ir Ko";
let x = prekiautojai[2];
prekiautojai[2] = prekiautojai[3];
prekiautojai[3] = x;



console.log(prekiautojai);
document.write(prekiautojai);

document.querySelector("body").innerHTML += prekiautojai[2] + "<br";
document.querySelector("body").innerHTML += prekiautojai[3] + "<br";
