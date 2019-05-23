console.log(" Labas ");
//=============IF====================
// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama
let arVedes = true;
let arDuotiPaskola = false;

if (arVedes == true) {
    arDuotiPaskola = true;

} else {
    arDuotiPaskola = false;
}
// --------pranesimas
if (arDuotiPaskola == true){
    console.log("Sveikinu");
} else {
    console.log("Deja.");
}

// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
let vardas1 = "Tomas";
let vardas2 = "Antanas";
if (vardas1 == "Tomas" && vardas2 == "Antanas") {
    console.log("vardai sutampa");
} else {
    console.log("vardai yra skirtingi");
}
// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
if (vardas1 == "Tomas") {
    console.log("Sveiki");
}
// C)
// Patikrinti ar vardas1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia
if (vardas1 == "Tomas" && vardas2 == "Karolis") {
    console.log("Tomas ir Karolis");
} else {
    console.log("vardai NE Tomas ir Karolis");
}
// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia
if (vardas1 == "Tomas" || vardas2 =="Tomas") {
    console.log("kazkuris is vardu yra Tomas");
}
// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

let age = 66;
// Salygos:

// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"
if (age < 7 || age > 65) {
    console.log("Sokoladiniai zuikuciai 20% nuolaida");
    if (age < 7 ) {
        console.log("Pliusines varles");
    }
} else if (age < 14) {
    console.log("Mini telefonai");
} else if (age < 18) {
    console.log("new Music App");
} else if (age < 24) {
    console.log("Stok i sauliu sajunga");
} else if (age < 65) {
    console.log("Pensijos kaupimas - uzsiregistruok");
} else if (age > 65 || age <7) {
    console.log("Sokoladiniai zuikuciai 20% nuolaida");
} if (age > 65) {
    console.log("kelione i Bristona");
}


// 2 UZDUOTIS
// susikurti kintamaji 'klientoVardas' - (ja ivesime betkokia) kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))

// kai "if"-ui padauodame klietoVardas yra lygus vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame klietoVardas yra lygus vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
let klientoVardas = "Paulius";
let vardas = "Tomas"
let vardas4 = "Paulius";
let vardas3 = "Airidas";
if (klientoVardas == vardas) {
    console.log("Masinoms 10% nuolaida");
} else if (klientoVardas == vardas4) {
    console.log("Buitinei technikai  30% nuolaida");
}else {
    console.log("5% nuolaida kelionems");
}
// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime

// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
let tipas1 = "bronze";
let tipas2 = "silver";
let tipas3 = "gold";
let klientoTipas = "gold"
if (klientoTipas == tipas1) {
console.log(" 15% nuolaida");
} else if (klientoTipas == tipas2) {
console.log(" 30% nuolaida");
} else {
    console.log(" 5% nuolaida  ");
}
