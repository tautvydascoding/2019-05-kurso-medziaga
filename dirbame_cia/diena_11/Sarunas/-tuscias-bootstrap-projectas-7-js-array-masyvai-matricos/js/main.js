console.log(" Labas ");

let seima = [];
let dukte = ["Jore", 1980, "Zalia"];
let sunus = ["Jonas", 1991, "Juoda"];

// matrica
seima[0] = dukte;
seima[1] = sunus;
//pasitikrinti
console.log( seima );
// UZDUOTIS:
// pakeisti Jores varda ir gimimo data.
// pakeisti Jono plauku spalva
seima[0][0] = "Ana"; // Jores
seima[0][1] = 1981;
seima[1][2] = "Pilka"; // Jono

console.log( seima );
console.log( seima [0][0]); // Jores -> Ana
// UZDUOTIS 1.0
// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
let visidarbuotojai = [];
let darbutojas1 = ["Jonas", "Jonaitis" 1980, "Inspektorius"];
let darbutojas2 = ["Ona", "Onute" 1980, "sekretore"];
let darbutojas3 = ["Kestas", "Kerta" 2001, "pavaduotojas"];

//matrica
visiDarbuotojai = [visiDarbuotojai];
//pasitikrinti
console.log( visiDarbuotojai );
//UZDUOTIS 1.0
// isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR ciklo)
document.queryselector('body').innerHTML += visiDarbuotojai[0][0];
document.queryselector('body').innerHTML += visiDarbuotojai[0][1];
document.queryselector('body').innerHTML += visiDarbuotojai[0][2];
document.queryselector('body').innerHTML += visiDarbuotojai[0][3];
document.queryselector('body').innerHTML += "<br>";




// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
// D. sukurti masyva 'visiDarbuotojai'
// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
// UZDUOTIS 1.0
// isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
for ( i = 0; i < visiDarbuotojai.length; i++) {
    document.queryselector('body').innerHTML += visiDarbuotojai[0][0];
}



// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
for ( i = 0; i < visiDarbuotojai[0].length; i++) {
  document.queryselector('body').innerHTML += visiDarbuotojai[i][0]; //0 - vardai laikomi

document.queryselector('body').innerHTML += "<br>"
}
// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
for ( i = 0; i < visiDarbuotojai.length; i++) {
    document.queryselector('body').innerHTML += visiDarbuotojai[i][0];
    document.queryselector('body').innerHTML += visiDarbuotojai[i][0];
    document.queryselector('body').innerHTML += visiDarbuotojai[i][0];
    document.queryselector('body').innerHTML += visiDarbuotojai[i][0];
    document.queryselector('body').innerHTML += visiDarbuotojai[i][0];
    document.queryselector('body').innerHTML += "<br>";
    }
// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
for ( i = 0; i < visiDarbuotojai.length; i++) {
  console.log( "darbuotojo numeris" );
}
