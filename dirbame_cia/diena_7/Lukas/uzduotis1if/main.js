// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama

// arVedes = false;
// arDuotiPaskola = false;
//
// if (arVedes = true) {
//     console.log("Paskola yra galima, nes jus vedes");
// } else {
//     console.log("Jus esate nevedes, todel paskolos neduosime");
// }

// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

// vardas1 = prompt("Iveskite savo varda").toLowerCase();
// vardas2 = prompt("Iveskite draugo varda").toLowerCase();
//
// if (vardas1 == vardas2) {
//     console.log("Jusu vardai sutampa")
// } else {
//     console.log("Jusu vardai skiriasi");
// }
// if (vardas1 == "tomas" || vardas2 == "tomas"){
//     console.log("Sveikas Tomai!");
// }
// // Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// // pranesti kad vardai: "Tomas ir Karolis"
// // arba pranesti, kad : "vardai NE Tomas ir Karolis"
// // pakeitineti vardus ir paziureti ar veikia
// if (vardas1 == "tomas" && vardas2 == "karolis") {
//     console.log("Jusu vardas yra Tomas, o draugo Karolis.");
// } else {
//     console.log("Jusu vardai nera Tomas IR Karolis.");
// }

// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia
//
// if (vardas1 == "tomas" || vardas2 == "tomas") {
//     console.log("Tavo arba tavo draugo vardas yra Tomas");
// }
// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

// let age = prompt("Iveskite savo amziu");
// let age1 = parseInt(age);

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

// if (age1 <= 7) {
//     console.log("Pliusines varles");
//     console.log("Sokoladiniai zuikuciai 20% nuolaida");
// }else if (7 < age1 <= 14) {
//     console.log("mini telefonai");
// }else if (14 < age1 <= 18) {
//     console.log("new music app");
// }else if (18 < age1 <= 24) {
//     console.log("stok i sauliu sajunga");
// }else if (24 < age1 <= 65) {
//     console.log("pensijos kaupimas");
// }else if  (age1 > 65) {
//     console.log("kelione i birstona");
//     console.log("Sokoladiniai zuikuciai 20% nuolaida");
// }

// 2 UZDUOTIS
// susikurti kintamaji 'klietoVardas' - (ja ivesime betkokia) kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))

// kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
// let klientoVardas = prompt("iveskite varda").toLowerCase;
// let vardas10 = "tomas";
// let vardas20 = "paulius";
// let vardas30 = "airidas";
// if (klientoVardas == vardas10) {
//     document.write("Masinoms 10% nuolaida <br>");
// }else if (klientoVardas == vardas20) {
//     document.write("Buitinei technikai 30% nuolaidai <br>");
// }else {
//     document.write("Jums taikoma 5% nuolaida kelionems <br>");
// }


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
let klientoTipas = prompt("Iveskite savo kliento tipa:").toLowerCase();
if (klientoTipas == tipas1) {
	document.write("Jums taikomas 15% nuolaida visoms prekems <br>");
} else if (klientoTipas == tipas2) {
    document.write("Jums taikoma 30% visoms prekems <br>");
} else if (klientoTipas == tipas3) {
    document.write("Jums taikoma 95% nuolaida VISKAM!!!! <br>");
} else {
    document.write("Pirk naryste, nes be jos nuolaidu negausi!!! <br>");
}
